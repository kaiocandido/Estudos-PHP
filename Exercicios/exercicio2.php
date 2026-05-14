<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| rebase()
|--------------------------------------------------------------------------
|
| Objetivo:
| Converter um número de uma base para outra.
|
| Exemplo:
|
| rebase(2, [1,0,1,0], 10)
|
| Significa:
| converter 1010 da base 2 para base 10
|
| Resultado:
| [1,0]
|
*/

function rebase(int $fromBase, array $digits, int $toBase): array
{
    /*
    |--------------------------------------------------------------------------
    | Validação da base de entrada
    |--------------------------------------------------------------------------
    |
    | Uma base precisa ser no mínimo 2.
    |
    | Ex:
    | Base 1 não existe neste contexto.
    |
    */

    if ($fromBase < 2) {
        throw new InvalidArgumentException(
            'input base must be >= 2'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Validação da base de saída
    |--------------------------------------------------------------------------
    */

    if ($toBase < 2) {
        throw new InvalidArgumentException(
            'output base must be >= 2'
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Validação dos dígitos
    |--------------------------------------------------------------------------
    |
    | Cada dígito precisa:
    |
    | 1. ser >= 0
    | 2. ser menor que a base
    |
    | Ex:
    |
    | Base 2:
    | só pode usar 0 e 1
    |
    | Base 3:
    | só pode usar 0,1,2
    |
    */

    foreach ($digits as $digit) {

        if ($digit < 0 || $digit >= $fromBase) {

            throw new InvalidArgumentException(
                'all digits must satisfy 0 <= d < input base'
            );
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Conversão para decimal
    |--------------------------------------------------------------------------
    |
    | Aqui transformamos qualquer base em decimal.
    |
    | Ex:
    |
    | [1,0,1,0] base 2
    |
    | vira:
    |
    | (1 × 2³)
    | + (0 × 2²)
    | + (1 × 2¹)
    | + (0 × 2⁰)
    |
    */

    $decimal = 0;

    /*
    |--------------------------------------------------------------------------
    | Quantidade de dígitos
    |--------------------------------------------------------------------------
    |
    | Ex:
    |
    | [1,0,1,0]
    |
    | count = 4
    |
    */

    $tamanho = count($digits);

    /*
    |--------------------------------------------------------------------------
    | Percorre todos os dígitos
    |--------------------------------------------------------------------------
    */

    for ($i = 0; $i < $tamanho; $i++) {

        /*
        |--------------------------------------------------------------------------
        | Descobre potência correta
        |--------------------------------------------------------------------------
        |
        | Ex:
        |
        | índice 0 → potência 3
        | índice 1 → potência 2
        | índice 2 → potência 1
        | índice 3 → potência 0
        |
        */

        $potencia = $tamanho - 1 - $i;

        /*
        |--------------------------------------------------------------------------
        | Soma no decimal
        |--------------------------------------------------------------------------
        |
        | digit × base^potencia
        |
        */

        $decimal +=
            $digits[$i]
            *
            ($fromBase ** $potencia);
    }

    /*
    |--------------------------------------------------------------------------
    | Caso especial:
    |--------------------------------------------------------------------------
    |
    | Se o número convertido for 0,
    | retornamos [0]
    |
    */

    if ($decimal === 0) {
        return [0];
    }

    /*
    |--------------------------------------------------------------------------
    | Agora vamos converter:
    |
    | decimal → nova base
    |--------------------------------------------------------------------------
    */

    $resultList = [];

    /*
    |--------------------------------------------------------------------------
    | Enquanto ainda existir valor decimal
    |--------------------------------------------------------------------------
    */

    while ($decimal > 0) {

        /*
        |--------------------------------------------------------------------------
        | Pegamos o resto da divisão
        |--------------------------------------------------------------------------
        |
        | Ex:
        |
        | 40 % 2 = 0
        |
        | O resto vira um dígito da nova base.
        |
        */

        $resultList[] = $decimal % $toBase;

        /*
        |--------------------------------------------------------------------------
        | Divisão inteira
        |--------------------------------------------------------------------------
        |
        | Ex:
        |
        | 40 / 2 = 20
        |
        | Continuamos com o resultado da divisão.
        |
        */

        $decimal = intdiv($decimal, $toBase);
    }

    /*
    |--------------------------------------------------------------------------
    | IMPORTANTE
    |--------------------------------------------------------------------------
    |
    | Os restos ficam invertidos.
    |
    | Ex:
    |
    | 0 0 0 1 0 1
    |
    | Então invertimos:
    |
    | 1 0 1 0 0 0
    |
    */

    return array_reverse($resultList);
}