<?php 

namespace CnabPHP\Resources\Libertas\Remessa\Cnab240;

use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico0;

class Registro0 extends Generico0
{
	protected $meta = array(
		'ind_registro'=>
			array(
				'tamanho'=> 1,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'ind_arq_remessa'=>
			array(
				'tamanho'=> 1,
				'default'=>'1',
				'tipo'=>'int',
				'required'=>true
			),
		'lit_remessa' => 
			array(
				'tamanho'=> 7,
				'default'=>'Remessa',
				'tipo'=>'alfa',
				'required'=>true
			),
		'cod_servico' => 
			array(
				'tamanho'=> 2,
				'default'=>'1',
				'tipo'=>'int',
				'required'=>true
			),
		'lit_cobranca' => 
			array(
				'tamanho'=> 15,
				'default'=>'COBRANCA',
				'tipo'=>'alfa',
				'required'=> true
			),
		'cod_consultoria' => 
			array(
				'tamanho'=> 20,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'nome_originador' => 
			array(
				'tamanho'=> 30,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'numero_banco' => 
			array(
				'tamanho'=> 3,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'nome_banco' => 
			array(
				'tamanho'=> 15,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'dt_gravacao' => 
			array(
				'tamanho' => 6,
				'default' => '211021',
				'tipo'=> 'date',
				'required'=> true
			),
		'branco01' => 
			array(
				'tamanho'=> 8,
				'default'=>'0',
				'tipo'=>'alfa',
				'required'=>true
			),
		'iden_sistema' => 
			array(
				'tamanho'=> 2,
				'default'=> 'MX',
				'tipo'=>'alfa',
				'required'=>true
			),
		'seq_arquivo' => 
			array(
				'tamanho'=> 7,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'branco02' => 
			array(
				'tamanho'=> 321,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'counter' => 
			array(
				'tamanho'=> 6,
				'default'=> '1',
				'tipo'=> 'int',
				'required'=> true
			)
	);

}