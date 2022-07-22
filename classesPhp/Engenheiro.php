<?php
require_once "Pessoa.php";

/**
 * Função que recebe o CREA de Engenheiro
 * @author Gabrielly de Vargas
 */

 /**
  * Classe Engenheiro que herda Pessoa
  */
class Engenheiro extends Pessoa{
   private $crea;

   /**
    *Função getter no crea
    *@return string crea
    */
public function getcrea(){
    return $this->crea;
}


/**
 * Função setter do crea
 * @param string crea
 */
public function setcrea($crea){
    $this->crea=$crea;
}

}


