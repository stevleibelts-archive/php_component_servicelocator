<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ServiceLocatorInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface ServiceLocatorInterface
{
    /**
     * @param Configuration $configuration
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function __construct(Configuration $configuration);

    /**
     * @param string $name
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getService($name);

    /**
     * @param string $name
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasService($name);

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setService($name, $value);
}