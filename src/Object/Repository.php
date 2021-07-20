<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Object;

use ilDidacticTemplateObjSettings;
use ilObjCourse;
use ilObject;
use ilObjectFactory;
use ilObjRole;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Object
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
     * @var int[]
     */
    protected $didactic_template_id_from_object = [];
    /**
     * @var int[]
     */
    protected $obj_role_template_id_from_object = [];
    /**
     * @var ilObject[]
     */
    protected $object_by_ref_id = [];
    /**
     * @var array
     */
    protected $object_default_roles = [];


    /**
     * Repository constructor
     */
    private function __construct()
    {

    }


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
     * @internal
     */
    public function dropTables() : void
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
     * @param int $obj_ref_id
     *
     * @return int
     */
    public function getDidacticTemplateIdFromObject(int $obj_ref_id) : int
    {
        if ($this->didactic_template_id_from_object[$obj_ref_id] === null) {
            $this->didactic_template_id_from_object[$obj_ref_id] = intval(ilDidacticTemplateObjSettings::lookupTemplateId($obj_ref_id));
        }

        return $this->didactic_template_id_from_object[$obj_ref_id];
    }


    /**
     * @param int $obj_ref_id
     *
     * @return ilObject|null
     */
    public function getObjectByRefId(int $obj_ref_id) : ?ilObject
    {
        if ($this->object_by_ref_id[$obj_ref_id] === null) {
            $this->object_by_ref_id[$obj_ref_id] = ilObjectFactory::getInstanceByRefId($obj_ref_id, false);
        }

        return ($this->object_by_ref_id[$obj_ref_id] ?: null);
    }


    /**
     * @param ilObject $obj
     *
     * @return array
     */
    public function getObjectDefaultRoles(ilObject $obj) : array
    {
        if ($this->object_default_roles[$obj->getId()] === null) {
            if ($obj instanceof ilObjCourse) {
                $this->object_default_roles[$obj->getId()] = (array) $obj->getDefaultCourseRoles();
            } else {
                $this->object_default_roles[$obj->getId()] = [];
            }
        }

        return $this->object_default_roles[$obj->getId()];
    }


    /**
     * @param string $obj_role_title
     *
     * @return int
     */
    public function getRoleTemplateIdFromObject(string $obj_role_title) : int
    {
        if ($this->obj_role_template_id_from_object[$obj_role_title] === null) {
            $this->obj_role_template_id_from_object[$obj_role_title] = intval(current(ilObjRole::_getIdsForTitle("il_" . preg_replace("/_role$/", "", $obj_role_title), "rolt")));
        }

        return $this->obj_role_template_id_from_object[$obj_role_title];
    }


    /**
     * @internal
     */
    public function installTables() : void
    {

    }
}
