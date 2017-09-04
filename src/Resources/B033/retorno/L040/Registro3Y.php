<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:33
 */
namespace CnabPHP\Resources\B033\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;

class Registro3Y extends Generico3
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
            'default'=>'Y',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(
            'tamanho'=>2,
            'default'=>'06',
            'tipo'=>'int',
            'required'=>true),

        // - ------------------ até aqui é igual para os registros tipo 3
        'identificacao_registro'=>array(
            'tamanho'=>2,
            'default'=>'04',
            'tipo'=>'int',
            'required'=>true),
        'identificacao_cheque1'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'identificacao_cheque2'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'identificacao_cheque3'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'identificacao_cheque4'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'identificacao_cheque5'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'identificacao_cheque6'=>array(
            'tamanho'=>34,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>15,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
    );

}