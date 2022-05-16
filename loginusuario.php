<?php
    //incluir o arquivo de conexão com o BD
    include "database.php";

    //iniciar a sessão
    session_start();

    //recuperar os dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['password'];

    //verificar se os campos estão vazios
    if(empty($login))
    {
        $_SESSION['mensagem'] = "Preencha o campo Login!!!";
        header("Location: index.php");
    }

    elseif(empty($senha))
    {
        $_SESSION['mensagem'] = "Preencha o campo Senha!!!";
        header("Location: index.php");
    }

    else
    {
        //SQL para consulta de usuário
        $sql = "SELECT * FROM login_user WHERE user_login = '$login' AND user_password = '$senha'";
        //Executa o SQL
        $resultado = mysqli_query($conexao, $sql);
       
        //manipular o retorno como um array associativo
        $dados = mysqli_fetch_assoc($resultado);
        
        //echo $dados;
        
        //valida o login e a senha com o retorno do BD
        if ($dados['user_login'] == $login and $dados['user_password'] == $senha)
        {
            //CRIA UM ARRY COM OS DADOS DO USUARIO
            $usuario = array("login" =>$dados['user_login'], "senha"=>$dados['user_password'], "perfil"=>$dados['user_profile']);
            //coloca o array do usuario na sessão
            $_SESSION['usuario']=$usuario;
            //redirecona para pagina painel.php]
            header("Location: painel.php");
        }
        else
        {
            //cria uma sessão para exibir mensagem de erro
            $_SESSION['mensagem'] = "Login ou senha inválido";
            header("Location: index.php");
        }


      


    }
?>