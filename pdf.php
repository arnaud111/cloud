<?php

  require_once('vendor/autoload.php');
  echo"ok";
  use \PDFShift\PDFShift;
  echo"ok";
  PDFShift::setApiKey(getenv('PDFSHIFT_API_KEY'));
  echo"ok";

  $data = file_get_content('liste.php');
  echo"ok";
  PDFShift::convertTo($data, null, 'result.pdf');
  echo"ok";


  /*$ch = curl_init('https://webtopdf.expeditedaddons.com/?api_key=' . getenv('WEBTOPDF_API_KEY') . '&content=https://projet-cloud-arnaud-erwan.herokuapp.com/liste.php&html_width=1024&margin=10&title=ListeUser');

  $response = curl_exec($ch);
  curl_close($ch);

  var_dump($response);

  //header('Location:liste.php');
