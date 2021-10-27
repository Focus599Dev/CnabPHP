<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico1;

class Registro1 extends Generico1
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
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
		),
		'operacao' => array(
			'tamanho'=> 1,
			'default'=>'C',
			'tipo'=>'alfa',
			'required'=>true
		),
		'servico' => array(
			'tamanho'=> 2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'forma_lancamento' => array(
			'tamanho'=> 2,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'layout_lote' => array(
			'tamanho'=> 3,
			'default'=>'045',
			'tipo'=>'int',
			'required'=>true
		),
		'branco01' => array(
			'tamanho'=> 1,
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
			'default'=>'0',
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
		'informacoes1' => array(
			'tamanho'=> 40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_logadouro' => array(
			'tamanho'=> 30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_numero' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_complemento' => array(
			'tamanho'=> 15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_cidade' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_cep' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'empresa_cep_complemento' => array(
			'tamanho'=> 3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'empresa_estado' => array(
			'tamanho'=> 2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'indicativo_forma_pagamento' => array(
			'tamanho'=> 2,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
		),
		'cnab' => array(
			'tamanho'=> 6,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'ocorrencias' => array(
			'tamanho'=> 10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);

	public function __construct($data = null)
	{
		if(empty($this->data))
			parent::__construct($data);
			
		$this->inserirDetalhe($data);
	}

	public function inserirDetalhe($data)
	{
		$class = 'CnabPHP\\Resources\\' . RemessaAbstract::$banco . '\\Remessa\\' . RemessaAbstract::$leiaute.'\\Registro3A';
		
		$this->children[] = new $class($data);

		$class = 'CnabPHP\\Resources\\' . RemessaAbstract::$banco . '\\Remessa\\' . RemessaAbstract::$leiaute.'\\Registro3B';
		
		$this->children[] = new $class($data);

		$class = 'CnabPHP\\Resources\\' . RemessaAbstract::$banco . '\\Remessa\\' . RemessaAbstract::$leiaute.'\\Registro5';
		
		$this->children[] = new $class();
 	}

}