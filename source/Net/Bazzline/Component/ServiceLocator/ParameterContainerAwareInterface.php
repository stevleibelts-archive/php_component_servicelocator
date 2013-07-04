<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ParameterContainerAwareInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05
 */
interface ParameterContainerAwareInterface
{
    /**
     * @return ParameterContainerInterface $container
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function getParameterContainer();

    /**
     * @param ParameterContainerInterface $parameterContainer
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function setParameterContainer(ParameterContainerInterface $parameterContainer);
}