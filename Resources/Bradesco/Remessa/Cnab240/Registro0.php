<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico0;

class Registro0 extends Generico0
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
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'cnab' => array(
			'tamanho'=> 9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_inscricao_tipo' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_inscricao_numero' => array(
			'tamanho'=> 14,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_convenio' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_agencia_codigo' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_agencia_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_conta_codigo' => array(
			'tamanho'=> 12,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_conta_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_conta_agencia_dv' => array(
			'tamanho'=> 1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_nome' => array(
			'tamanho'=> 30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'nome_banco' => array(
			'tamanho'=> 30,
			'default'=>'Bradesco S A',
			'tipo'=>'alfa',
			'required'=>true
		),
		'cnab2' => array(
			'tamanho'=> 10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'arquivo_codigo' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'arquivo_dh_geracao' => array(
			'tamanho'=> 8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'arquivo_tm_geracao' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'arquivo_sequencia' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'arquivo_layout' => array(
			'tamanho'=> 3,
			'default'=>'089',
			'tipo'=>'int',
			'required'=>true
		),
		'arquivo_densidade' => array(
			'tamanho'=> 5,
			'default'=>'1600',
			'tipo'=>'int',
			'required'=>true
		),
		'reserva_banco' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'reserva_empresa' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'cnab3' => array(
			'tamanho'=> 29,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);

}