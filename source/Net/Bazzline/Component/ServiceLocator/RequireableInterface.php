<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class RequireableInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface RequireableInterface
{
    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function isRequired();
}