<?php

namespace App;

class Postcard
{

    // public static function any() {
    // }
    // Magic method __callStatic
    public static function __callStatic($method, $arguments)
    {
    dd($arguments);
    
}
}
