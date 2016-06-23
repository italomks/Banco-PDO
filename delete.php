<?php
//Conexão com o banco de dados
include("conexao.php");
$pdo=conectar();
//verifica se existem os dados necessarios para deletar
if (!empty($_GET["id"])):
	
	//Recebendo dados
	$nome=addslashes(trim($_GET["nome"]));
	$email=addslashes(trim($_GET["email"]));
	$id=addslashes(trim($_GET["id"]));
	//Realizando a consulta
	$deletarusuario=$pdo->prepare("DELETE FROM usuarios WHERE ID=?");
	$deletarusuario->bindValue(1,$id);
	$deletarusuario->execute();
	if($deletarusuario->rowCount()>0):
		echo "USUARIO DELETADO COM SUCESSO";
	else:
		echo "Desculpe o usuario não foi deletado";
	endif;
else:
	echo "<h2>Nenhum usuario encontrado, favor informar dados</h2>";
endif;
?>