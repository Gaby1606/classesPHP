<?php
require_once "Pessoa.php";

/**
 * Função que recebe a CNH do Motorista
 * @author Gabrielly de Vargas
 */

 /**
  * Classe Motorista que herda Pessoa
  */
class Motorista extends Pessoa{
   private $cnh;

   /**
    *Função getter no cnh
    *@return string cnh
    */
public function getcnh(){
    return $this->cnh;
}

/**
 * Função setter do cnh
 * @param string cnh
 */
public function setcnh($cnh){
    $this->cnh=$cnh;
}

}
