<?php

namespace App;

class Postcard
{

   protected static function resolveFacade($name) {
    return app()[$name];
   }
    // Magic method __callStatic
    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('Postcard'))
        ->$method(...$arguments);
        
    }
}
