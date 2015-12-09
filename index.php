<?php

/**
 * Classe que compara as variaveis
 *
 * Classe compara se as variaveis enviadas a funcao
 * sao iguais/identicas. Mostra o retorno de cada comparacao
 * na tela para o usuario.
 *
 * @author Maiky Alves da Silva <maikymk@hotmail.com>
 */

class Compara {

    /**
     * Faz comparacao dos tipos passados pelo
     * usuario e exibe o resultado na tela
     * 
     * @param numeric|string|bool $a Primeiro valor a ser comparado com o segundo
     * @param numeric|string|bool $b Segundo valor a ser comparado com o primeiro
     */
    public function comparacao($a, $b) {
        //var_export mostra informacao estruturada da variavel
        $x = var_export($a, true);
        $y = var_export($b, true);
        
        echo $x . ' == ' . $y;
        var_dump($a == $b);
        
        echo $x . ' === ' . $y;
        var_dump($a === $b);
        
        for($i = 0; $i < 550; $i++ ) {
            echo '|';
        }
        echo '<br><br>';
    }
}

$obj = new Compara();
$obj->comparacao(1, '1');
$obj->comparacao(1, true);
$obj->comparacao(true, 'true');
$obj->comparacao(1.4, 1.9);
$obj->comparacao(1.4, 1.4);
$obj->comparacao(0, false);
$obj->comparacao(1, '2');
$obj->comparacao(1, '01');
$obj->comparacao(1, '10');
$obj->comparacao(1, 's10');
$obj->comparacao(array(), 'array()');
$obj->comparacao(0, 'false');
$obj->comparacao(0, 'asdfasvdf');