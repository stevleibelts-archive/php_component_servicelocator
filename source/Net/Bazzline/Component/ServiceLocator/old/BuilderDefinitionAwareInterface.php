<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04 
 */

namespace Net\Bazzline\Component\ServiceLocator\old;

/**
 * Class BuilderDefinitionAwareInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
interface BuilderDefinitionAwareInterface
{
    /**
     * @param \Net\Bazzline\Component\ServiceLocator\BuilderDefinitionInterface $builderDefinition
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function setBuilderDefinition(BuilderDefinitionInterface $builderDefinition);

    /**
     * @return \Net\Bazzline\Component\ServiceLocator\BuilderDefinitionInterface
     * @throws \RuntimeException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    public function getBuilderDefinition();
}