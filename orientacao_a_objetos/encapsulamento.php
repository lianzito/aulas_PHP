<?php
   require_once "cliente_class.php";

   $cliente = new Cliente(1, "Lian", "123.123.123-23", "lianfnatucci@gmail.com");

   echo $cliente->getNome() . "<br>";
   $cliente->setNome("Luan");
   echo $cliente->getNome();

?>