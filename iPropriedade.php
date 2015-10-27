<?php

namespace emidia\propriedades;

/**
* Interface
*/
interface iPropriedade
{
    /**
    * Retorna a url principal do site
    */
    public static function url();

    /**
    * Retorna a url principal do site mobile
    */
    public static function urlMobile();
}
