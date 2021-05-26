<?php

require_once __DIR__ . "/../vendor/autoload.php";

use ILIAS\DI\Container;
use srag\CustomInputGUIs\SrRestoreRoleTemplates\Loader\CustomInputGUIsLoaderDetector;
use srag\DevTools\SrRestoreRoleTemplates\DevToolsCtrl;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;
use srag\RemovePluginDataConfirm\SrRestoreRoleTemplates\PluginUninstallTrait;

/**
 * Class ilSrRestoreRoleTemplatesPlugin
 */
class ilSrRestoreRoleTemplatesPlugin extends ilCronHookPlugin
{

    use PluginUninstallTrait;
    use SrRestoreRoleTemplatesTrait;

    const PLUGIN_CLASS_NAME = self::class;
    const PLUGIN_ID = "srresroltem";
    const PLUGIN_NAME = "SrRestoreRoleTemplates";
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * ilSrRestoreRoleTemplatesPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
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
     * @inheritDoc
     */
    public function exchangeUIRendererAfterInitialization(Container $dic) : Closure
    {
        return CustomInputGUIsLoaderDetector::exchangeUIRendererAfterInitialization();
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstance(/*string*/ $a_job_id)/*: ?ilCronJob*/
    {
        return self::srRestoreRoleTemplates()->jobs()->factory()->newInstanceById($a_job_id);
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstances() : array
    {
        return self::srRestoreRoleTemplates()->jobs()->factory()->newInstances();
    }


    /**
     * @inheritDoc
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }


    /**
     * @inheritDoc
     */
    public function updateLanguages(/*?array*/ $a_lang_keys = null)/*:void*/
    {
        parent::updateLanguages($a_lang_keys);

        $this->installRemovePluginDataConfirmLanguages();

        DevToolsCtrl::installLanguages(self::plugin());
    }


    /**
     * @inheritDoc
     */
    protected function deleteData()/*: void*/
    {
        self::srRestoreRoleTemplates()->dropTables();
    }


    /**
     * @inheritDoc
     */
    protected function shouldUseOneUpdateStepOnly() : bool
    {
        return true;
    }
}
