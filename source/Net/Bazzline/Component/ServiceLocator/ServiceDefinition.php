<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */

namespace Net\Bazzline\Component\ServiceLocator;

use RuntimeException;

/**
 * Class ServiceDefinition
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
class ServiceDefinition extends Definition
{
    /**
     * @var BuilderDefinitionInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $builderDefinition;

    /**
     * @var bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $isShared;

    /**
     * {@inheritdoc}
     */
    public function setIsShared($isShared)
    {
        $this->isShared = (boolean) $isShared;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIsShared()
    {
        return $this->isShared;
    }

    /**
     * {@inheritdoc}
     */
    public function setBuilderDefinition(BuilderDefinitionInterface $builderDefinition)
    {
        $this->builderDefinition = $builderDefinition;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBuilderDefinition()
    {
        if (is_null($this->builderDefinition)) {
            throw new RuntimeException(
                'Empty mandatory value detected'
            );
        }
        return $this->builderDefinition;
    }
}