<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class FactoryServiceInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface FactoryServiceInterface
{
    /**
     * Returns a new service
     *
     * @return \stdClass
     * @throws \RuntimeException - if no parameter container is set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getService();

    /**
     * Sets a parameter container with all needed parameters
     *
     * @param ParameterContainerInterface $definition - the parameter to setup the factory
     * @throws \InvalidArgumentException - if invalid definition container is set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function setParameterContainer(ParameterContainerInterface $definition);
}