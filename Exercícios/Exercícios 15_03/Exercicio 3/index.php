<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="resposta.php" method="post">
        <Label>Distância percorrida</Label><br/>
        <input type="number" name="distpercorrida" value="Ex: 130"><br/>
        <Label>Total de combustivel usado</Label><br/>
        <input type="number" name="totalcomb"><br/>
        <input type="submit" Value="Enviar">
    </form>
    <div id="resposta">
            <?php
            if (isset($_POST["combmedio"])) {
                echo $combmedio;
            }
            ?>
        </div>
</body>
</html>