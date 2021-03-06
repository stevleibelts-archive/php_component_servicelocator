<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class AliasableInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01
 */
interface AliasableInterface
{
    /**
     * @return string
     * @throws \InvalidArgumentException - if no alias is set
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getAlias();

    /**
     * Validates if the instance has an alias
     *
     * @return boolean
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasAlias();

    /**
     * Sets alias. Common practice is to use a unique alias
     * Example service.mail.transporter
     *
     * @param string $alias
     * @return $this
     * @throws \RuntimeException - if you want to set an alias the second time
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function setAlias($alias);
}