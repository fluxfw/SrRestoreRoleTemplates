<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilDidacticTemplateObjSettings;
use ilObject;
use ilObjectFactory;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates
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
     * @return ilObject[]
     */
    public function getObjects() : array
    {
        $result = self::dic()->database()->query('
SELECT ref_id
FROM object_data
INNER JOIN object_reference ON object_data.obj_id=object_reference.obj_id
WHERE object_reference.deleted IS NULL
ORDER BY last_update DESC');

        return array_map(function (array $object) : ilObject {
            return ilObjectFactory::getInstanceByRefId($object["ref_id"]);
        }, self::dic()->database()->fetchAll($result));
    }


    /**
     * @internal
     */
    public function installTables()/*: void*/
    {

    }


    /**
     * @param ilObject $obj
     *
     * @return int
     */
    public function reapplyDidacticTemplates(ilObject $obj) : int
    {
        $tpl_id = $this->getDidacticTemplateIdFromObject($obj->getRefId());

        if (empty($tpl_id)) {
            return 0;
        }

        $obj->applyDidacticTemplate($tpl_id);

        return 1;
    }


    /**
     * @param int $obj_ref_id
     *
     * @return int|null
     */
    protected function getDidacticTemplateIdFromObject(int $obj_ref_id)/*:?int*/
    {
        return ilDidacticTemplateObjSettings::lookupTemplateId($obj_ref_id);
    }
}
