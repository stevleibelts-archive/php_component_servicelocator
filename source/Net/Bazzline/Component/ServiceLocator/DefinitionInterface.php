<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class DefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface DefinitionInterface extends AliasInterface
{
    /**
     * @param string $methodName
     * @param array $arguments
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addMethodCall($methodName, array $arguments);


    /**
     * @return array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getMethodCalls();

    /**
     * @param array $methodCalls
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function setMethodCalls(array $methodCalls);
}