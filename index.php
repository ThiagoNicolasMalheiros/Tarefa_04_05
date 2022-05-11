<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tarefa Dia 04/05</title>
</head>

<body class="body">
    <div class="container">
        <form method="POST" >
    <label class="descricao">Escolha o tipo de bebida:</label><br/>

    <select name="selecione" class="select" style="width: 200px;">
    <option value="vinho">Vinho</option>
    <option value="suco">Suco</option>
    <option value="refrigerante">Refrigerante</option>
    <?php
                if (isset($_SESSION['vinho']) || isset($_SESSION['suco']) || isset($_SESSION['refrigerante'])) {
                    echo '<option value="mostrarDados">Mostrar os dados</option>';
                }
                ?>
    </select>
    <br/>
    <br/>
    <div class="botao" style="justify-content: center; display: flex;">
        <input href="<?php if (isset($_POST['selecione'])) {
                                    switch ($_POST['selecione']) {
                                        case 'vinho':
                                            header("Location:cadastrarVinho.php");
                                            break;
                                        case 'suco':
                                            header("Location:cadastrarSuco.php");
                                            break;
                                        case 'refrigerante':
                                            header("Location:cadastrarRefrigerante.php");
                                            break;
                                        case 'mostrarDados':
                                            header("Location:mostrarDados.php");
                                            break;
                                    }
                                }
                                ?>" class="btnCadastrar" value="Enviar" type="submit" />
            </div>
        </form>
    </div>
</body>
</html>

