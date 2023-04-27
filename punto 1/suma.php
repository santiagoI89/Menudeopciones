<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
<form action="" method="post">
        <h1>Suma</h1>
        <label>Numero 1</label>
        <input type="number" name="numero1">
        <label>Numero 2</label>
        <input type="number" name="numero2">
        <input type="submit" name="iniciar">
    </form>
</body>
</html>
<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$resultado=$numero1+$numero2;

echo "<h1>".$resultado."</h1>";