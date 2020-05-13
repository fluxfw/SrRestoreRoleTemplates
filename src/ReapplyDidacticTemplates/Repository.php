<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilDidacticTemplateObjSettings;
use ilObject;
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
     * @return ilObject[]
     */
    public function getObjects() : array
    {
        return self::srRestoreRoleTemplates()->reapplyRoleTemplates()->getObjects();
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
        $template_id = ilDidacticTemplateObjSettings::lookupTemplateId($obj->getRefId());

        if (empty($template_id)) {
            return 0;
        }

        $obj->applyDidacticTemplate($template_id);

        return 1;
    }
}
