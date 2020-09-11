<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Job;

use ilCronJob;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates\ReapplyDidacticTemplatesJob;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\ReapplyRoleTemplatesJob;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Job
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
     * @param string $job_id
     *
     * @return ilCronJob|null
     */
    public function newInstanceById(string $job_id)/*: ?ilCronJob*/
    {
        switch ($job_id) {
            case ReapplyDidacticTemplatesJob::CRON_JOB_ID:
                return self::srRestoreRoleTemplates()->reapplyDidacticTemplates()->factory()->newJobInstance();

            case ReapplyRoleTemplatesJob::CRON_JOB_ID:
                return self::srRestoreRoleTemplates()->reapplyRoleTemplates()->factory()->newJobInstance();

            default:
                return null;
        }
    }


    /**
     * @return ilCronJob[]
     */
    public function newInstances() : array
    {
        return [
            self::srRestoreRoleTemplates()->reapplyDidacticTemplates()->factory()->newJobInstance(),
            self::srRestoreRoleTemplates()->reapplyRoleTemplates()->factory()->newJobInstance()
        ];
    }
}
