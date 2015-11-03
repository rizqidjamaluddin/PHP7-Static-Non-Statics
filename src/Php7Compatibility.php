<?php

namespace Phroggyy\Utilities

Trait Php7Compatibility
{
    /**
     * Ensures that calling non-static methods statically works.
     *
     * @param  string  $name
     * @param  array   $parameters
     * @return mixed
     */
    public static function __callStatic($name, $parameters)
    {
        return call_user_func_array(array(new self, $name), $parameters);
    }
}