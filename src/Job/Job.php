<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Job;

use ilCronJob;
use ilCronJobResult;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Config\Form\FormBuilder;
use srag\Plugins\SrRestoreRoleTemplates\Info\PluginInfo;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Job
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Job
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Job extends ilCronJob
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const CRON_JOB_ID = ilSrRestoreRoleTemplatesPlugin::PLUGIN_ID;
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    const LANG_MODULE = "cron";


    /**
     * Job constructor
     */
    public function __construct()
    {

    }


    /**
     * @inheritDoc
     */
    public function getId() : string
    {
        return self::CRON_JOB_ID;
    }


    /**
     * @inheritDoc
     */
    public function getTitle() : string
    {
        return ilSrRestoreRoleTemplatesPlugin::PLUGIN_NAME;
    }


    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return "";
    }


    /**
     * @inheritDoc
     */
    public function hasAutoActivation() : bool
    {
        return true;
    }


    /**
     * @inheritDoc
     */
    public function hasFlexibleSchedule() : bool
    {
        return true;
    }


    /**
     * @inheritDoc
     */
    public function getDefaultScheduleType() : int
    {
        return self::SCHEDULE_TYPE_IN_HOURS;
    }


    /**
     * @inheritDoc
     */
    public function getDefaultScheduleValue()/*:?int*/
    {
        return 1;
    }


    /**
     * @inheritDoc
     */
    public function run() : ilCronJobResult
    {
        $result = new ilCronJobResult();

        $result->setStatus(ilCronJobResult::STATUS_OK);

        $result->setMessage("");

        return $result;
    }
}
