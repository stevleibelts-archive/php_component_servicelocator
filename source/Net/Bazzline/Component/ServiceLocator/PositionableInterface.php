<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class PositionableInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface PositionableInterface
{
    /**
     * @return int
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getPostion();

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasPosition();

    /**
     * @param int $position
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setPosition($position);
}