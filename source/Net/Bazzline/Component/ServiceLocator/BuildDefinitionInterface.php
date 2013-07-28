<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class BuildDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface BuildDefinitionInterface
{
    /**
     * @param DependencyInterface $dependency
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setDependency(DependencyInterface $dependency);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasDependency($name);

    /**
     * @param string $name
     * @return DependencyInterface
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getDependency($name);

    /**
     * @return array|DependencyInterface[]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getDependencies();

    /**
     * @param ParameterInterface $parameter
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setParameter(ParameterInterface $parameter);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasParameter($name);

    /**
     * @param string $name
     * @return ParameterInterface
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getParameter($name);

    /**
     * @return array|ParameterInterface[]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getParameters();
}