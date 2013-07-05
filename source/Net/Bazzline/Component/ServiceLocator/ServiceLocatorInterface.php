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
     * @param ManagerDefinitionInterface $manager
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addManager(ManagerDefinitionInterface $manager);

    /**
     * @param ServiceDefinitionInterface $service
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addService(ServiceDefinitionInterface $service);

    /**
     * @param InvokableDefinitionInterface $invokable
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addInvokable(InvokableDefinitionInterface $invokable);

    /**
     * Returns the manager by given name or alias
     *
     * @param string $name
     * @return ManagerDefinitionInterface
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

    /**
     * @param string $name
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getService($name);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasManager($name);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasName($name);

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasService($name);
}