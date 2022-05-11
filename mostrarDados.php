<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostar Dados</title>
</head>
<body>
    ASASSA
</body>
<?php
    foreach ($_SESSION['suco'] as $campo => $valor){
        echo "<div class='divInput'>
        <label for=' " . $campo . "'>" . $campo . " do suco :
            <input type='text' name='" . $campo . " ' value='$valor' disabled />
            </label>
        </div>";
    }
?>
</html>