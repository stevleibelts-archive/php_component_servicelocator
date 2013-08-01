<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

use Net\Bazzline\Component\ServiceLocator\old\BuilderDefinitionAwareInterface;
use Net\Bazzline\Component\ServiceLocator\old\NameableInterface;

/**
 * Class ServiceInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface ServiceInterface extends NameableInterface, BuilderDefinitionAwareInterface
{
}