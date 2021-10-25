<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico9;
use \CnabPHP\Resources\Generico\Bradesco\Cnab240\Registro1;

class Registro9 extends Generico9
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
		'cnab9' => array(
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

	public function get_totais_qtd_registros(){

		$registros = 0;

		foreach(RemessaAbstract::getFilhos() as $remessa){
			if(is_a($remessa, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro1'))
				$registros += 1;
		}
		
		$this->data['totais_qtd_registros'] = $registros;
		
		$this->data['totais_qtd_registros'] = $this->___get('totais_qtd_registros');
	}

	public function get_totais_valor(){

		$total = 0;

		foreach(RemessaAbstract::getFilhos() as $remessa){
			if(is_a($remessa, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro1')){
				
				$value = $remessa->data['credito_valor'];

				$inteiro = abs(substr($value, 0, 13));
                $decimal = abs(substr($value, 13, 2)) / 100;
                $retorno = ($inteiro + $decimal);

				$total += $retorno;
			}
				
		}
		
		$this->data['totais_valor'] = $total;
		
		$this->data['totais_valor'] = $this->___get('totais_valor');

	}

	public function get_totais_qtd_moeda(){

		$total = 0;

		foreach(RemessaAbstract::getFilhos() as $remessa){
			if(is_a($remessa, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro1')){
				
				$value = $remessa->data['credito_moeda_quantidade'];

				$inteiro = abs(substr($value, 0, 13));
                $decimal = abs(substr($value, 13, 2)) / 100;
                $retorno = ($inteiro + $decimal);

				$total += $retorno;
			}
				
		}
		
		$this->data['totais_qtd_moeda'] = $total;
		
		$this->data['totais_qtd_moeda'] = $this->___get('totais_qtd_moeda');

	}
}