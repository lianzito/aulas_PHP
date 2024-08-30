<?php
	if($_GET)
	{
		//include "Cliente.class.php";
		//include_once "Cliente.class.php";
		//require "Cliente.class.php";
		require_once "Cliente.class.php";
		
		$cliente1 = new Cliente(0, $_GET["nome"], $_GET["cpf"], $_GET["email"]);
		
		
		//$cliente1 = new Cliente(cpf:$_GET["cpf"], nome:$_GET["nome"]);
		
		//$cliente1->nome = $_GET["nome"];
		//$cliente1->cpf = $_GET["cpf"];
		
		/*echo "<pre>";
		var_dump($cliente1);
		echo "</pre>";*/
		
		//abrir conexão
		
		$conect = $cliente1->conexao();
		
		$msg = $cliente1->inserir_cliente($conect);
		header("location:listar_clientes.php?msg=$msg");
		die();
		
		/*$numero = 10;
		
		echo "O nome é " . $_GET["nome"] . "<br>";
		
		echo "O CPF é {$_GET["cpf"]}<br>";
		
		echo "O número é $numero";*/
	}
	else
	{
		header("location:form_cliente.html");
		die();
	}
?>