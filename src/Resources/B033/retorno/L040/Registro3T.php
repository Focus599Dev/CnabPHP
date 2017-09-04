<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:23
 */
namespace CnabPHP\Resources\B033\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico3;
use CnabPHP\RetornoAbstract;

class Registro3T extends Generico3
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
            'default'=>'T',
            'tipo'=>'alfa',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_movimento'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),

        // - ------------------ até aqui é igual para os registros tipo 3

        'agencia'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta'=>array(
            'tamanho'=>9,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>8,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'nosso_numero'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'carteira'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'seu_numero'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'data_vencimento'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'valor'=>array(
            'tamanho'=>13,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'banco_cobrador'=>array(
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_cobradora'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_cobradora_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'seu_numero2'=>array(
            'tamanho'=>25,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>false),
        'codigo_moeda'=>array(
            'tamanho'=>2,
            'default'=>'00',
            'tipo'=>'int',
            'required'=>true),
        'tipo_inscricao'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao'=>array(
            'tamanho'=>15,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'nome_pagador'=>array(
            'tamanho'=>40,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'conta_cobranca'=>array(
            'tamanho'=>10,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'vlr_tarifas'=>array(
            'tamanho'=>13,
            'default'=>'0',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'cod_rejeicao_liquidacao1'=>array(
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'cod_rejeicao_liquidacao2'=>array(
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'cod_rejeicao_liquidacao3'=>array(
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'cod_rejeicao_liquidacao4'=>array(
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'cod_rejeicao_liquidacao5'=>array(
            'tamanho'=>2,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>22,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true)
    );
    public function __construct($data = null)
    {
        if(empty($this->data))parent::__construct($data);
        $this->inserirDetalhe($data);
    }
    public function inserirDetalhe($data)
    {
        RetornoAbstract::$linesCounter++;
        $class = 'CnabPHP\Resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3U';
        $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
        if(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter+1],14,1)=="Y"){
            RetornoAbstract::$linesCounter++;
            $class = 'CnabPHP\Resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3Y';
            $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
        }
    }
    public function get_data_ocorrencia(){
        $r3u = $this->R3U;
        return $r3u->___get('data_ocorrencia');
    }
    public function get_vlr_pago(){
        $r3u = $this->R3U;
        return $r3u->___get('vlr_pago');
    }
    public function get_codigo_movimento(){
        $r3u = $this->R3U;
        return $r3u->codigo_movimento;
    }
}