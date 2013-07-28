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
    public function setDependency(DependencyInterface $dependency);

    public function hasDependency($classNameOrAlias);

    public function isDependencyRequired($name);

    public function getDependency($name);

    public function getDependencies();

    public function setParameter(ParameterInterface $parameter);

    public function hasParameter($name);

    public function isParameterRequired($name);

    public function getParameter($name);

    public function getParameters();
}