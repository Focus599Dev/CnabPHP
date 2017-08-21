<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:25
 */
namespace CnabPHP\Resources\Santander\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico9;
use CnabPHP\RetornoAbstract;

class Registro9 extends Generico9
{
    protected $meta = array(
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'033',
            'tipo'=>'int',
            'required'=>true),
        'codigo_lote'=>array(
            'tamanho'=>4,
            'default'=>9999,
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'9',
            'tipo'=>'int',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>9,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'qtd_lotes'=>array(
            'tamanho'=>6,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'qtd_registros'=>array(
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>211,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
    );
}