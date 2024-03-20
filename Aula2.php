<?php
//Informeo troco a ser pago para ocliente que adquiriu um produto, cujo preço de custo é R$243,00 e pagou com 3 notas de R$100.
$preco_produto = 243.00;
$valor_pago = 300.00;
$troco = $valor_pago-$preco_produto;
echo "O troco a ser pago é: $troco";
?>