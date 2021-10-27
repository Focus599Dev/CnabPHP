<?php 

namespace CnabPHP\Resources\Bradesco\Remessa\Cnab240;

use CnabPHP\RemessaAbstract;
use CnabPHP\RegistroRemessaAbstract;

class Registro3B extends RegistroRemessaAbstract
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
			'default'=>'2',
			'tipo'=>'int',
			'required'=>true
		),
		'segmento' => array(
			'tamanho'=> 1,
			'default'=>'B',
			'tipo'=>'alfa',
			'required'=>true
		),
		'cnab' => array(
			'tamanho'=> 3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_inscricao_tipo' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'complementar_favorecido_inscricao_numero' => array(
			'tamanho'=> 14,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'complementar_favorecido_logadouro' => array(
			'tamanho'=> 30,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_numero' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'complementar_favorecido_complemento' => array(
			'tamanho'=> 15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_bairro' => array(
			'tamanho'=> 15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_cidade' => array(
			'tamanho'=> 20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_cep' => array(
			'tamanho'=> 5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'complementar_favorecido_cep_complemento' => array(
			'tamanho'=> 3,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_favorecido_uf' => array(
			'tamanho'=> 2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'complementar_pagamento_vencimento' => array(
			'tamanho'=> 8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'complementar_pagamento_valor' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'complementar_pagamento_abatimento' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'complementar_pagamento_desconto' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'complementar_pagamento_mora' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'complementar_pagamento_multa' => array(
			'tamanho'=> 13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision' => 2,
			'required'=>true
		),
		'complementar_cod_favorecido' => array(
			'tamanho'=> 15,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
		),
		'aviso_3b' => array(
			'tamanho'=> 1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'codigo_ug_centralizadora' => array(
			'tamanho'=> 6,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true
		),
		'identificação_banco_spb' => array(
			'tamanho'=> 8,
			'default'=> ' ',
			'tipo'=>'alfa',
			'required'=>true
		),
	);

	protected function get_num_registro(){

		self::$num_sequencia += 1;

		$this->data['num_registro'] = self::$num_sequencia;
		
		$this->data['num_registro'] = $this->___get('num_registro');
		
		return $this->data['num_registro'];
	}
}