<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRemessaAbstract;

class Registro9 extends RegistroRemessaAbstract
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

	public function get_totais_qtd_registros(){

		RegistroRemessaAbstract::$num_sequencia = RegistroRemessaAbstract::$num_sequencia + 2;

		$this->data['totais_qtd_registros'] = RegistroRemessaAbstract::$num_sequencia;
		
		$this->data['totais_qtd_registros'] = $this->___get('totais_qtd_registros');

		return $this->data['totais_qtd_registros'];
	}

}