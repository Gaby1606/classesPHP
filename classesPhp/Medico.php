<?php
require_once "Pessoa.php";

/**
 * Função que recebe a CRM de Médico
 * @author Gabrielly de Vargas
 * @version 1.0
 */

 /**
  * Classe herdeira da classe Pessoa
  */
class Medico extends Pessoa{
   private $crm;

   /**
    * Função getter da CRM
    *@return string crm
    */
public function getcrm(){
    return $this->crm;
}

/**
 * Função setter da CRM
 * @param string crm
 */
public function setcrm($crm){
    $this->crm=$crm;
}

}
