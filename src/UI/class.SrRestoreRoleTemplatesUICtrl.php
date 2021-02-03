<?php

namespace srag\Plugins\SrRestoreRoleTemplates\UI;

require_once __DIR__ . "/../../vendor/autoload.php";

use ilLink;
use ilObject;
use ilObjectFactory;
use ilSrRestoreRoleTemplatesPlugin;
use ilUIPluginRouterGUI;
use ilUtil;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyDidacticTemplates\ReapplyDidacticTemplatesJob;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\ReapplyRoleTemplatesJob;
use srag\Plugins\SrRestoreRoleTemplates\ReapplyRoleTemplates\Repository;
use srag\Plugins\SrRestoreRoleTemplates\Utils\SrRestoreRoleTemplatesTrait;

/**
 * Class SrRestoreRoleTemplatesUICtrl
 *
 * @package           srag\Plugins\SrRestoreRoleTemplates\UI
 *
 * @author            studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy srag\Plugins\SrRestoreRoleTemplates\UI\SrRestoreRoleTemplatesUICtrl: ilUIPluginRouterGUI
 */
class SrRestoreRoleTemplatesUICtrl
{

    use DICTrait;
    use SrRestoreRoleTemplatesTrait;

    const CMD_BACK = "back";
    const CMD_LIST_RESTORE_TEMPLATES = "listRestoreTemplates";
    const CMD_REAPPLY_DIDACTIC_TEMPLATES = "reapplyDidacticTemplates";
    const CMD_REAPPLY_ROLE_TEMPLATES = "reapplyRoleTemplates";
    const GET_PARAM_REF_ID = "ref_id";
    const LANG_MODULE = "ui";
    const PLUGIN_CLASS_NAME = ilSrRestoreRoleTemplatesPlugin::class;
    const TAB_RESTORE_TEMPLATES = "restore_templates";
    /**
     * @var ilObject
     */
    protected $obj;
    /**
     * @var int
     */
    protected $obj_ref_id;


    /**
     * SrRestoreRoleTemplatesUICtrl constructor
     */
    public function __construct()
    {

    }


    /**
     * @param int $obj_ref_id
     */
    public static function addTabs(int $obj_ref_id)/* : void*/
    {
        if (self::srRestoreRoleTemplates()->hasAccess(self::dic()->user()->getId(), $obj_ref_id)) {
            self::dic()->ctrl()->setParameterByClass(self::class, self::GET_PARAM_REF_ID, $obj_ref_id);

            self::dic()
                ->tabs()
                ->addSubTab(self::TAB_RESTORE_TEMPLATES, self::plugin()->translate("restore_templates", self::LANG_MODULE),
                    self::dic()->ctrl()->getLinkTargetByClass([ilUIPluginRouterGUI::class, self::class], self::CMD_LIST_RESTORE_TEMPLATES));
        }
    }


    /**
     *
     */
    public function executeCommand()/* : void*/
    {
        $this->obj_ref_id = intval(filter_input(INPUT_GET, self::GET_PARAM_REF_ID));

        if (!self::srRestoreRoleTemplates()->hasAccess(self::dic()->user()->getId(), $this->obj_ref_id)) {
            die();
        }

        $this->obj = ilObjectFactory::getInstanceByRefId($this->obj_ref_id, false);

        self::dic()->ctrl()->saveParameter($this, self::GET_PARAM_REF_ID);

        $this->setTabs();

        $next_class = self::dic()->ctrl()->getNextClass($this);

        switch (strtolower($next_class)) {
            default:
                $cmd = self::dic()->ctrl()->getCmd();

                switch ($cmd) {
                    case self::CMD_BACK:
                    case self::CMD_LIST_RESTORE_TEMPLATES:
                    case self::CMD_REAPPLY_DIDACTIC_TEMPLATES:
                    case self::CMD_REAPPLY_ROLE_TEMPLATES:
                        $this->{$cmd}();
                        break;

                    default:
                        break;
                }
                break;
        }
    }


    /**
     *
     */
    protected function back()/* : void*/
    {
        self::dic()->ctrl()->redirectToURL(ilLink::_getLink($this->obj->getRefId()));
    }


    /**
     *
     */
    protected function listRestoreTemplates()/* : void*/
    {
        self::dic()->toolbar()->addComponent(self::dic()->ui()->factory()->button()->standard(self::plugin()->translate("title", ReapplyDidacticTemplatesJob::LANG_MODULE),
            str_replace("\\", "\\\\", self::dic()->ctrl()->getLinkTarget($this, self::CMD_REAPPLY_DIDACTIC_TEMPLATES))));

        if (in_array($this->obj->getType(), Repository::OBJECT_TYPES)) {
            self::dic()->toolbar()->addComponent(self::dic()->ui()->factory()->button()->standard(self::plugin()->translate("title", ReapplyRoleTemplatesJob::LANG_MODULE),
                str_replace("\\", "\\\\", self::dic()->ctrl()->getLinkTarget($this, self::CMD_REAPPLY_ROLE_TEMPLATES))));
        }

        self::output()->output("", true);
    }


    /**
     *
     */
    protected function reapplyDidacticTemplates()/* : void*/
    {
        $result_count = self::srRestoreRoleTemplates()->reapplyDidacticTemplates()->factory()->newJobInstance([
            $this->obj
        ])->run()->getMessage();

        ilUtil::sendInfo($result_count, true);

        self::dic()->ctrl()->redirect($this, self::CMD_LIST_RESTORE_TEMPLATES);
    }


    /**
     *
     */
    protected function reapplyRoleTemplates()/* : void*/
    {
        if (!in_array($this->obj->getType(), Repository::OBJECT_TYPES)) {
            die();
        }

        $result_count = self::srRestoreRoleTemplates()->reapplyRoleTemplates()->factory()->newJobInstance([
            $this->obj
        ])->run()->getMessage();

        ilUtil::sendInfo($result_count, true);

        self::dic()->ctrl()->redirect($this, self::CMD_LIST_RESTORE_TEMPLATES);
    }


    /**
     *
     */
    protected function setTabs()/* : void*/
    {
        self::dic()->tabs()->clearTargets();

        self::dic()->tabs()->setBackTarget($this->obj->getTitle(), self::dic()->ctrl()->getLinkTarget($this, self::CMD_BACK));

        self::dic()
            ->tabs()
            ->addTab(self::TAB_RESTORE_TEMPLATES, self::plugin()->translate("restore_templates", self::LANG_MODULE),
                self::dic()->ctrl()->getLinkTargetByClass([ilUIPluginRouterGUI::class, self::class], self::CMD_LIST_RESTORE_TEMPLATES));
    }
}
