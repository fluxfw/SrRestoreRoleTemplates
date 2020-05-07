<?php

namespace srag\CustomInputGUIs\SrRestoreRoleTemplates\CheckboxInputGUI;

use ilCheckboxInputGUI;
use ilTableFilterItem;
use srag\DIC\SrRestoreRoleTemplates\DICTrait;

/**
 * Class CheckboxInputGUI
 *
 * @package srag\CustomInputGUIs\SrRestoreRoleTemplates\CheckboxInputGUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CheckboxInputGUI extends ilCheckboxInputGUI implements ilTableFilterItem
{

    use DICTrait;
}
