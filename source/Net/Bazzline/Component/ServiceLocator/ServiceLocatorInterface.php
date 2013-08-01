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
     * @param ConfigurationInterface $configuration
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function __construct(ConfigurationInterface $configuration);

    /**
     * @param string $name
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getService($name);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasService($name);

    /**
     * @param string $name
     * @param BuildDefinitionInterface $dependencyDefinition
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setService($name, BuildDefinitionInterface $dependencyDefinition);

    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function getAll();
}