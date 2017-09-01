<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:32
 */
namespace CnabPHP\Resources\Santander\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;

class Registro3U extends  Generico3
{
    protected $meta = array(
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'033',
            'tipo'=>'int',
            'required'=>true),
        'codigo_lote'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'3',
            'tipo'=>'int',
            'required'=>true),
        'numero_registro'=>array(
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'seguimento'=>array(
            'tamanho'=>1,
            'default'=>'U',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(
            'tamanho'=>2,
            'default'=>'', // entrada de titulo
            'tipo'=>'int',
            'required'=>true),

        // - ------------------ até aqui é igual para os registros tipo 3

        'vlr_juros_multa'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_desconto'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_abatimento'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_iof'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_pago'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_liquido'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_outros_despesas'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_outros_creditos'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'data_arquivo'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'data_credito'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'ocorrencia_pagador'=>array(
            'tamanho'=>4,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'data_ocorrencia'=>array(
            'tamanho'=>8,
            'default'=>' ',
            'tipo'=>'date',
            'required'=>true),
        'vlr_ocorrencia_pagador'=>array(
            'tamanho'=>13,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>30,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'cod_banco_correspondente_compensacao'=>array(
            'tamanho'=>3,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>27,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),

    );
}