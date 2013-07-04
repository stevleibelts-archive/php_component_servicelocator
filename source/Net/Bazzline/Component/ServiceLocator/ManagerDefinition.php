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
class ManagerDefinition extends Definition
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $className;

    /**
     * @var FactoryDefinition
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $factoryDefinition;

    /**
     * @param string $className
     * @throws \InvalidArgumentException
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
     * @return string
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
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
     * @param \Net\Bazzline\Component\ServiceLocator\FactoryDefinition $factoryDefinition
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function setFactoryDefinition($factoryDefinition)
    {
        $this->factoryDefinition = $factoryDefinition;
    }

    /**
     * @return \Net\Bazzline\Component\ServiceLocator\FactoryDefinition
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getFactoryDefinition()
    {
        if (is_null($this->factoryDefinition)) {
            throw new RuntimeException(
                'Empty mandatory value detected'
            );
        }
        return $this->factoryDefinition;
    }
}