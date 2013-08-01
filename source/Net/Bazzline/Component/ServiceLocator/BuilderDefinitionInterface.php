<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class BuilderDefinitionInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface BuilderDefinitionInterface
{
    /**
     * @return BuilderDefinitionInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function getBuilderDefinition();

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function hasBuilderDefinition();

    /**
     * @param BuilderDefinitionInterface $builderDefinition
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function setBuilderDefinition(BuilderDefinitionInterface $builderDefinition);
}