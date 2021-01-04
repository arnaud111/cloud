<?php
  $curl = curl_init();
  echo "ok";

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array(
        "source" => "list.php",
        "landscape" => false,
        "use_print" => false
    )),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => 'api:31ef6864d610413ca62695af726b197b'
  ));
  echo "ok";

  $response = curl_exec($curl);
  echo "ok";
  file_put_contents('test.pdf', $response);
  echo "ok";

  /*$ch = curl_init('https://webtopdf.expeditedaddons.com/?api_key=' . getenv('WEBTOPDF_API_KEY') . '&content=https://projet-cloud-arnaud-erwan.herokuapp.com/liste.php&html_width=1024&margin=10&title=ListeUser');

  $response = curl_exec($ch);
  curl_close($ch);

  var_dump($response);

  //header('Location:liste.php');
