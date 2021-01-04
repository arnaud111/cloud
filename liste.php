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
    <?php
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(array(
            "source" => "",
            "landscape" => false,
            "use_print" => false
        )),
        CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
        CURLOPT_USERPWD => 'api:31ef6864d610413ca62695af726b197b'
      ));

      $response = curl_exec($curl);
      file_put_contents('users.pdf', $response);
    ?>

    <a href="users.pdf" download>download pdf</a>

    <table>
      <?php

        $connect = connectDB();

        $listUser = $connect->query("SELECT email FROM USERS");
        while($user = $listUser->fetch()){
          echo "<tr><td>".$user["email"]."</td></tr>";
        }

      ?>
    </table>
  </body>

</html>
