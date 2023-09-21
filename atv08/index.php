<?php
$valorAVista = 8654.00;
$taxaJuros = 0.015;

$parcelas = [24, 36, 48, 60];

foreach ($parcelas as $numParcelas) {
    $taxaJuros += 0.005; 
    $valorParcela = ($valorAVista * (1 + $taxaJuros)) / $numParcelas;

    echo "Para $numParcelas vezes, o valor da parcela é R$" . number_format($valorParcela, 2) . "\n";
}
?>





