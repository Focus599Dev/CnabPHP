<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRemessaAbstract;

class Registro5 extends RegistroRemessaAbstract
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

	public function get_totais_qtd_registros(){

		RegistroRemessaAbstract::$num_sequencia = RegistroRemessaAbstract::$num_sequencia + 2;
		
		$this->data['totais_qtd_registros'] = RegistroRemessaAbstract::$num_sequencia;
		
		$this->data['totais_qtd_registros'] = $this->___get('totais_qtd_registros');

		return $this->data['totais_qtd_registros'];
	}

	public function get_totais_valor(){

		$total = 0;

		foreach(RemessaAbstract::getFilhos() as $remessa){

			if(is_a($remessa, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro3A')){
				
				$value = $remessa->data['credito_valor'];
				$inteiro = abs(substr($value, 0, 13));
                $decimal = abs(substr($value, 13, 2)) / 100;
                $retorno = ($inteiro + $decimal);

				$total += $retorno;
			}
				
		}

		foreach(RemessaAbstract::getFilhos() as $remessa){

			if (!$remessa->children)
				continue;

			foreach($remessa->children as $remessaChild){
				if(is_a($remessaChild, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro3A')){
					
					$value = $remessaChild->data['credito_valor'];
					$inteiro = abs(substr($value, 0, 13));
					$decimal = abs(substr($value, 13, 2)) / 100;
					$retorno = ($inteiro + $decimal);

					$total += $retorno;
				}
			}
					
		}
		
		$this->data['totais_valor'] = $total;
		
		$this->data['totais_valor'] = $this->___get('totais_valor');

		return $this->data['totais_valor'];

	}

	public function get_totais_qtd_moeda(){

		$total = 0;

		foreach(RemessaAbstract::getFilhos() as $remessa){
			if(is_a($remessa, 'CnabPHP\Resources\Bradesco\Remessa\Cnab240\Registro3A')){
				
				$value = $remessa->data['credito_moeda_quantidade'];

				$inteiro = abs(substr($value, 0, 13));
                $decimal = abs(substr($value, 13, 2)) / 100;
                $retorno = ($inteiro + $decimal);

				$total += $retorno;
			}
				
		}
		
		$this->data['totais_qtd_moeda'] = $total;
		
		$this->data['totais_qtd_moeda'] = $this->___get('totais_qtd_moeda');

		return $this->data['totais_qtd_moeda'];

	}
}