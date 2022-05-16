<?php
if (!empty($_GET['id'])) {

include_once ('database.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM hotelaria WHERE id=$id";

$resultado = $conexao->query($sqlSelect);

if ($resultado->num_rows > 0) {
    while ($data = mysqli_fetch_assoc($resultado)) {
        $hotel = $data['hotel'];
        $estrela = $data['estrela'];
        $pensao = $data['pensao'];       
    }
} 
else {
    header('Location: index.php');
}
}