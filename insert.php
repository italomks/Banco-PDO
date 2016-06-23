<?php
include("conexao.php");
$pdo=conectar();
$email=$_GET["email"];
//Prepara o cadastro
$buscasegura=$pdo -> prepare("INSERT INTO usuarios(email) VALUES (:email");
$buscasegura -> bindValue(":email",$email);
//Valida o cadastro
$validar=$pdo->prepare("SELECT * FROM usuarios WHERE email=?");
$validar->execute(array($email));
if ($validar->rowCount()==0) {
	//Executao cadastro
	$buscasegura -> execute();
	else:
		echo "Ja existe !";
	endif;
}
?>