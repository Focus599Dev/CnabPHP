<?php 

namespace CnabPHP\Resources\B237\retorno\L089;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRetornoAbstract;

class Registro5 extends RegistroRetornoAbstract
{
	protected $meta = array(
		'banco' => array(
			'tamanho'=> 3,
			'default'=>'237',
			'tipo'=>'int',
			'required'=>true
		),
		'lote' => array(
			'tamanho'=> 4,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
		),
		'registro' => array(
			'tamanho'=> 1,
			'default'=>'5',
			'tipo'=>'int',
			'required'=>true
		),
		'cnab9' => array(
			'tamanho'=> 9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'totais_qtd_registros' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'totais_valor' => array(
			'tamanho'=> 16,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'totais_qtd_moeda' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 5,
			'required'=>true
		),
		'num_aviso_debito' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'cnab10' => array(
			'tamanho'=> 165,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'ocorrencias9' => array(
			'tamanho'=> 10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);


}