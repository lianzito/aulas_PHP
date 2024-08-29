<?php
  if($_GET)
  {
  //include "cliente.class.php";
  //include_once "cliente.class.php";
  //require "cliente.class.php";
  require_once "cliente_class.php";

  $cliente1 = new cliente(0, $_GET["nome"], $_GET["cpf"], $_GET["email"]);
  
   //$cliente1 = new Cliente();
   //$cliente1->nome = $_GET["nome"];
   //s$cliente1->cpf = $_GET["cpf"];

   /* echo "<pre>";
   var_dump($cliente1);
   echo "</pre>"; */

   $conect = $cliente1->conexao();
		
   $msg = $cliente1->inserir_cliente($conect);
   header("location:listar_cliente.php?msg=$msg");
   die();

   /*$numero = 10;

   echo "O nome é " . $_GET["nome"] . "<br>";

   echo "O CPF é {$_GET["cpf"]}<br>";
   
   echo "O número é $numero";*/
  }
  else{
      header("location:form_cliente.html");
      die();
  }
?>