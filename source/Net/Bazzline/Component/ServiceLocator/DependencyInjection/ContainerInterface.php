<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator\DependencyInjection;

/**
 * Class ContainerInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator\DependencyInjection
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface ContainerInterface
{
    /**
     * @param string $className
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setClassName($className);

    /**
     * @return string
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getClassName();

    /**
     * @param string $methodName
     * @param array $arguments
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function addMethodCall($methodName, array $arguments);

    /**
     * @return array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getMethodCalls();

    /**
     * @param array $methodCalls[$methodName => array $constructorArguments[$name => $value]]
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setMethodCalls(array $methodCalls);

    /**
     * @param array $argument
     * @param int $index
     * @return $this
     * @throw \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     * @todo create argument class
     */
    public function addConstructorArgument(array $argument, $index);

    /**
     * @param int $index
     * @return mixed
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getConstructorArgument($index);

    /**
     * @return array $constructorArguments[$index => array[$name => $value]]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-20
     */
    public function getConstructorArguments();
}