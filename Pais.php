<?php
class Pais{
private $codigo, $nome, $populacao, $dimensao;
private $PaisFronteira = array();

function __construct($codigo , $nome, $dimensao)
{
$this->codigo = $codigo;
$this->nome = $nome;
$this->dimensao = $dimensao;
}        
public function setCodigo($codigo)
{
$this->codigo = $codigo;
}
public function getCodigo()
{
return $this->codigo;
}
public function setNome($nome)
{
$this->nome = $nome;
}
public function getNome()
{
return $this->nome;
}
public function setPopulacao($populacao)
{
$this->populacao = $populacao;
}
public function getPopulacao()
{
return $this->populacao;
}
public function setDimensao($dimensao)
{
$this->dimensao = $dimensao;
}
public function getDimensao()
{
return $this->dimensao;
}

Pais
