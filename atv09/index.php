<?php
$valorAVista = 8654.00;
$taxaJuros = 0.02;
$incrementoTaxa = 0.003;
$parcelas = [24, 36, 48, 60];

function calcularParcela($valorAVista, $taxaJuros, $numParcelas) {
    $montante = $valorAVista * (1 + $taxaJuros) ** $numParcelas;
    $valorParcela = $montante / $numParcelas;
    return $valorParcela;
}

foreach ($parcelas as $numParcelas) {
    $valorParcela = calcularParcela($valorAVista, $taxaJuros, $numParcelas);

    echo "Para $numParcelas vezes, o valor da parcela é R$" . number_format($valorParcela, 2) . "\n";
    $taxaJuros += $incrementoTaxa;
}
?>