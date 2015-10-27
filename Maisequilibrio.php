<?php

namespace emidia\propriedades;

use emidia\propriedades\iPropriedade;

/**
 * Retorna informações do Maisequilibrio
 */
class Maisequilibrio implements iPropriedade
{
    /**
    * @inheritdoc
    */
    public static function url()
    {
        return 'http//www.maisequilibrio.com.br';
    }

    /**
    * @inheritdoc
    */
    public static function urlMobile()
    {
        return self::url();
    }
}
