<?php

  session_start();

  $ch = curl_init('https://webtopdf.expeditedaddons.com/?api_key=' . getenv('WEBTOPDF_API_KEY') . '&content=https://projet-cloud-arnaud-erwan.herokuapp.com/liste.php&html_width=1024&margin=10&title=ListeUser');

  $response = curl_exec($ch);
  curl_close($ch);

  var_dump($response);

  header('Location: https://projet-cloud-arnaud-erwan.herokuapp.com/liste.php');

?>
