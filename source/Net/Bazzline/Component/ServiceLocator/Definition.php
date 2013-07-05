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
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-04
     */
    protected $name;

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
    public function getName()
    {
        if (is_null($this->name)) {
            throw new InvalidArgumentException(
                'Mandatory parameter name not set'
            );
        }

        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        if (!is_null($this->name)) {
            throw new RuntimeException(
                'Name already set'
            );
        }
        $this->name = (string) $name;
    }
}