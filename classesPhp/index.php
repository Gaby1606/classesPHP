<?php



//include ("Pessoa.php");

//$p = new pessoa;

//$p-> setNome("Gabrielly");
//$p-> setdataNascimento("16/06/2005");
//$p-> setcpf("021.777.180-74");
//$p-> setrg("123456789");

//echo "CADASTRO PESSOA"."<br>";
//echo "<br>";
//echo "Nome: ".$p->getNome()."<br>";
//echo "Data de Nascimento: ".$p->getdataNascimento()."<br>";
//echo "CPF: ".$p->getcpf()."<br>";
//echo "RG: ".$p->getrg()."<br>";
//echo "<br>";

//-------------------------------------------------------------------//

include ("Engenheiro.php");

$e = new engenheiro;

$e-> setNome("Gabrielly");
$e-> setdataNascimento("16/06/2005");
$e-> setcpf("021.777.180-74");
$e-> setrg("123456789");
$e->setcrea("7642653654");


echo "-------------------------------------------"."<br>";
echo "CADASTRO ENGENHEIRO"."<br>";
echo "<br>";
echo "Nome: ".$e->getNome()."<br>";
echo "Data de Nascimento: ".$e->getdataNascimento()."<br>";
echo "CPF: ".$e->getcpf()."<br>";
echo "RG: ".$e->getrg()."<br>";
echo "CREA: ".$e->getcrea()."<br>";
echo "<br>";

//-------------------------------------------------------------------//

include ("Medico.php");

$m = new medico;

$m-> setNome("Gabrielly");
$m-> setdataNascimento("16/06/2005");
$m-> setcpf("021.777.180-74");
$m-> setrg("123456789");
$m->setcrm("765432");


echo "-------------------------------------------"."<br>";
echo "CADASTRO MÉDICO"."<br>";
echo "<br>";
echo "Nome: ".$m->getNome()."<br>";
echo "Data de Nascimento: ".$m->getdataNascimento()."<br>";
echo "CPF: ".$m->getcpf()."<br>";
echo "RG: ".$m->getrg()."<br>";
echo "CRM: ".$m->getcrm()."<br>";
echo "<br>";

//-------------------------------------------------------------------//

include ("Motorista.php");

$mo = new motorista;

$mo-> setNome("Gabrielly");
$mo-> setdataNascimento("16/06/2005");
$mo-> setcpf("021.777.180-74");
$mo-> setrg("123456789");
$mo->setcnh("76543210987");

echo "-------------------------------------------"."<br>";
echo "CADASTRO MOTORISTA"."<br>";
echo "<br>";
echo "Nome: ".$mo->getNome()."<br>";
echo "Data de Nascimento: ".$mo->getdataNascimento()."<br>";
echo "CPF: ".$mo->getcpf()."<br>";
echo "RG: ".$mo->getrg()."<br>";
echo "CNH: ".$mo->getcnh()."<br>";
echo "<br>";

?>