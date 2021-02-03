<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilDBConstants;
use ilObject;
use ilObjectPlugin;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Config\Form\FormBuilder;
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
        $query = 'SELECT ref_id, type
FROM object_data
INNER JOIN object_reference ON object_data.obj_id=object_reference.obj_id
WHERE object_reference.deleted IS NULL';
        $types = [];
        $values = [];

        $only_objects_from = self::srRestoreRoleTemplates()->config()->getValue(FormBuilder::KEY_ONLY_OBJECTS_FROM);
        if (!empty($only_objects_from)) {
            $query .= ' AND last_update>=%s';
            $types[] = ilDBConstants::T_TEXT;
            $values[] = $only_objects_from;
        }

        $query .= '
ORDER BY last_update DESC';

        $result = self::dic()->database()->queryF($query, $types, $values);

        return array_map(function (array $object) : ilObject {
            return self::srRestoreRoleTemplates()->objects()->getObjectByRefId($object["ref_id"]);
        }, array_filter(self::dic()->database()->fetchAll($result), function (array $object) : bool {
            if (self::dic()->objDefinition()->isPluginTypeName($object["type"])) {
                $plugin_object = ilObjectPlugin::getPluginObjectByType($object["type"]);

                if ($plugin_object === null) {
                    return false;
                }

                return $plugin_object->isActive();
            } else {
                return true;
            }
        }));
    }


    /**
     * @param ilObject $obj
     *
     * @return bool
     */
    public function hasDidacticTemplateChanges(ilObject $obj) : bool
    {
        $tpl_id = self::srRestoreRoleTemplates()->objects()->getDidacticTemplateIdFromObject($obj->getRefId());

        if (empty($tpl_id)) {
            return false;
        }

        return $this->hasDidacticTemplateChange($obj, $tpl_id);
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
        $tpl_id = self::srRestoreRoleTemplates()->objects()->getDidacticTemplateIdFromObject($obj->getRefId());

        if (empty($tpl_id)) {
            return 0;
        }

        return $this->reapplyDidacticTemplate($obj, $tpl_id);
    }


    /**
     * @param ilObject $obj
     * @param int      $tpl_id
     *
     * @return bool
     */
    protected function hasDidacticTemplateChange(ilObject $obj, int $tpl_id) : bool
    {
        return true; // TODO:
    }


    /**
     * @param ilObject $obj
     * @param int      $tpl_id
     *
     * @return bool
     */
    protected function reapplyDidacticTemplate(ilObject $obj, int $tpl_id) : bool
    {
        if (!$this->hasDidacticTemplateChange($obj, $tpl_id)) {
            return false;
        }

        $obj->applyDidacticTemplate($tpl_id);

        return true;
    }
}
