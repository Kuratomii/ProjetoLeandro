<?php
//inclue o arquivo de conexão
include "conecta_mysql.php";
//Consulta rodos os cadastros
$sql="SELECT * FROM funcionarios";


//Executa SQL


$resultado=mysql_query($conexao, $sql);
?>

<DOCTYPE html>
    <HTML>
        <HEAD>
            <TITLE>Gestão de Funcionários</TITLE>
            <META charset="UTF-8">
</HEAD>
<BODY>
    <H1> Funcionários Cadastrados </H1>
    <TABLE border="1">
        <TR>
            <td>Atualizar</td>
            <td>Excluir</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Endereço</td>
            <td>Telefone</td>
</TR>
<?php
//Converte cada registro em uma array e exibe na tabela
while($funcionarioa=mysql_fetch_assoc($resultado)){
    echo "<TR>";
    //Passa como parametro cia $_GET o id de cada cliente

    echo"<td><a href='from_atualiza_func.php?id_funcionarios=$funcionarios[id]'>atualizar</a></td>";
    echo"<td><a href='exclui_funcionarios.php?id_funcionarios=$funcionarios[id]'>excluir</a></td>";
    //Exibe os dados do Funcionário

    echo "<td>".$funcionarios['nome']."</td>";
    echo "<td>".$funcionarios['email']."</td>";
    echo "<td>".$funcionarios['endereço']."</td>";
    echo "<td>".$funcionarios['telefone']."</td>";


}
//Fecha a conexão com o MySQL
mysqli_close($conexao);
    ?>

</TABLE>