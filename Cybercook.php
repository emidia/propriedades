<?php

namespace emidia\propriedades;

use iPropriedade;

/**
 * Retorna informações do Cybercook
 */
class Cybercook implements iPropriedade
{
    public static function url()
    {
        return '//www.cybercook.com.br';
    }

    public static function url_mobile()
    {
        return '//m.cybercook.com.br';
    }
}
