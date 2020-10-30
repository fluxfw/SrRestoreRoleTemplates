<?php

namespace srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates;

use ilCronJob;
use ilCronJobResult;
use ilObject;
use ilSrRestoreRoleTemplatesPlugin;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class ReapplyRoleTemplatesJob
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ReapplyRoleTemplatesJob extends ilCronJob
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const CRON_JOB_ID = ilSrRestoreRoleTemplatesPlugin::PLUGIN_ID . "_reapply_role_templates";
    const LANG_MODULE = "reapply_role_templates";
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    /**
     * @var ilObject[]
     */
    protected $objects = [];


    /**
     * ReapplyRoleTemplatesJob constructor
     *
     * @param ilObject[]|null $objects
     */
    public function __construct(/*?*/ array $objects = null)
    {
        if (!empty($objects)) {
            $this->objects = $objects;
        } else {
            $this->objects = self::srRestoreRoleTemplates()->reapplyRoleTemplates()->getObjects();
        }
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
    public function getDescription() : string
    {
        return self::plugin()->translate("description", self::LANG_MODULE);
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
    public function run() : ilCronJobResult
    {
        $result = new ilCronJobResult();

        $count_roles = 0;

        foreach ($this->objects as $obj) {
            $count_roles += self::srRestoreRoleTemplates()->reapplyRoleTemplates()->reapplyRoleTemplates($obj);
        }

        $result->setStatus(ilCronJobResult::STATUS_OK);

        $result->setMessage(nl2br(self::plugin()->translate("result", self::LANG_MODULE, [
            count($this->objects),
            $count_roles
        ]), false));

        return $result;
    }
}
