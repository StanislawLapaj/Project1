<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dołączenie plików</title>
  </head>
  <body>
    <h3>Początek strony</h3>
    <?php
      require './3_1_name.php';
      require_once './3_1_name.php';
      include './3_1_name.php';
      include_once './3_1_name.php';
     ?>
    <h3>Koniec strony</h3>
  </body>
</html>
