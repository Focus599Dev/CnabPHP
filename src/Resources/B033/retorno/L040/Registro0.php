<?php
/**
 * Created by PhpStorm.
 * User: desenvolvedor6
 * Date: 18/08/17
 * Time: 11:23
 */
namespace CnabPHP\Resources\B033\retorno\L040;
use CnabPHP\Resources\Generico\retorno\L040\Generico0;
use CnabPHP\RetornoAbstract;

class Registro0 extends Generico0
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
            'default'=>'0000',
            'tipo'=>'int',
            'required'=>true),
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'filler1'=>array(
            'tamanho'=>8,
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
        'agencia'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta'=>array(
            'tamanho'=>9,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler2'=>array(
            'tamanho'=>5,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_beneficiario'=>array(
            'tamanho'=>9,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler3'=>array(
            'tamanho'=>11,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_empresa'=>array(
            'tamanho'=>30,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'nome_banco'=>array(
            'tamanho'=>30,
            'default'=>'BANCO SANTANDER',
            'tipo'=>'alfa',
            'required'=>true),
        'filler4'=>array(
            'tamanho'=>10,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'codigo_remessa'=>array(
            'tamanho'=>1,
            'default'=>'2',
            'tipo'=>'int',
            'required'=>true),
        'data_geracao'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'filler5'=>array(
            'tamanho'=>6,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_sequencial_arquivo'=>array(
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'versao_layout'=>array(
            'tamanho'=>3,
            'default'=>'040',
            'tipo'=>'int',
            'required'=>true),
        'filler6'=>array(
            'tamanho'=>74,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
    );
    public function __construct($line)
    {
        parent::__construct($line);
        RetornoAbstract::$linesCounter++;
        $this->inserirDetalhe();
    }
    public function inserirDetalhe()
    {
        while(RetornoAbstract::$linesCounter < (count(RetornoAbstract::$lines)-4))
        {
            $class = 'CnabPHP\Resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro1';
            $lote = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $class = 'CnabPHP\Resources\\'.RetornoAbstract::$banco.'\retorno\\'.RetornoAbstract::$layout.'\Registro5';
            $lote->trailler = new $class(RetornoAbstract::$lines[RetornoAbstract::$linesCounter]);
            $this->children[] = $lote;
        }
    }
}