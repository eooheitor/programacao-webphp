<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $resultado = $base * $altura/2;

    echo "<h1>{$resultado}<h1>";
  }
?>