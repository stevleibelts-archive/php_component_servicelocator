<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ServiceDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface ServiceDefinitionInterface extends DefinitionInterface
{
    /**
     * @param boolean $isShared
     */
    public function setIsShared($isShared);

    /**
     * @return boolean
     */
    public function getIsShared();
}