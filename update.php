<?php
//Conexão com o banco de dados
include("conexao.php");
$pdo=conectar();
//verifica se existem os dados necessarios para a atualização
if (!empty($_GET["id"]) && !empty($_GET["nome"]) && !empty($_GET["email"])):
	
	//Recebendo dados
	$nome=addslashes(trim($_GET["nome"]));
	$email=addslashes(trim($_GET["email"]));
	$id=addslashes(trim($_GET["id"]));
	//Realizando a consulta
	$atualizarusuario=$pdo->prepare("UPDATE usuarios SET nome=:nome, email=:email WHERE ID=:id");
	$atualizarusuario->bindValue(":nome",$nome);
	$atualizarusuario->bindValue(":email", $email);
	$atualizarusuario->bindValue(":id", $id);
	$atualizarusuario->execute();
else:
	echo "<h2>Nenhum usuario encontrado, favor informar dados</h2>";
endif;
?>