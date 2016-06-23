<?php
//Conexão com o banco de dados
include("conexao.php");
$pdo=conectar();
//Realizando a consulta
$buscarusuario=$pdo->prepare("SELECT * FROM usuarios");
$buscarusuario->execute();
//Atribuindo os dados a uma consulta
$linha = $buscarusuario->fetchAll(PDO::FETCH_ASSOC);
//Percorrendo a variavel para listar os dados
foreach ($linha as $listar){
	echo "E-mail:".$listar["email"]."<br/>";
}	
	

/*while ($linha=$buscarusuario->fetch(PDO::FETCH_ASSOC)) {
	echo "E-mail:".$linha["email"]."<br/>";
}	
*/

?>