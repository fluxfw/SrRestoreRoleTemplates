<?php

namespace srag\DIC\SrRestoreRoleTemplates\DIC;

use ILIAS\DI\Container;
use srag\DIC\SrRestoreRoleTemplates\Database\DatabaseDetector;
use srag\DIC\SrRestoreRoleTemplates\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\SrRestoreRoleTemplates\DIC
 */
abstract class AbstractDIC implements DICInterface
{

    /**
     * @var Container
     */
    protected $dic;


    /**
     * @inheritDoc
     */
    public function __construct(Container &$dic)
    {
        $this->dic = &$dic;
    }


    /**
     * @inheritDoc
     */
    public function database() : DatabaseInterface
    {
        return DatabaseDetector::getInstance($this->databaseCore());
    }
}
