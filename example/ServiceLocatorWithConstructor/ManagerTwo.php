<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-06 
 */

namespace Example\ServiceLocatorWithConstructor\ServiceLocator;


class ManagerTwo extends ManagerOne
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    protected $foo;

    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    protected $foobar;

    /**
     * @param string $foobar
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function __construct($foobar)
    {
        $this->foobar = (string) $foobar;
    }

    /**
     * @param string $foo
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function getFoobar()
    {
        return $this->foobar;
    }
}