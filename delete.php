<?php 
    if (!empty($_GET['id'])){
        include_once ('database.php');
        $id=$_GET['id'];
        $sqlselect = "SELECT * FROM hotelaria WHERE id=$id";

        $result = $conexao->query($sqlselect);

        if($result->num_rows > 0)
        {
                $sqlDelete = "DELETE FROM hotelaria WHERE id=$id";
                $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: index.php');
    