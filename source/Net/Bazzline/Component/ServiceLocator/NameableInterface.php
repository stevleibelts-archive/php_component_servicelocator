<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class NameableInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05
 */
interface NameableInterface
{
    /**
     * @param string $name
     * @return $this
     * @throws \RuntimeException, if already set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function setName($name);

    /**
     * @return string
     * @throws \InvalidArgumentException, if not set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function getName();
}