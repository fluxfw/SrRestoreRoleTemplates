<?php

namespace srag\RemovePluginDataConfirm\SrRestoreRoleTemplates;

/**
 * Trait PluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm\SrRestoreRoleTemplates
 */
trait PluginUninstallTrait
{

    use BasePluginUninstallTrait;

    /**
     * @internal
     */
    protected final function afterUninstall() : void
    {

    }


    /**
     * @return bool
     *
     * @internal
     */
    protected final function beforeUninstall() : bool
    {
        return $this->pluginUninstall();
    }
}
