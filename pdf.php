<?php
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array(
        "source" => "https://en.wikipedia.org/wiki/PDF",
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

<?php
