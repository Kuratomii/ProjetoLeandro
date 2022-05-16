<?php include_once "header.php";?>

<h2>Sistema hotelaria</h2>
<hr><hr>
<ul>
    <h3>Cadastrar novo hotel</h3>
</ul>

<!-- <ul>
    <li><a href="formcadastrar.php">Cadastro de funcionários</a></li>
</ul> -->

<form action="cadastrarhotel.php" method="post">
    <label for="hotel">Nome do hotel:</label>
    <input type="text" name="hotel" id="hotel" placeholder="Informe o nome do hotel.">
    <br><br>
    <label for="estrela">Informe o número de estrelas:</label>
    <input type="text" name="estrela" id="estrela" placeholder="Informe o número de estrelas do hotel (0 a 5).">
    <br><br>
    <label for="pensao">Seleciona se há pensão:</label>
        <select name="pensao" id="pensao">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select>
    <input type="submit" value="Cadastrar hotel">
    <br><br>
</form>

<ul>
    <li><a href="index.php">Voltar para página principal</a></li>
</ul>

<?php include_once "footer.php";?>