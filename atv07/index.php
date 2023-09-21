<?php
$valorAVista = 22500.00;
$valorParcela = 489.65;
$numParcelas = 60;
$totalPagoFinanciamento = $valorParcela * $numParcelas;
$jurosPagos = $totalPagoFinanciamento - $valorAVista;

echo "Mariazinha pagará R$" . number_format($jurosPagos, 2) . " em juros pelo financiamento.";
