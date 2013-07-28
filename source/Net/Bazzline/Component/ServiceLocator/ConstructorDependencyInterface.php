<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

use Net\Bazzline\Component\ServiceLocator\PositionableInterface;

/**
 * Class ConstructorDependencyInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator\Dependency
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface ConstructorDependencyInterface extends DependencyInterface, PositionableInterface {}