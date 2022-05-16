<?php

        include_once "header.php";

        session_start();
        $usuario=$_SESSION['usuario'];

    if($usuario['perfil']!="adm")
    {
        echo"Você não tem permissão de acesso!";

    }
    else{
    ?>
        <h2>Seja Bem Vindo, <?php print($usuario['login'])?></h2>
        <p>Você tem perfil de acesso: <?php print($usuario['perfil'])?></p>

        <h4>Selecione a opção desejada: </h4>

        <br>
<ul>
    <li><a href="formcadastrar.php">Cadastrar funcionário</a></li>
    <li><a href="listarcadastros.php">Lista de funcionários</a></li>
</ul>

<?php }?>

<?php include_once "footer.php";?>