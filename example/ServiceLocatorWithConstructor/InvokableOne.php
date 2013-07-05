<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-06 
 */

namespace Example\ServiceLocatorWithConstructor\ServiceLocator;

/**
 * Class InvokableOne
 *
 * @package Example\ServiceLocatorWithConstructor\ServiceLocator
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-06
 */
class InvokableOne
{
    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-06
     */
    public function getName()
    {
        return get_class($this);
    }
}