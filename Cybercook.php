<?php

namespace emidia\propriedades;

use emidia\propriedades\iPropriedade;

/**
 * Retorna informações do Cybercook
 */
class Cybercook implements iPropriedade
{
    /**
    * @inheritdoc
    */
    public static function url()
    {
        return 'http://www.cybercook.com.br';
    }

    /**
    * @inheritdoc
    */
    public static function urlMobile()
    {
        return 'http://m.cybercook.com.br';
    }
}
