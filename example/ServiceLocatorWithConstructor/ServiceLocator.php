<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-05 
 */

namespace Example\ServiceLocatorWithConstructor\ServiceLocator;

use Net\Bazzline\Component\ServiceLocator\InvokableDefinition;
use Net\Bazzline\Component\ServiceLocator\InvokableDefinitionInterface;
use Net\Bazzline\Component\ServiceLocator\ManagerDefinitionInterface;
use Net\Bazzline\Component\ServiceLocator\ServiceDefinitionInterface;
use Net\Bazzline\Component\ServiceLocator\ServiceLocatorInterface;

/**
 * Class ServiceLocator
 *
 * @package Example\ServiceLocatorWithConstructor\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
class ServiceLocator implements ServiceLocatorInterface
{
    /**
     * @var array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    private $alias;

    /**
     * @var array|\Net\Bazzline\Component\ServiceLocator\InvokableDefinitionInterface[]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    private $invokables;

    /**
     * @var array|\Net\Bazzline\Component\ServiceLocator\ManagerDefinitionInterface[]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    private $managers;

    /**
     * @var array|\Net\Bazzline\Component\ServiceLocator\ServiceDefinitionInterface[]
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    private $services;

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-05
     */
    public function __construct()
    {
        $this->alias = array();
        $this->invokables = array();
        $this->managers = array();
        $this->services = array();

        $this->setUpInvokables();
    }

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    private function setUpInvokables()
    {
        $definitionOne = new InvokableDefinition();
        $definitionTwo = new InvokableDefinition();
        $definitionOne->setName('\Example\ServiceLocatorWithConstructor\ServiceLocator\InvokableOne');
        $definitionTwo->setName('\Example\ServiceLocatorWithConstructor\ServiceLocator\InvokableTwo');
        $definitionOne->setAlias('InvokableOne');

        $this->addInvokable($definitionOne);
        $this->addInvokable($definitionTwo);
    }

    /**
     * @param ManagerDefinitionInterface $manager
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addManager(ManagerDefinitionInterface $manager)
    {
        // TODO: Implement addManager() method.
    }

    /**
     * @param ServiceDefinitionInterface $service
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addService(ServiceDefinitionInterface $service)
    {
        // TODO: Implement addService() method.
    }

    /**
     * @param InvokableDefinitionInterface $invokable
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function addInvokable(InvokableDefinitionInterface $invokable)
    {
        // TODO: Implement addInvokable() method.
    }

    /**
     * Returns the manager by given name or alias
     *
     * @param string $name
     * @return ManagerDefinitionInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getManager($name)
    {
        // TODO: Implement getManager() method.
    }

    /**
     * Returns the name for provided alias or null
     *
     * @param string $alias
     * @return null|string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getName($alias)
    {
        // TODO: Implement getName() method.
    }

    /**
     * @param string $name
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function getService($name)
    {
        // TODO: Implement getService() method.
    }

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasManager($name)
    {
        // TODO: Implement hasManager() method.
    }

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasName($name)
    {
        // TODO: Implement hasName() method.
    }

    /**
     * @param string $name
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function hasService($name)
    {
        // TODO: Implement hasService() method.
    }
}