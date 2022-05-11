<?php
require_once("refrigerante.php");
$BebidaRefrigerante = new Refrigerante();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Refrigerante</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <div class="container">
    <form method="POST">
        <p>Escolha o Vasilhame:</p>
        <select name="selecione" class="select">
            <option value="retornavel">Retornável</option>
            <option value="nao retornavel">Não Retornável</option>
        </select>
        <p>Nome do Refrigerante:</p>
        <input class="input" type="text" name="nome">

        <p>Preço do Refrigerante:</p>
        <input class="input" type="text" name="preco">
        <br/>
        <br/>
        <div class="botões">
                <input class="btnCadastrar" value="Voltar" type="submit" name="btnVoltar">
                <br/><br/>
                <input class="btnCadastrar" value="Cadastrar" type="submit" name="btnCadastrar">
            </div>
    </form>
    </div>
</body>
<?php
if (!empty($_POST["nome"]) && !empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    $BebidaRefrigerante->setNome($_POST["nome"]);
    $BebidaRefrigerante->setPreco($_POST["preco"]);
    $BebidaRefrigerante->setRetornavel($_POST["selecione"]);
    echo "<div style='text-align:center; margin-top:15px;'>Cadastrado!</div>";
    $_SESSION['refrigerante']['Nome']= $BebidaRefrigerante->getNome();
    $_SESSION['refrigerante']['Preço']= $BebidaRefrigerante->getPreco();
    $_SESSION['refrigerante']['Retornavel']= $BebidaRefrigerante->getRetornavel();
} else if (empty($_POST["nome"]) && empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    echo "<div style='text-align:center; margin-top:15px;'>Precisa preencher tudo!</div>";
} else if (isset($_POST["btnVoltar"]) && $_SESSION['refrigerante']) {
    header("Location: index.php?RefrigeranteCadastrado");
} else if (isset($_POST["btnVoltar"])) {
    header("Location: index.php");
}
?>

</html>