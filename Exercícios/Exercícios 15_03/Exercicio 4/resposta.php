<?php
if(isset($_POST["distpercorrida"]) && isset( $_POST["totalcomb"])){
    $nomealuno = $_POST["nomealuno"];
    $notaprimprova = $_POST["notaprimprova"];
    $notasegprova = $_POST["notasegprova"];
    $notatercprova = $_POST["notatercprova"];
    $medianotas = ($notaprimprova+$notasegprova+$notatercprova)/3;
    echo $nomealuno;
    echo $medianotas;
}
?>