<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-06 
 */

namespace Example\ServiceLocatorWithConstructor\ServiceLocator;

/**
 * Class ManagerOne
 *
 * @package Example\ServiceLocatorWithConstructor\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-06
 */
class ManagerOne
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    protected $bar;

    /**
     * @param string $bar
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function setBar($bar)
    {
        $this->bar = $bar;
    }

    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function getBar()
    {
        return $this->bar;
    }
}