<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator\old;

/**
 * Class ManagerDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface ManagerDefinitionInterface extends DefinitionInterface, BuilderDefinitionAwareInterface
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
     * @param array $methodCalls[$methodName => array $constructorArguments[$name => $value]]
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function setMethodCalls(array $methodCalls);

    /**
     * @param array $argument
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     * @todo create argument class
     */
    public function addConstructorArgument(array $argument);

    /**
     * @param int $index
     * @return mixed
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getConstructorArgument($index);

    /**
     * @return array $constructorArguments[$index => array[$name => $value]]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getConstructorArguments();
}