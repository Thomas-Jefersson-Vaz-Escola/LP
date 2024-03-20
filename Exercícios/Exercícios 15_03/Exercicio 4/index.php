<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="resposta.php" method="post">
        <Label>Distância percorrida</Label><br/>
        <input type="number" name="distpercorrida" value="Ex: 130"><br/>
        <Label>Nota da primeira prova</Label><br/>
        <input type="number" name="notaprimprova"><br/>
        <Label>Nota da Segunda prova</Label><br/>
        <input type="number" name="notasegprova"><br/>
        <Label>Nota da Terceira prova</Label><br/>
        <input type="number" name="notatercprova"><br/>
        <input type="submit" Value="Enviar">
    </form>
    <div id="resposta">
            <?php include("resposta.php");
            if (isset($_POST["combmedio"])) {
                echo $combmedio;
            }
            ?>
        </div>
</body>
</html>