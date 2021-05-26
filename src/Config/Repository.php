<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Config;

use ilSrRestoreRoleTemplatesPlugin;
use srag\ActiveRecordConfig\SrRestoreRoleTemplates\Config\AbstractFactory;
use srag\ActiveRecordConfig\SrRestoreRoleTemplates\Config\AbstractRepository;
use srag\ActiveRecordConfig\SrRestoreRoleTemplates\Config\Config;
use srag\Plugins\SrRestoreRoleTemplates\Config\Form\FormBuilder;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Config
 */
final class Repository extends AbstractRepository
{

    use SrRestoreRoleTemplatesTrait;

    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Repository constructor
     */
    protected function __construct()
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
     *
     * @return Factory
     */
    public function factory() : AbstractFactory
    {
        return Factory::getInstance();
    }


    /**
     * @inheritDoc
     */
    protected function getFields() : array
    {
        return [
            FormBuilder::KEY_ONLY_OBJECTS_FROM => Config::TYPE_STRING
        ];
    }


    /**
     * @inheritDoc
     */
    protected function getTableName() : string
    {
        return ilSrRestoreRoleTemplatesPlugin::PLUGIN_ID . "_config";
    }
}
