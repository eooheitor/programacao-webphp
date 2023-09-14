<?php

function geraAleatorio()
{
    return rand(1, 10);
}

if (!empty($_POST['x'])) {
$x = $_POST['x'];
$y = $_POST['y'];;
$matriz = array();

for ($i = 0; $i < $x; $i++) {
    $linha = array();
    for ($j = 0; $j < $y; $j++) {
        $linha[] = geraAleatorio();
    }

    $matriz[] = $linha;
}
}
