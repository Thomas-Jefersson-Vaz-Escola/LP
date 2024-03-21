<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="resposta.php" method="post">
        <Label>Nome aluno</Label><br/>
        <input type="text" name="nomealuno"><br/>
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
            if (isset($_POST["medianotas"]) && isset($_POST["nomealuno"])) {
                echo $nomealuno;
                echo $medianotas;
            }
            ?>
        </div>
</body>
</html>