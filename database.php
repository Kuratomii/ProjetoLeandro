<?php

    //constante
    define('SERVER', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'hotel');

    $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
    
    //função de conexão
    //$conexao = mysqli_connect("localhost", "root", "", "crudphp");

?>