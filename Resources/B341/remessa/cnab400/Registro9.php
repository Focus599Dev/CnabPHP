<?php
namespace CnabPHP\Resources\B341\remessa\cnab400;

use CnabPHP\Resources\Generico\remessa\cnab400\Generico9;

class Registro9 extends Generico9
{
	protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'9',
            'tipo'=>'int',
            'required'=>true),
      'filler1'=>array(            //32.3P
            'tamanho'=>393,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
   	);
	
}

?>
