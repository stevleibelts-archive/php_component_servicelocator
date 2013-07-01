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
     * Returns the alias for provided name or null
     *
     * @param string $name
     * @return null|string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getAlias($name);

    /**
     * Returns the manager by given name or alias
     *
     * @param string $name
     * @return ManagerInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getManager($name);

    /**
     * Returns the name for provided alias or null
     *
     * @param string $alias
     * @return null|string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getName($alias);

    public function getService($name);

    public function hasAlias($name);

    public function hasManager($name);

    public function hasName($name);

    public function hasService($name);
}