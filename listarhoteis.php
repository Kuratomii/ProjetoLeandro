<?php
include_once ('database.php');
$sql="SELECT * FROM hotelaria ORDER BY hotel ASC";
$result=$conexao->query($sql);
