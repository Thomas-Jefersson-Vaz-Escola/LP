<?php
$preco_produto = $_POST["preco_produto"];
$valor_nota = $_POST["valor_nota"];
$quant_nota = $_POST["quant_nota"];
$troco = ($valor_nota*$quant_nota)-$preco_produto;
echo "O troco a pagar é: $troco";
?>
