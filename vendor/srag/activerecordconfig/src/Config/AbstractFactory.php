<?php

namespace srag\ActiveRecordConfig\SrRestoreRoleTemplates\Config;

use srag\DIC\SrRestoreRoleTemplates\DICTrait;

/**
 * Class AbstractFactory
 *
 * @package srag\ActiveRecordConfig\SrRestoreRoleTemplates\Config
 */
abstract class AbstractFactory
{

    use DICTrait;

    /**
     * AbstractFactory constructor
     */
    protected function __construct()
    {

    }


    /**
     * @return Config
     */
    public function newInstance() : Config
    {
        $config = new Config();

        return $config;
    }
}
