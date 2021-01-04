<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8"/>
    <title>Liste Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(array(
            "source" => "https://myasso.herokuapp.com/liste.php",
            "landscape" => false,
            "use_print" => false
        )),
        CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
        CURLOPT_USERPWD => 'api:31ef6864d610413ca62695af726b197b'
      ));

      $response = curl_exec($curl);
      file_put_contents('users.pdf', $response);
    ?>

      <a href="users.pdf" download>Download PDF</a><br>
      <a href="liste.php">Retour</a>

  </body>

</html>
