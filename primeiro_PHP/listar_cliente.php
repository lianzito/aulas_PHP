<?php
	require_once "cliente_class.php";
	$cliente = new cliente();
	$conect = $cliente->conexao();
	$retorno = $cliente->buscar_clientes($conect);
	if($_GET){
		echo "<h1>{$_GET["msg"]}</h1>";
	}
	
	/* echo "<pre>";
	var_dump($retorno);
	echo "</pre>"; */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>clientes</h1>
	<br>
	<a href="form_cliente.html">Novo cliente</a>
	<br>
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>E-mail</th>
			</tr>
		</thead>

		<tbody>
			<?php
       
       // O retorno precisa ser feito em uma matriz, se não ela dá erro
       foreach($retorno as $dado ){

         //echo "{$dado->nome}<br>";
         //echo "{$dado['nome']}<br>";
         //echo "{$dado[1]}<br>";1
         echo "<tr>
               <td> {$dado->nome}</td>
               <td> {$dado->cpf}</td> 
               <td> {$dado->email}</td>
               </tr>";

       }

      ?>
		</tbody>
	</table>
</body>
</html>