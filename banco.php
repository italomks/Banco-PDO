<?php

$bdBanco = 'tarefas';

$conexao = mysql_connect($bdBanco);

if (mysql_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados !";
	die();
}

?>