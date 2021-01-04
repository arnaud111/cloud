<?php
  require "functions.php";
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
      <?php

        $connect = connectDB();

        $listUser = $connect->query("SELECT email FROM USER");
        while($user = $listUser->fetch()){
          echo "<tr><td>".$user["email"]."</td></tr>";
        }

      ?>
    </table>
  </body>

</html>
