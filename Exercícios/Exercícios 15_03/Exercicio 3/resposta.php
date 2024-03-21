<?php
    $distpercorrida = $_POST["distpercorrida"];
    $totalcomb = $_POST["totalcomb"];
    $combmedio = $distpercorrida/$totalcomb;
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
    exit;
?>