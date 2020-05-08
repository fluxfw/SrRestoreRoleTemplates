<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Job;

use ilCronJob;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\ReapplyRoleTemplatesJob;
use srag\Plugins\SrRestoreRoleTemplates\RestoreDidacticTemplates\RestoreDidacticTemplatesJob;
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
     * @return ilCronJob[]
     */
    public function newInstances() : array
    {
        return [
            self::srRestoreRoleTemplates()->reapplyRoleTemplates()->factory()->newJobInstance(),
            self::srRestoreRoleTemplates()->restoreDidacticTemplates()->factory()->newJobInstance()
        ];
    }


    /**
     * @param string $job_id
     *
     * @return ilCronJob|null
     */
    public function newInstanceById(string $job_id)/*: ?ilCronJob*/
    {
        switch ($job_id) {
            case ReapplyRoleTemplatesJob::CRON_JOB_ID:
                return self::srRestoreRoleTemplates()->reapplyRoleTemplates()->factory()->newJobInstance();

            case RestoreDidacticTemplatesJob::CRON_JOB_ID:
                return self::srRestoreRoleTemplates()->restoreDidacticTemplates()->factory()->newJobInstance();

            default:
                return null;
        }
    }
}
