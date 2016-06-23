<?php
session_start();
include "banco.php";
$bdServidor = '127.0.0.1';
$bdUsuario = 'sistema';
$bdSenha = 'sistematarefa';
$bdBanco = 'tarefas';

$conexao = mysql_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysql_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados !";
	die();
}
function buscar_tarefas($conexao){
	$sqlBusca = 'SELECT * FROM tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);

	$tarefas = array();

	while ($tarefa = mysqli_fetch_assoc($resultado)){
		$tarefas[] = $tarefa;
	}
}
?>