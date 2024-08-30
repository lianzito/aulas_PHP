<?php
	require_once "Cliente.class.php";
	$cliente = new Cliente();
	$conect = $cliente->conexao();
	$retorno = $cliente->buscar_clientes($conect);
	
	/*echo "<pre>";
	var_dump($retorno);
	echo "</pre>";*/
	if($_GET)
	{
		echo "<h3>{$_GET["msg"]}</h3>";
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Clientes</title>
	</head>
	<body>
		<h1>Clientes</h1>
		
		<a href="form_cliente.html">Novo Cliente</a>
		<br>
		<br>
		<table border="1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($retorno as $dado)
					{
						echo "<tr>
							  <td>{$dado->nome}</td>
							  <td>{$dado->cpf}</td>
							  <td>{$dado->email}</td>
							  </tr>";
					}
					
				?>
				
			</tbody>
		</table>
	</body>
</html>