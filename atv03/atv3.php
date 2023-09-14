<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lado = $_POST['var1'];

    $resultado = $lado**2;

    echo "<h1>A área do quadrado de lado {$lado} é: {$resultado}</h1>";
  }
?>