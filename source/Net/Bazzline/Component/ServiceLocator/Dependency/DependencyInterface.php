<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator\Dependency;

use Net\Bazzline\Component\ServiceLocator\AliasableInterface;
use Net\Bazzline\Component\ServiceLocator\NameableInterface;
use Net\Bazzline\Component\ServiceLocator\RequireableInterface;

/**
 * Class DependencyInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator\Dependency
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface DependencyInterface extends AliasableInterface, NameableInterface, RequireableInterface {}