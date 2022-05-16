<?php include_once "header.php";?>

<h2>Cadastro de hotel </h2>
<p>Preencha todos os campos do formulário.</p>
<a href="index.php">Voltar para a página principal</a>
<hr><hr>
<br>

<form action="cadastrar.php" method="post">
    <label for="nomefuncionario">Nome:</label>
    <input type="text" name="nomefuncionario" id="nomefuncionario" placeholder="Informe o nome">
    <br><br>

    <label for="celularfuncionario">Celular:</label>
    <input type="tel" name="celularfuncionario" id="celularfuncionario" placeholder="Informe o celular">
    <br><br>

    <label for="emailfuncionario">E-mail:</label>
    <input type="email" name="emailfuncionario" id="emailfuncionario" placeholder="Informe o e-mail">
    <br><br>

    <input type="submit" value="Cadastrar funcionário">
</form>

<?php include_once "footer.php";?>