<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilObject;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates
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
     * Factory constructor
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
     * @param ilObject[]|null $objects
     *
     * @return ReapplyDidacticTemplatesJob
     */
    public function newJobInstance(/*?*/ array $objects = null) : ReapplyDidacticTemplatesJob
    {
        $job = new ReapplyDidacticTemplatesJob($objects);

        return $job;
    }
}
