<?php

//Realiza a inclusão do arquivo de conexão com o BD
include "database.php";

//Declaração dde variáveis para receber os dados do formulário

$hotel = $_POST["hotel"];
$estrela = $_POST["estrela"];
$pensao = $_POST["pensao"];

// echo $usuario,$password,$perfil;

//String SQL
$sql = "INSERT INTO hotelaria (hotel, estrela, pensao)
VALUES ('$hotel', '$estrela', '$pensao')";


//$banco="INSERT INTO login_user (user_login, user_password, user_profile) 
//VALUES ('$usuario', '$password', '$perfil')";


//echo $sql;

//Função para cadastrar no BD
if(mysqli_query($conexao, $sql)) {
    //echo "Cadastro realizado com sucesso";
    header ("Location: index.php");
}

else {
    echo "Falha ao cadastrar hotel";
}