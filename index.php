<!DOCTYPE html>
<html lang="pt-br">

<?php
include 'matriz.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matriz</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="">Informe quantas linhas deseja ter na sua matriz</label>
    <input type="text" name="x">
    <br>
    <br>
    <label for="">Informe quantas colunas deseja ter na sua matriz</label>
    <input type="text" name="y">
    <button name="btnGerar">Gerar</button>
  </form>

  <?php if (!empty($_POST['x'])) { ?>
    <table border="1">
      <?php
      foreach ($matriz as $linha) {
        echo '<tr>';
        foreach ($linha as $valor) {
          echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
      }
      ?>
    </table>
  <?php } ?>

</body>



</html>