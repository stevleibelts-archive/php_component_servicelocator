<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04 
 */

namespace Net\Bazzline\Component\ServiceLocator;

use InvalidArgumentException;
use RuntimeException;

/**
 * Class Definition
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-04
 */
class Definition implements DefinitionInterface
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $alias;

    /**
     * @var array
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $methodCalls;

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        if (!$this->hasAlias()) {
            throw new InvalidArgumentException(
                'No alias set'
            );
        }

        return $this->alias;
    }

    /**
     * {@inheritdoc}
     */
    public function hasAlias()
    {
        return (!is_null($this->alias));
    }

    /**
     * {@inheritdoc}
     */
    public function setAlias($alias)
    {
        if ($this->hasAlias()) {
            throw new RuntimeException(
                'Alias already set'
            );
        }

        $this->alias = (string) $alias;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addMethodCall($methodName, array $arguments)
    {
        if (is_null($this->methodCalls)) {
            $this->methodCalls = array();
        }
        $this->methodCalls[$methodName] = $arguments;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodCalls()
    {
        return (is_null($this->methodCalls)) ? array() : $this->methodCalls;
    }

    /**
     * {@inheritdoc}
     */
    public function setMethodCalls(array $methodCalls)
    {
        $this->methodCalls = $methodCalls;

        return $this;
    }
}