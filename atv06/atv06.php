<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $maca =  $_POST['maca'];
  $melancia = $_POST['melancia'];
  $repolho = $_POST['repolho'];
  $cenoura = $_POST['cenoura'];
  $laranja = $_POST['laranja'];
  $batatinha = $_POST['batatinha'];

  $valorMaca = $maca * 11.99;
  $valorMelancia = $melancia * 25.00;
  $valorRepolho = $repolho * 1.25;
  $valorCenoura = $cenoura * 4.50;
  $valorLaranja = $laranja * 8.00;
  $valorBatatinha = $batatinha * 5.00;

  $valorTotal = $valorMaca+$valorMelancia+$valorRepolho+$valorCenoura+$valorLaranja+$valorBatatinha;

  echo "<p>Valor Gasto em maçã: {$valorMaca} </p><br>";
  echo "<p>Valor Gasto em melancia: {$valorMelancia} </p><br>";
  echo "<p>Valor Gasto em repolho: {$valorRepolho} </p><br>";
  echo "<p>Valor Gasto em cenoura: {$valorCenoura} </p><br>";
  echo "<p>Valor Gasto em laranja: {$valorLaranja} </p><br>";
  echo "<p>Valor Gasto em batatinha: {$valorBatatinha} </p><br>";
  echo "<h2>Valor Total: {$valorTotal}";
}
