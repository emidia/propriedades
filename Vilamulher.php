<?php

namespace emidia\propriedades;

use emidia\propriedades\iPropriedade;

/**
 * Retorna informações do Vilamulher
 */
class Vilamulher implements iPropriedade
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
    public static function url_mobile()
    {
        return self::url();
    }
}
