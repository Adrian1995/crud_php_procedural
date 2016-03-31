
<?php
    //--------------------------CONECTAR COM O BANCO----------------------
    $conectaBanco = mysqli_connect ('localhost', 'root', '') or die (mysql_error()); //Conectando com o banco de dados
    $selecionaBanco = mysqli_select_db ($conectaBanco, 'crud') or die (mysql_error()); //selecionar um banco especifico, escoho o banco.

    date_default_timezone_set("Brazil/East"); //Define o tempo do servidor,ele busca o horario do servidor
?>
                   