<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:25
 */
namespace CnabPHP\Resources\Santander\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico5;
use CnabPHP\RetornoAbstract;

class Registro5 extends Generico5
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
            'default'=>'5',
            'tipo'=>'int',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>9,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'qtd_registros'=>array(
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'qtd_titulos_simples'=>array(
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'vrl_titulos_simples'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>'2',
            'required'=>true),
        'qtd_titulos_caucionada'=>array(
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'vlr_titulos_caucionada'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>'2',
            'required'=>true),
        'qtd_titulos_descontada'=>array(
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'vlr_titulos_descontada'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>'2',
            'required'=>true),
        'num_aviso_lancamento'=>array(
            'tamanho'=>8,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>117,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
    );
}