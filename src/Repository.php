<?php

namespace srag\Plugins\SrRestoreRoleTemplates;

use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Job\Repository as JobsRepository;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\Repository as ReapplyRoleTemplatesRepository;
use srag\Plugins\SrRestoreRoleTemplates\RestoreDidacticTemplates\Repository as RestoreDidacticTemplatesRepository;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrRestoreRoleTemplates
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
     *
     */
    public function dropTables()/*:void*/
    {
        $this->jobs()->dropTables();
        $this->reapplyRoleTemplates()->dropTables();
        $this->restoreDidacticTemplates()->dropTables();
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->jobs()->installTables();
        $this->reapplyRoleTemplates()->installTables();
        $this->restoreDidacticTemplates()->installTables();
    }


    /**
     * @return JobsRepository
     */
    public function jobs() : JobsRepository
    {
        return JobsRepository::getInstance();
    }


    /**
     * @return ReapplyRoleTemplatesRepository
     */
    public function reapplyRoleTemplates() : ReapplyRoleTemplatesRepository
    {
        return ReapplyRoleTemplatesRepository::getInstance();
    }


    /**
     * @return RestoreDidacticTemplatesRepository
     */
    public function restoreDidacticTemplates() : RestoreDidacticTemplatesRepository
    {
        return RestoreDidacticTemplatesRepository::getInstance();
    }
}
