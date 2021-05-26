<?php

namespace srag\DIC\SrRestoreRoleTemplates\Plugin;

/**
 * Interface Pluginable
 *
 * @package srag\DIC\SrRestoreRoleTemplates\Plugin
 */
interface Pluginable
{

    /**
     * @return PluginInterface
     */
    public function getPlugin() : PluginInterface;


    /**
     * @param PluginInterface $plugin
     *
     * @return static
     */
    public function withPlugin(PluginInterface $plugin)/*: static*/ ;
}
