<HTML><!-- EXERCÍCIO 06 - PHP -->
    <HEAD><TITLE>Exercício 06</TITLE></HEAD>
    <BODY BGCOLOR="green" TEXT="darkblue">
    <CENTER>
        <H1>Exercício 06 - Ímpares de 300 a 350</H1>
        <H2>Utilizando Loop com for()</H2>
        <H3>Aluno1 - Aluno2</H3>
        <HR><B><FONT FACE= "arial" SIZE="4" COLOR="white">
            <?php
            //Iniciando um Loop que será executado enquanto
            //i<350, com início de i=301, variando de 2 em 2
            for ($i = 301; $i < 350; $i=$i+2)
            {
            echo "$i - ";
            }
            echo "fim !";
            ?>
    </CENTER>
</BODY>
</HTML>