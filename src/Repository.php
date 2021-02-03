<?php

namespace srag\Plugins\SrRestoreRoleTemplates;

use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Config\Repository as ConfigRepository;
use srag\Plugins\SrRestoreRoleTemplates\Job\Repository as JobsRepository;
use srag\Plugins\SrRestoreRoleTemplates\Object\Repository as ObjectsRepository;
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
     * @return ConfigRepository
     */
    public function config() : ConfigRepository
    {
        return ConfigRepository::getInstance();
    }


    /**
     *
     */
    public function dropTables()/*:void*/
    {
        $this->config()->dropTables();
        $this->jobs()->dropTables();
        $this->objects()->dropTables();
        $this->reapplyDidacticTemplates()->dropTables();
        $this->reapplyRoleTemplates()->dropTables();
    }


    /**
     * @param int $user_id
     * @param int $obj_ref_id
     *
     * @return bool
     */
    public function hasAccess(int $user_id, int $obj_ref_id) : bool
    {
        return (self::dic()->access()->checkAccessOfUser($user_id, "write", "", $obj_ref_id));
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->config()->installTables();
        $this->jobs()->installTables();
        $this->objects()->installTables();
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
     * @return ObjectsRepository
     */
    public function objects() : ObjectsRepository
    {
        return ObjectsRepository::getInstance();
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
