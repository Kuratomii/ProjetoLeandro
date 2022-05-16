<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Hotelaria</title>
</head>
<body>
    <?php include_once "header.php";?>
    <hr>
        <h2 style="text-align: center;">Sistema Hotelaria</h2>
    <hr>
    <?php include_once "listarhoteis.php";?>
    <div>
        <table class="table table-bg">
            <div>
                <thead>
                    <div>
                        <tr>
                            <th scope = "col">Hotel</th>
                            <th scope = "col">Estrela</th>
                            <th scope = "col">Pensão</th>
                        </tr>
                    </div>
                </thead>
            </div>
            <?php include_once "lista_hoteis.php";?>
         </table>
         </div>     
</body>
</html>

 
<p style="text-align: center;">Sinta-se em casa</p>

<hr>
<center>
    <form action="loginusuario.php" method="post">
            <label for="usuario">Login:</label>
            <input type="text" name="login" id="usuario" placeholder="Informe seu nome de usuário.">
            <label for="senha">Senha:</label>
            <input type="password" name="password" id="senha" placeholder="Informe sua senha.">
        <input type="submit" value="Acessar plataforma.">
    </form><br>
</center>
<!-- ?php

    session_start();
    if(isset($_SESSION['mensagem']))                                           
    {
        $mensagem = $_SESSION['mensagem'];

        echo '<p>'. $mensagem. '</p>';
        unset($_SESSION['mensagem']);
    }   

?> -->

<ul>
    <li><a href="formcadastrohotel.php">Cadastrar hotel</a></li>
    <li><a href="loginusuario.php">Esqueceu senha?</a></li>
</ul>

<?php include_once "footer.php";?>