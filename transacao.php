<?php

//Realizar a conexão
include("conexao.php");
$pdo=conectar();
//inicio da transação
$pdo->beginTransaction();
//Cadastrando dados
$dados=$pdo->query("INSERT INTO dados(status) VALUES ('1')");
if (!$dados) {
	die("Houve um erro no cadastro de dados");
}
//Cadastro final
$cadastro=$pdo->query("INSERT INTO usuarios (nome, email, status) VALUES ('Italo', 'itamks@outlook.com', '1')");
if (!$cadastro) {
	$pdo->rollBack();
	die("Houve um erro no cadastro final")
}
//Confirmação da transação
$pdo->commit();

?>