<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class NameableInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface NameableInterface
{
    /**
     * @return string
     * @throws \InvalidArgumentException - if no alias is set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getName();

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasName();

    /**
     * @param string $name
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setName($name);
}