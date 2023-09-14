<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $altura = $_POST['altura'];
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];

    $resultado = $lado1*$altura;
    if ($resultado > 10) {
      echo "<h1>A área do retângulo de lados {$lado1} e {$lado2} metros é {$resultado} metros quadrados<h1>";
    } else {
      echo "<h3>A área do retângulo de lados {$lado1} e {$lado2} metros é {$resultado} metros quadrados<h3>";
    }
  }
