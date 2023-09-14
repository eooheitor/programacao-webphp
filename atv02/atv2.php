<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $var1 = $_POST['var1'];
    
    if($var1 % 2 == 0){
        echo "Valor divisível por 2";
    } else {
      echo "O valor não é divisível por 2";
    }
    
  }
?>