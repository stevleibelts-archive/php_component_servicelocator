<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28 
 */

namespace Net\Bazzline\Component\ServiceLocator;

/**
 * Class ParameterInterface
 *
 * @package Net\Bazzline\Component\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-28
 */
interface ParameterInterface extends NameableInterface, AliasableInterface, RequireableInterface
{
    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function getValue();

    /**
     * @return bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function hasValue();

    /**
     * @param mixed $value
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-28
     */
    public function setValue($value);
}