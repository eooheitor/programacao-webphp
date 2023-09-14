<style>
  .text-red {
    color: red;
  }

  .text-blue {
    color: blue;
  }

  .text-green {
    color: green;
  }

  .text-center {
    font-size: 48px;
    text-align: center;
  }
</style>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $var1 = $_POST['var1'];
  $var2 = $_POST['var2'];
  $var3 = $_POST['var3'];
  $resultado = $var1 + $var2 + $var3;

  if ($var1 > 10) {
    echo "<h1 class='text-center text-blue'>{$resultado}</h1>";
  } else if($var2 < $var3){
    echo "<h1 class='text-center text-green'>{$resultado}</h1>";
  } else if ($var3 < $var2 && $var1){
    echo "<h1 class='text-center text-red'>{$resultado}</h1>";
  }
}
