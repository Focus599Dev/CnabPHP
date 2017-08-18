<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:23
 */
namespace CnabPHP\Resources\Santander\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico1;
use CnabPHP\RetornoAbstract;

class Registro1 extends Generico1
{
    public $trailler;
    protected $meta = array(
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'033',
            'tipo'=>'int',
            'required'=>true),
        'codigo_lote'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),
        'operacao'=>array(
            'tamanho'=>1,
            'default'=>'T',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_servico'=>array(
            'tamanho'=>2,
            'default'=>'01',
            'tipo'=>'int',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>2,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'versao_layout'=>array(
            'tamanho'=>3,
            'default'=>'040',
            'tipo'=>'int',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'tipo_inscricao'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao'=>array(
            'tamanho'=>15,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_beneficiario'=>array(
            'tamanho'=>9,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'agencia'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int','required'=>true),
        'conta_corrente'=>array(
            'tamanho'=>9,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta_corrente_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler4'=>array(
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_empresa'=>array(
            'tamanho'=>30,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler5'=>array(
            'tamanho'=>80,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_retorno'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'data_gravacao'=>array(
            'tamanho'=>8,
            'default'=>'',// nao informar a data na instanciação - gerada dinamicamente
            'tipo'=>'date',
            'required'=>true),
        'filler6'=>array(
            'tamanho'=>41,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
    );
    public function __construct($line)
    {
        parent::__construct($line);
        $this->inserirDetalhe();
    }
    /*
    * método inserirDetalhe()
    * Recebe os parametros
    * @$data = um array contendo os dados nessesarios para o arquvio
    */
    public function inserirDetalhe(){
        while($this->data['codigo_lote']==abs(substr(RetornoAbstract::$lines[RetornoAbstract::$linesCounter],3,4)))
        {
            RetornoAbstract::$linesCounter++;
            $class = 'CnabPHP\Resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro3T';
            $this->children[] = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);

        }
        RetornoAbstract::$linesCounter--;
        $teste = array_pop($this->children);
    }
}