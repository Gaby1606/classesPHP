<?php

 /**
  * Classe pessoa define parâmetros para outras pessoas
  */
class Pessoa{
    /**
     * @acess private
     * @name nome
     */
   private $nome;

   /**
     * @acess private
     * @name dataNascimento
     */
   private $dataNascimento;

   /**
     * @acess private
     * @name cpf
     */
   private $cpf;

   /**
     * @acess private
     * @name rg
     */
   private $rg;

   /**
    * Função getter do nome
    *@return string nome
    */
public function getNome(){
    return $this->nome;
}

/**
 * Função setter do nome
 * @param string nome
 */
public function setNome($nome){
    $this->nome=$nome;
}

 /**
    * Função getter da Data de Nascimento
    *@return string dataNascimento
    */
public function getdataNascimento(){
    return $this->dataNascimento;
}

/**
    * Função setter da Data de Nascimento
    *@param string dataNascimento
    */
public function setdataNascimento($dataNascimento){
    $this->dataNascimento=$dataNascimento;
}

/**
    * Função getter do CPF
    *@return string cpf
    */
public function getcpf(){
    return $this->cpf;
}

/**
    * Função setter do CPF
    *@param string dataNascimento
    */
public function setcpf($cpf){
    $this->cpf=$cpf;
}

/**
    * Função getter do RG
    *@return string rg
    */
public function getrg(){
    return $this->rg;
}

/**
    * Função setter do RG
    *@param string rg
    */
public function setrg($rg){
    $this->rg=$rg;
}

}

