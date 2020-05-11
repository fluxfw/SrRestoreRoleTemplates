<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates;

use ilDBConstants;
use ilObjCourse;
use ilObjRole;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Repository constructor
     */
    private function __construct()
    {

    }


    /**
     * @internal
     */
    public function dropTables()/*: void*/
    {

    }


    /**
     * @return Factory
     */
    public function factory() : Factory
    {
        return Factory::getInstance();
    }


    /**
     * @return ilObjCourse[]
     */
    public function getObjects() : array
    {
        $result = self::dic()->database()->queryF('
SELECT ref_id
FROM object_data
INNER JOIN object_reference ON object_data.obj_id=object_reference.obj_id
WHERE type=%s
AND object_reference.deleted IS NULL', [ilDBConstants::T_TEXT], ["crs"]);

        return array_map(function (array $object) : ilObjCourse {
            return new ilObjCourse($object["ref_id"]);
        }, self::dic()->database()->fetchAll($result));
    }


    /**
     * @internal
     */
    public function installTables()/*: void*/
    {

    }


    /**
     * @param ilObjCourse $obj
     *
     * @return int
     */
    public function reapplyRoleTemplates(ilObjCourse $obj) : int
    {
        $count = 0;

        foreach ($obj->getDefaultCourseRoles() as $obj_role_tile => $obj_role_id) {
            $this->reapplyRoleTemplate($obj, $obj_role_id, current(ilObjRole::_getIdsForTitle($obj_role_tile, "rolt")));
            $count++;
        }

        return $count;
    }


    /**
     * @param ilObjCourse $obj
     * @param int         $obj_role_id
     * @param int         $role_template_id
     */
    protected function reapplyRoleTemplate(ilObjCourse $obj, int $obj_role_id, int $role_template_id)/*:void*/
    {
        self::dic()
            ->rbac()
            ->admin()
            ->copyRoleTemplatePermissions($role_template_id, self::dic()->rbac()->review()->getParentRoleIds($obj->getRefId(), true)[$role_template_id]["parent"], $obj->getRefId(), $obj_role_id,
                false);

        (new ilObjRole($obj_role_id))->changeExistingObjects($obj->getRefId(), ilObjRole::MODE_PROTECTED_KEEP_LOCAL_POLICIES, ["all"]);
    }
}
