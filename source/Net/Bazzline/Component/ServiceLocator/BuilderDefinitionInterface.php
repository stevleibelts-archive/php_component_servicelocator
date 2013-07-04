<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class BuilderDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface BuilderDefinitionInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function build(ParameterContainerInterface $parameterContainer, ServiceLocatorInterface $serviceLocator);
}