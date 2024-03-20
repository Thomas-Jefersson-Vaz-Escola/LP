<?php
if(isset($_POST["distpercorrida"]) && isset( $_POST["totalcomb"])){
    $distpercorrida = $_POST["distpercorrida"];
    $totalcomb = $_POST["totalcomb"];
    $combmedio = $distpercorrida/$totalcomb;
    echo $combmedio;
}
?>