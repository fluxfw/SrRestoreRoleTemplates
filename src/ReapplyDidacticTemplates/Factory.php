<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory
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
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return ReapplyDidacticTemplatesJob
     */
    public function newJobInstance() : ReapplyDidacticTemplatesJob
    {
        $job = new ReapplyDidacticTemplatesJob();

        return $job;
    }
}
