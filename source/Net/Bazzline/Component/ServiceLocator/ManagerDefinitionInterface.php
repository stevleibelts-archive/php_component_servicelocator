<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ManagerDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface ManagerDefinitionInterface extends DefinitionInterface
{
    /**
     * @param string $className
     * @throws \InvalidArgumentException
     */
    public function setClassName($className);

    /**
     * @return string
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getClassName();
}