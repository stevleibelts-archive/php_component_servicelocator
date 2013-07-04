<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */

namespace Net\Bazzline\Component\ServiceLocator;

use InvalidArgumentException;
use RuntimeException;

/**
 * Class ManagerDefinition
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
class ManagerDefinition extends Definition implements ManagerDefinitionInterface
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $className;

    /**
     * {@inheritdoc}
     */
    public function setClassName($className)
    {
        if (!class_exists($className)) {
            throw new InvalidArgumentException(
                'Provided class does not exists: ' . $className . '"'
            );
        }
        $this->className = (string) $className;
    }

    /**
     * {@inheritdoc}
     */
    public function getClassName()
    {
        if (is_null($this->className)) {
            throw new RuntimeException(
                'Empty mandatory value detected'
            );
        }
        return $this->className;
    }
}