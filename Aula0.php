<!DOCTYPE html>
<html>

<head>
    <title>Primeiro programa</title>
</head>

<body>
    <?php
    ini_set('display_errors', '1');
    define("pi", 3.1415);
    $raio = 4;
    $circunferencia = 2 * pi * $raio;
    echo "<p >Valor da circunferência: $circunferencia.</p>";
    ?>
</body>

</html>