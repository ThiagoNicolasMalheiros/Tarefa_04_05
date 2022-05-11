<?php
require_once("vinho.php");
$BebidaVinho = new Vinho();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vinho</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <div class="container">
    <form method="POST">
        <p>Tipo do vinho:</p>
        <input class="input" type="text" name="tipo">

        <p>Safra do Vinho:</p>
        <input class="input" type="text" name="safra">

        <p>Nome do Vinho:</p>
        <input class="input" type="text" name="nome">

        <p>Preço do Vinho:</p>
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
if (!empty($_POST["tipo"]) && !empty($_POST["safra"]) && !empty($_POST["nome"]) && !empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    $BebidaVinho->setNome($_POST["nome"]);
    $BebidaVinho->setPreco($_POST["preco"]);
    $BebidaVinho->setTipo($_POST["tipo"]);
    $BebidaVinho->setSafra($_POST["safra"]);
    echo "<div style='text-align:center; margin-top:15px;'>Cadastrado!</div>";
    $_SESSION['vinho']['Tipo']= $BebidaVinho->getTipo();
    $_SESSION['vinho']['Safra']= $BebidaVinho->getSafra();
    $_SESSION['vinho']['Nome']= $BebidaVinho->getNome();
    $_SESSION['vinho']['Preço']= $BebidaVinho->getPreco(); 
} else if (empty($_POST["tipo"]) && empty($_POST["safra"]) && empty($_POST["nome"]) && empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    echo "<div style='text-align:center; margin-top:15px;'>Precisa preencher tudo!</div>";
} else if (isset($_POST["btnVoltar"]) && $_SESSION['vinho']) {
    header("Location: index.php?VinhoCadastrado");
} else if (isset($_POST["btnVoltar"])) {
    header("Location: index.php");
}
?>

</html>