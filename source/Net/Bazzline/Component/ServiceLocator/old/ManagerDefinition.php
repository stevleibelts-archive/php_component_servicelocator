<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */

namespace Net\Bazzline\Component\ServiceLocator;

use InvalidArgumentException;
use RuntimeException;

/**
 * Class ManagerDefinition
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
class ManagerDefinition extends Definition implements ManagerDefinitionInterface
{
    /**
     * @var BuilderDefinitionInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $builderDefinition;

    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $className;

    /**
     * @var array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $constructorArguments;

    /**
     * @var array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $methodCalls;

    /**
     * {@inheritdoc}
     */
    public function setClassName($className)
    {
        if (!class_exists($className)) {
            throw new InvalidArgumentException(
                'Provided class does not exists: ' . $className . '"'
            );
        }
        $this->className = (string) $className;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        if (is_null($this->className)) {
            throw new RuntimeException(
                'Empty mandatory value detected'
            );
        }
        return $this->className;
    }

    /**
     * {@inheritdoc}
     */
    public function setBuilderDefinition(BuilderDefinitionInterface $builderDefinition)
    {
        $this->builderDefinition = $builderDefinition;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBuilderDefinition()
    {
        if (is_null($this->builderDefinition)) {
            throw new RuntimeException(
                'Empty mandatory value detected'
            );
        }
        return $this->builderDefinition;
    }

    /**
     * {@inheritdoc}
     */
    public function addMethodCall($methodName, array $arguments)
    {
        if (is_null($this->methodCalls)) {
            $this->methodCalls = array();
        }
        $this->methodCalls[$methodName] = $arguments;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodCalls()
    {
        return (is_null($this->methodCalls)) ? array() : $this->methodCalls;
    }

    /**
     * {@inheritdoc}
     */
    public function setMethodCalls(array $methodCalls)
    {
        $this->methodCalls = $methodCalls;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addConstructorArgument(array $argument)
    {
        if (is_null($this->constructorArguments)) {
            $this->constructorArguments = array();
        }

        $this->constructorArguments[] = $argument;
    }

    /**
     * {@inheritdoc}
     */
    public function getConstructorArgument($index)
    {
        if (is_null($this->constructorArguments)
            || !isset($this->constructorArguments[$index])) {
            throw new InvalidArgumentException(
                'Index does not exists'
            );
        }

        return $this->constructorArguments[$index];
    }

    /**
     * {@inheritdoc}
     */
    public function getConstructorArguments()
    {
        return (is_null($this->constructorArguments)) ? array() : $this->constructorArguments;
    }
}