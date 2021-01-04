<?php
  require "function.php";
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8"/>
    <title>Liste Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h2>Liste des utilisateurs</h2>
    <form method="post" action="pdf.php">
      <input type='submit' value='Export PDF'>
    </form>
    <table>
    </table>
  </body>

</html>
