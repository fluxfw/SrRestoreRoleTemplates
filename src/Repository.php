<?php

namespace srag\Plugins\SrRestoreRoleTemplates;

use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\GitCurl\SrRestoreRoleTemplates\GitCurl;
use srag\Plugins\SrRestoreRoleTemplates\Access\Ilias;
use srag\Plugins\SrRestoreRoleTemplates\Config\Repository as ConfigRepository;
use srag\Plugins\SrRestoreRoleTemplates\Job\Repository as JobsRepository;
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
    }





    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->jobs()->installTables();
    }


    /**
     * @return JobsRepository
     */
    public function jobs() : JobsRepository
    {
        return JobsRepository::getInstance();
    }
}
