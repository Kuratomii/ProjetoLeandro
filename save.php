<?php

include_once ('database.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $hotel = $_POST['hotel'];
    $estrela = $_POST['estrela'];
    $pensao = $_POST['pensao'];

    $sqlupdate = "UPDATE hotelaria SET hotel ='$hotel', estrela ='$estrela', pensao ='$pensao' WHERE id = '$id'";

    $resultado = $conexao->query($sqlupdate);
}
header('Location: index.php');