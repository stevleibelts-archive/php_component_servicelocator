<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */

namespace Net\Bazzline\Component\ServiceLocator;

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
    }

    /**
     * {@inheritdoc}
     */
    public function getIsShared()
    {
        return $this->isShared;
    }
}