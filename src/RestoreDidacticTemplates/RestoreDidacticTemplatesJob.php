<?php

namespace srag\Plugins\SrRestoreRoleTemplates\RestoreDidacticTemplates;

use ilCronJob;
use ilCronJobResult;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class RestoreDidacticTemplatesJob
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\RestoreDidacticTemplates
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class RestoreDidacticTemplatesJob extends ilCronJob
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const CRON_JOB_ID = ilSrRestoreRoleTemplatesPlugin::PLUGIN_ID . "_restore_didactic_templates";
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    const LANG_MODULE = "restore_didactic_templates";


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
        return self::class;
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
        return self::SCHEDULE_TYPE_DAILY;
    }


    /**
     * @inheritDoc
     */
    public function getDefaultScheduleValue()/*:?int*/
    {
        return null;
    }


    /**
     * @inheritDoc
     */
    public function run() : ilCronJobResult
    {
        $result = new ilCronJobResult();

        $result->setMessage("");

        return $result;
    }
}
