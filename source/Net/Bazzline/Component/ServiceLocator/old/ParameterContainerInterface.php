<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator\old;

/**
 * Class ParameterContainerInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface ParameterContainerInterface
{
    /**
     * Returns a parameter value by name
     *
     * @param string $name - name of the parameter
     * @return mixed
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function get($name);

    /**
     * Checks if a parameter is set
     *
     * @param string $name - name of the parameter
     * @return boolean
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function has($name);

    /**
     * Checks if all parameters are set
     *
     * @param array $names - names of the parameters
     * @return boolean
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasAll(array $names);

    /**
     * Set a parameter value by name
     *
     * @param string $name - name of the parameter
     * @param mixed $value - value of the parameter
     * @param bool $isRequired - is parameter required
     * @return $this
     * @throw \InvalidArgumentException - if you want to overwrite an already set parameter
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function set($name, $value, $isRequired = true);

    /**
     * @param string $name
     * @param mixed $value
     * @param bool $isRequired
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function replace($name, $value, $isRequired = true);
}