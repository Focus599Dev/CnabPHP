<?php

namespace CnabPHP\Resources\Generico\retorno\L040;

use CnabPHP\RegistroRetornoAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\Especie;
use Exception;

class Generico3 extends RegistroRetornoAbstract
{
	public function get_R3U()
	{
		return $this->children[0];
	}
}
?>