<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Utils;

use srag\Plugins\SrRestoreRoleTemplates\Repository;

/**
 * Trait SrRestoreRoleTemplatesTrait
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait SrRestoreRoleTemplatesTrait
{

    /**
     * @return Repository
     */
    protected static function srRestoreRoleTemplates() : Repository
    {
        return Repository::getInstance();
    }
}
