<?php
/*
$host="localhost";
$user="root";
$pass="mestre";
$dbname="webpdv";

$conexao=mysql_connect($host, $user, $pass);
$bd=mysql_select_db($bdname);
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$consulta=mysql_query("SELECT * FROM usuarios");
	while ($linha=mysql_fetch_array($consulta)) {
		echo $linha["ID"];
	}
}
*/
function conectar(){
	try{
	$pdo=new PDO("mysql:host=localhost; dbname=webpdv", "root", "mestre");
	}catch(PDOExecption $e){
		echo $e->getMessage ();
	}
	return $pdo;
}
?>