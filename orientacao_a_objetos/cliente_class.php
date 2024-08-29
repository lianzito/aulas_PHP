<?php
class cliente{
	//método construtor
	public function __construct(private int
	$id_cliente = 0, private string $nome = "", private string $cpf = "", private string $email = ""){}

//método gets & sets
public function getId_cliente(){
	return $this->id_cliente;
}

public function setId_cliente($id){
    $this->id_cliente = $id;
}

public function getNome(){
	return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;
}

public function getCpf(){
	return $this->cpf;
}

public function setCpf($cpf){
    $this->cpf = $cpf;
}

public function getEmail(){
	return $this->email;
}

public function setEmail($email){
    $this->email = $email;
}

}
?>