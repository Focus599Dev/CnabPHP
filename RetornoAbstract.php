<?php
namespace CnabPHP;
use Exception;

abstract class RetornoAbstract
{
	//public  $hearder; // armazena o objeto registro 0 do arquivo
	private  $children = array(); // armazena os registros filhos da classe remessa
	public static $banco; // sera atribuido o nome do banco que tambem é o nome da pasta que contem os layouts
	public static $layout;// recebera o nome do layout na instacia?ao  
	public static $loteCounter = 1; // contador de lotes
	public static $lines; // mantem os dados passados em $data na instanciação
	public static $linesCounter = 0;
	//public static $retorno = array(); // durante a geração do txt de retorno se tornara um array com as linhas do arquvio

	/*
	* método __construct()
	* Recebe os parametros
	* @$banco = nome do banco no momento so Caixa
	* @$layout = nome do layout no momento so Cnab240_SIGCB
	* @$data = um array contendo os dados nessesarios para o arquvio
	*/

	public function __construct($conteudo){
		$conteudo = str_replace("\r\n", "\n", $conteudo);
		
		$lines = explode("\n", $conteudo);

		$lines = $this->checkEmptyLines($lines);

		if (count($lines) < 2) {
			throw new Exception("Arquivo sem Conteudo");
		}
		$length = strlen($lines[0]);
		$layout_versao = null;

		if ($length == 240 || $length == 241) {
			$bytes = 240;
			$layout_versao = substr($lines[0], 163, 3);
			$codigo_banco = substr($lines[0], 0, 3);
			$codigo_tipo = substr($lines[0],  142, 1);
		} elseif ($length == 400 || $length == 401) {
			$bytes = 400;
			$layout_versao = '400';
			$codigo_banco = substr($lines[0], 76, 3);
			$codigo_tipo = substr($lines[0],  1, 1);
		}
		else
		{
			throw new Exception("Não foi possivel detectar o tipo do arquivo, provavelmente esta corrompido");
		}

		if($codigo_tipo == '1'){
			throw new Exception("Esse é um arqvuio de remessa, nao pode ser processado aqui.");
		}

		self::$banco = "B".$codigo_banco;
		
		self::$layout = "L".$layout_versao;

		if ($length == 240){

			$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro0';
			
			self::$lines = $lines; 
			
			$this->children[] = new $class($lines[0]);

			for($i = 2 ; $i  <= (count($lines) - 3); $i++){

				$registro = substr($lines[$i], 7, 1);
	
				$operação = substr($lines[$i], 13, 1);
				
				$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro' . $registro . $operação;
			
				$this->children[] = new $class($lines[$i]);
			}

			$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro5';
			
			$this->children[] = new $class($lines[count($lines)-2]);
			
			$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro9';
			
			$this->children[] = new $class($lines[count($lines)-1]);
			

		} else if ($length == 400 || $length == 444){

			$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro0';
			
			self::$lines = $lines; 
			
			$this->children[] = new $class($lines[0]);
			
			$class = 'CnabPHP\Resources\\'.self::$banco.'\retorno\\'.self::$layout.'\Registro9';
			
			$this->children[] = new $class($lines[count($lines)-2]);

		}

	}
	/*
	* m?todo changeLayout()
	* Recebe os parametros
	* @$newLayout = altera o layout do lote , servira para enviar lotes de layouts diferentes no mesmo arquvio //(ALERTA) nao testado
	*/
	public function changeLayout($newLayout)
	{
		self::$layout = $newLayout;
	}
	/*
	* método getLote()
	* Metodo statico para pegar o objeto do lote
	* @$index = o indice do lote , normalmente 1
	*/
	public function getRegistros($lote = 1)
	{
		$data = array();

		foreach($this->children as $line){
			$data[] = $line->getData();
		}

		return $data;
	}	
	/*
	* método getChilds()
	* Metodo que retorna todos os filhos
	*/
	public function getChilds()
	{
		$arquivo = $this->children[0];
		return $arquivo->getChilds();
	}
	public function getChild($index = 0)
	{
		$arquivo = $this->children[0];
		return $arquivo->getChild($index);
	}
	public function getLayout()
	{
		 $arquivo = $this->children[0];   
		 return (self::$layout!='L400')?$arquivo->versao_layout:'L400';
         
	}

	private function checkEmptyLines($lines){

		$data = array();

		foreach($lines as $line){
			if (trim($line)){

				$data[] = $line;
			}
		}

		return $data;
	}
}
?>