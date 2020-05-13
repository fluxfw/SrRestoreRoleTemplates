<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates;

use ilCronJob;
use ilCronJobResult;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class ReapplyDidacticTemplatesJob
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ReapplyDidacticTemplatesJob extends ilCronJob
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const CRON_JOB_ID = ilSrRestoreRoleTemplatesPlugin::PLUGIN_ID . "_reapply_didactic_templates";
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    const LANG_MODULE = "reapply_didactic_templates";


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
        return ilSrRestoreRoleTemplatesPlugin::PLUGIN_NAME . ": " . self::plugin()->translate("title", self::LANG_MODULE);
    }


    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return self::plugin()->translate("description", self::LANG_MODULE);
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

        $objects = self::srRestoreRoleTemplates()->reapplyDidacticTemplates()->getObjects();

        $count_templates = 0;

        foreach ($objects as $obj) {
            $count_templates += self::srRestoreRoleTemplates()->reapplyDidacticTemplates()->reapplyDidacticTemplates($obj);
        }

        $result->setStatus(ilCronJobResult::STATUS_OK);

        $result->setMessage(nl2br(self::plugin()->translate("result", self::LANG_MODULE, [
            count($objects),
            $count_templates
        ]), false));

        return $result;
    }
}
