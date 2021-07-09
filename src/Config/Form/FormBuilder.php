<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Config\Form;

use ilDateTimeInputGUI;
use ilSrRestoreRoleTemplatesPlugin;
use srag\CustomInputGUIs\SrRestoreRoleTemplates\FormBuilder\AbstractFormBuilder;
use srag\CustomInputGUIs\SrRestoreRoleTemplates\InputGUIWrapperUIInputComponent\InputGUIWrapperUIInputComponent;
use srag\Plugins\SrRestoreRoleTemplates\Config\ConfigCtrl;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class FormBuilder
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Config\Form
 */
class FormBuilder extends AbstractFormBuilder
{

    use SrRestoreRoleTemplatesTrait;

    const KEY_ONLY_OBJECTS_FROM = "only_objects_from";
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;


    /**
     * @inheritDoc
     *
     * @param ConfigCtrl $parent
     */
    public function __construct(ConfigCtrl $parent)
    {
        parent::__construct($parent);
    }


    /**
     * @inheritDoc
     */
    protected function getButtons() : array
    {
        $buttons = [
            ConfigCtrl::CMD_UPDATE_CONFIGURE => self::plugin()->translate("save", ConfigCtrl::LANG_MODULE)
        ];

        return $buttons;
    }


    /**
     * @inheritDoc
     */
    protected function getData() : array
    {
        $data = [
            self::KEY_ONLY_OBJECTS_FROM => self::srRestoreRoleTemplates()->config()->getValue(self::KEY_ONLY_OBJECTS_FROM)
        ];

        return $data;
    }


    /**
     * @inheritDoc
     */
    protected function getFields() : array
    {
        $fields = [
            self::KEY_ONLY_OBJECTS_FROM => new InputGUIWrapperUIInputComponent(new ilDateTimeInputGUI(self::plugin()->translate(self::KEY_ONLY_OBJECTS_FROM, ConfigCtrl::LANG_MODULE)))
        ];

        return $fields;
    }


    /**
     * @inheritDoc
     */
    protected function getTitle() : string
    {
        return self::plugin()->translate("configuration", ConfigCtrl::LANG_MODULE);
    }


    /**
     * @inheritDoc
     */
    protected function storeData(array $data) : void
    {
        self::srRestoreRoleTemplates()->config()->setValue(self::KEY_ONLY_OBJECTS_FROM, strval($data[self::KEY_ONLY_OBJECTS_FROM]));
    }
}
