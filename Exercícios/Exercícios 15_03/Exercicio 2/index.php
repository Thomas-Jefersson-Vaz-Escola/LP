<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <Label>Primeiro Número</Label>
        <input type="number" name="primeironum"><br/>
        <Label>Segundo Número</Label>
        <input type="number" name="segundonum"><br/>
        <input type="submit" Value="Enviar">
    </form>
    
</body>
</html>
<?php
if (isset($_POST["primeironum"]) && isset($_POST["segundonum"])){
    $primeironum = $_POST["primeironum"];
    $segundonum = $_POST["segundonum"];
    $soma = $primeironum+$primeironum;
    $subtracao = $primeironum-$primeironum;
    $multiplicacao = $primeironum*$primeironum;
    $divisao = $primeironum/$primeironum;
    echo "O resultado da soma é: $soma <br/>";
    echo "O resultado da subtracao é: $subtracao <br/>";
    echo "O resultado da multiplicacao é: $multiplicacao <br/>";
    echo "O resultado da divisao é: $divisao <br/>";
}

?>
