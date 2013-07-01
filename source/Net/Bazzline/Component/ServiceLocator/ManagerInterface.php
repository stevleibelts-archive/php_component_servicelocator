<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;


interface ManagerInterface extends AliasInterface
{
    /**
     * Validates if given manager is an abstract manager or not
     *
     * @return boolean
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-01
     */
    public function isAbstract();

    public function setIsAbstract();

    public function setParent(ManagerInterface $parent);

    public function setFactory(FactoryServiceInterface $factory);

    public function setParameters(ParameterContainerInterface $parameters);
}