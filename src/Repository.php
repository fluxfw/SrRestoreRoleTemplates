<?php

namespace srag\Plugins\SrRestoreRoleTemplates;

use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Job\Repository as JobsRepository;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates\Repository as ReapplyDidacticTemplatesRepository;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\Repository as ReapplyRoleTemplatesRepository;
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
     *
     */
    public function dropTables()/*:void*/
    {
        $this->jobs()->dropTables();
        $this->reapplyDidacticTemplates()->dropTables();
        $this->reapplyRoleTemplates()->dropTables();
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->jobs()->installTables();
        $this->reapplyDidacticTemplates()->installTables();
        $this->reapplyRoleTemplates()->installTables();
    }


    /**
     * @return JobsRepository
     */
    public function jobs() : JobsRepository
    {
        return JobsRepository::getInstance();
    }


    /**
     * @return ReapplyDidacticTemplatesRepository
     */
    public function reapplyDidacticTemplates() : ReapplyDidacticTemplatesRepository
    {
        return ReapplyDidacticTemplatesRepository::getInstance();
    }


    /**
     * @return ReapplyRoleTemplatesRepository
     */
    public function reapplyRoleTemplates() : ReapplyRoleTemplatesRepository
    {
        return ReapplyRoleTemplatesRepository::getInstance();
    }
}
