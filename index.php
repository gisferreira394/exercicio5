<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
       Converta para Fahrenheit 
        <input type="int" name ="celsius">

        <button type="submit" name="Verificar">Converta</button>
    </form>

<?php


$celsius;


if(isset($_POST["Verificar"])){
    $celsius = $_POST["celsius"];
    $fa = ($celsius * 9/5) + 32;
}

echo "O Fahrenheit é ". $fa ;

?>
</body>
</html>