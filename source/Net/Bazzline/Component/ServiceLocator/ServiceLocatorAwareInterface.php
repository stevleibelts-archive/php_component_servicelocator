<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ServiceLocatorAwareInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface ServiceLocatorAwareInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator);

    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getServiceLocator();
}