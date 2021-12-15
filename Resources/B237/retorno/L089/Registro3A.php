<?php 

namespace CnabPHP\Resources\B237\retorno\L089;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRetornoAbstract;

class Registro3A extends RegistroRetornoAbstract
{
	protected $meta = array(
		'banco' => array(
			'tamanho'=> 3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'lote' => array(
			'tamanho'=> 4,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'registro' => array(
			'tamanho'=> 1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true
		),
		'num_registro' => array(
			'tamanho'=> 5,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
		),
		'segmento' => array(
			'tamanho'=> 1,
			'default'=>'A',
			'tipo'=>'alfa',
			'required'=>true
		),
		'movimento_tipo' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'movimento_codigo' => array(
			'tamanho'=> 2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'favorecido_camera' => array(
			'tamanho'=> 3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'favorecido_banco' => array(
			'tamanho'=> 3,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'favorecido_conta_agencia_codigo' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'favorecido_conta_agencia_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'favorecido_conta_numero' => array(
			'tamanho'=> 12,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'favorecido_conta_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'favorecido_conta_e_agencia_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'favorecido_nome' => array(
			'tamanho'=> 30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'credito_seu_numero' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'credito_dh_pagamento' => array(
			'tamanho'=> 8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'credito_moeda_tipo' => array(
			'tamanho'=> 3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'credito_moeda_quantidade' => array(
			'tamanho'=> 10,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 5,
			'required'=>true
		),
		'credito_valor' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'credito_nosso_numero' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'credito_data_real' => array(
			'tamanho'=> 8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'credito_valor_real' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'informacoes2' => array(
			'tamanho'=> 40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'codigo_finalidade_doc' => array(
			'tamanho'=> 2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'codigo_finalidade_ted' => array(
			'tamanho'=> 5,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'codigo_finalidade_complementar' => array(
			'tamanho'=> 2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'cnab' => array(
			'tamanho'=> 3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'aviso' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'ocorrencias' => array(
			'tamanho'=> 10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);

}