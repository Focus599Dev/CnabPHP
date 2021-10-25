<?php 

namespace CnabPHP\Resources\Libertas\Remessa\Cnab240;

use \CnabPHP\Resources\Generico\Remessa\Cnab240\Generico1;

class Registro1 extends Generico1
{

    protected static $num_sequencia = 1;

	protected $meta = array(
		'ind_registro'=>
			array(
				'tamanho'=> 1,
				'default'=>'1',
				'tipo'=>'int',
				'required'=>true
			),
		'debito_automatico'=>
			array(
				'tamanho'=> 19,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'cobrigacao'=>
			array(
				'tamanho'=> 2,
				'default'=>'1',
				'tipo'=>'int',
				'required'=>true
			),
		'caracteristicas_especial'=>
			array(
				'tamanho'=> 2,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'modalidade_operacao'=>
			array(
				'tamanho'=> 4,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'natureza_operacao'=>
			array(
				'tamanho'=> 2,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'origigem_recurso'=>
			array(
				'tamanho'=> 4,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'classe_risco'=>
			array(
				'tamanho'=> 2,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'zero01'=>
			array(
				'tamanho'=> 1,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'nun_controle_participante'=>
			array(
				'tamanho'=> 25,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'num_banco'=>
			array(
				'tamanho'=> 3,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'zero02'=>
			array(
				'tamanho'=> 5,
				'default'=>'0',
				'tipo'=>'int',
				'required'=>true
			),
		'ident_titulo_banco'=>
			array(
				'tamanho'=> 11,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'dig_nosso_numero'=>
			array(
				'tamanho'=> 1,
				'default'=>' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'valor_pago'=>
			array(
				'tamanho'=> 10,
				'default'=> '0',
				'tipo'=>'decimal',
				'precision'=> 2,
				'required'=>true
			),
		'cond_emi_pape_cobranca'=>
			array(
				'tamanho'=> 9,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'iden_emite_pape_debi_auto'=>
			array(
				'tamanho'=> 1,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'data_liquidacao'=>
			array(
				'tamanho'=> 6,
				'default'=> '000000',
				'tipo'=>'date',
				'required'=> true
			),
		'iden_operacao_banco'=>
			array(
				'tamanho'=> 4,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'indi_rateio_credito'=>
			array(
				'tamanho'=> 1,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'ende_aviso_debito'=>
			array(
				'tamanho'=> 1,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'ende_aviso_debito'=>
			array(
				'tamanho'=> 1,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'branco03'=>
			array(
				'tamanho'=> 2,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'iden_ocorrencia'=>
			array(
				'tamanho'=> 2,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'num_documento'=>
			array(
				'tamanho'=> 10,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'data_vencimento_titulo'=>
			array(
				'tamanho'=> 6,
				'default'=> '000000',
				'tipo'=>'date',
				'required'=>true
			),
		'valor_titulo'=>
			array(
				'tamanho'=> 13,
				'default'=> '0',
				'tipo'=>'decimal',
				'precision' => 2,
				'required'=>true
			),
		'banco_encarregado_cobranca'=>
			array(
				'tamanho'=> 3,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'agencia_depositaria'=>
			array(
				'tamanho'=> 5,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'especie_titulo'=>
			array(
				'tamanho'=> 2,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'identificacao'=>
			array(
				'tamanho'=> 1,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'data_emissao_titulo'=>
			array(
				'tamanho'=> 6,
				'default'=> '000000',
				'tipo'=>'date',
				'required'=>true
			),
		'instrucao1'=>
			array(
				'tamanho'=> 2,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'instrucao2'=>
			array(
				'tamanho'=> 1,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'tipo_pessoa_cedente'=>
			array(
				'tamanho'=> 2,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'zeros04'=>
			array(
				'tamanho'=> 14,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'numero_termo_cessao'=>
			array(
				'tamanho'=> 9,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'valor_presente_parcela'=>
			array(
				'tamanho'=> 13,
				'default'=> '0',
				'tipo'=>'decimal',
				'precision' => 2,
				'required'=>true
			),
		'valor_abatimento'=>
			array(
				'tamanho'=> 13,
				'default'=> '0',
				'tipo'=>'decimal',
				'precision' => 2,
				'required'=>true
			),
		'ident_tipo_inscri_sacado'=>
			array(
				'tamanho'=> 2,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'num_inscricao_sacado'=>
			array(
				'tamanho'=> 14,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'nome_sacado'=>
			array(
				'tamanho'=> 40,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'endereco_completo'=>
			array(
				'tamanho'=> 40,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'num_nota_fiscal'=>
			array(
				'tamanho'=> 9,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'serie_nota_fiscal'=>
			array(
				'tamanho'=> 3,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
		),
		'cep'=>
			array(
				'tamanho'=> 8,
				'default'=> '0',
				'tipo'=>'int',
				'required'=>true
			),
		'cedente'=>
			array(
				'tamanho'=> 60,
				'default'=> ' ',
				'tipo'=>'alfa',
				'required'=>true
			),
		'chave_nota'=>
			array(
				'tamanho'=> 44,
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

		self::$num_sequencia += 1;

		$this->data['counter'] = self::$num_sequencia;
		
		$this->data['counter'] = $this->___get('counter');
		
		return $this->data['counter'];
	}

	public static function get_num_sequencia(){
		return  self::$num_sequencia;
	}
}