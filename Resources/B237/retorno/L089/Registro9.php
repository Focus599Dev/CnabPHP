<?php 

namespace CnabPHP\Resources\B237\retorno\L089;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRetornoAbstract;

class Registro9 extends RegistroRetornoAbstract
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
			'default'=>'9999',
			'tipo'=>'int',
			'required'=>true
		),
		'registro' => array(
			'tamanho'=> 1,
			'default'=>'9',
			'tipo'=>'int',
			'required'=>true
		),
		'cnab9' => array(
			'tamanho'=> 9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'totais_qtd_lotes' => array(
			'tamanho'=> 6,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
		),
		'totais_qtd_registros' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),

		'totais_qtd_contas_conciliadas' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
	
		'cnab10' => array(
			'tamanho'=> 205,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);

}