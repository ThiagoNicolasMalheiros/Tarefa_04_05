<?php
require_once("suco.php");
$BebidaSuco = new Suco();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Suco</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">
    <div class="container">
    <form method="POST">
        <p>Sabor do Suco:</p>
        <input class="input" type="text" name="sabor">

        <p>Nome do Suco:</p>
        <input class="input" type="text" name="nome">

        <p>Preço do Suco:</p>
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
if (!empty($_POST["sabor"]) && !empty($_POST["nome"]) && !empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    $BebidaSuco->setNome($_POST["nome"]);
    $BebidaSuco->setPreco($_POST["preco"]);
    $BebidaSuco->setSabor($_POST["sabor"]);
    echo "<div style='text-align:center; margin-top:15px;'>Cadastrado!</div>";
    $_SESSION['suco']['sabor']= $BebidaSuco->getSabor();
    $_SESSION['suco']['Nome']= $BebidaSuco->getNome();
    $_SESSION['suco']['Preço']= $BebidaSuco->getPreco();
} else if (empty($_POST["sabor"]) && empty($_POST["nome"]) && empty($_POST["preco"]) && isset($_POST["btnCadastrar"])) {
    echo "<div style='text-align:center; margin-top:15px;'>Precisa preencher tudo!</div>";
} else if (isset($_POST["btnVoltar"]) && $_SESSION['suco']) {
    header("Location: index.php?SucoCadastrado");
} else if (isset($_POST["btnVoltar"])) {
    header("Location: index.php");
}
?>

</html>