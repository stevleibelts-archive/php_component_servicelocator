<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-02 
 */

namespace Net\Bazzline\Component\ServiceLocator\old;

/**
 * Class ConfigurationInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface ConfigurationInterface
{
    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function load();

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function compile();

    /**
     * Dumps compiled configuration to a php file content stream.
     *
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function dump();
}