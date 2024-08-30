<?php
	class Cliente
	{
		
		//método construtor
		public  function __construct(private int $id_cliente = 0,private string $nome = "", private string $cpf = "", private string $email = ""){}
		
		//método
		public function inserir_cliente($conexao)
		{
			//criar a frase sql
			$sql = "INSERT INTO clientes (nome, cpf, email) VALUES(?,?,?)";
			//preparamos a frase sql evitando injeção sql
			$stm = $conexao->prepare($sql);
			//substituindo os pontos de interrogação
			$stm->bindValue(1, $this->nome);
			$stm->bindValue(2, $this->cpf);
			$stm->bindValue(3, $this->email);
			//executar o comando no BD
			$stm->execute();
			//retornar uma mensagem
			$id = $conexao->lastInsertId();
			echo $id;
		return "Cliente inserido com sucesso";
		}
		
		public function conexao()
		{
			$parametros = "mysql:host=localhost;dbname=primeiro_acesso;charset=utf8mb4";
			
			$conexao = new PDO($parametros, "root", "");
			
			return $conexao;
		}
		public function buscar_clientes($conexao)
		{
			$sql = "SELECT * FROM clientes";
			$stm = $conexao->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		
	}//fim classe
?>