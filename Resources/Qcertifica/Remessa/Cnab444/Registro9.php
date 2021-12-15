<?php 

namespace CnabPHP\Resources\Qcertifica\Remessa\Cnab444;

use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico9;
use CnabPHP\Resources\Qcertifica\Remessa\Cnab444\Registro1;

class Registro9 extends Generico9
{
	protected $meta = array(
		'ind_registro'=>
			array(
				'tamanho'=> 1,
				'default'=>'9',
				'tipo'=>'int',
				'required'=>true
			),
		'branco'=>
			array(
				'tamanho'=> 437,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'counter' => 
			array(
				'tamanho'=> 6,
				'default'=> '2',
				'tipo'=> 'int',
				'required'=> true
			)
	);

	protected function get_counter(){

		$this->data['counter'] = Registro1::get_num_sequencia() + 1;
		
		$this->data['counter'] = $this->___get('counter');
		
		return $this->data['counter'];
	}

}