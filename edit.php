<?php include_once "editar_cadastro.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cadastro</title>
</head>
<body>
<ul>
    <h3>Editar cadastro</h3>
</ul>
<form action="save.php" method="POST">

    <label for="hotel">Nome do cotel:</label>
    <input type="text" name="hotel" id="hotel" value="<?php echo $hotel ?>">
    <br><br>
    <label for="estrela">Informe o número de estrelas:</label>
    <input type="text" name="estrela" id="estrela" value="<?php echo $estrela ?>">
    <br><br>
    <label for="pensao">Selecione se há pensão:</label>
        <select name="pensao" id="pensao">
        <option selected value="<?php echo $pensao; ?>" required><?php echo $pensao; ?></option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select>
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name= "update" id= "update" value="Cadastrar hotel">

</form>
</body>
</html>