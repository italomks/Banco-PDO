<HTML><!-- EXERCÍCIO 05 - PHP -->
    <HEAD><TITLE>Exercício 05</TITLE></HEAD>
    <BODY BGCOLOR="black" TEXT="silver">
    <CENTER>
        <H1>Exercício 05 - Equipes com até 3 Alunos</H1>
        <H2>Utilizando Condicional com switch()</H2>
        <HR><B><FONT FACE= "arial" SIZE="4" COLOR="white">
            <?php
            //atribuir um valor numeric qualquer para a quantidade
            $qtd = 7;
            //Utilizando condicional com switch()
            switch ($qtd)
            {
            case 0:
            echo "Não é uma Equipe !";
            break;
            case 1: case 2: case 3:
            echo "A Equipe com $qtd alunos foi aceita !";
            break;
            default:
            echo "A Equipe com $qtd alunos não foi aceita!";
            break;
            }
            ?>
    </CENTER>
</BODY>
</HTML>