<?php

namespace srag\Plugins\SrRestoreRoleTemplates\Utils;

use srag\Plugins\SrRestoreRoleTemplates\Repository;

/**
 * Trait SrRestoreRoleTemplatesTrait
 *
 * @package srag\Plugins\SrRestoreRoleTemplates\Utils
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
