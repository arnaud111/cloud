<?php
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v3/convert/pdf",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array(
        "source" => "liste.php",
        "landscape" => false,
        "use_print" => false
    )),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => 'api:31ef6864d610413ca62695af726b197b'
  ));

  $response = curl_exec($curl);
  file_put_contents('users.pdf', $response);
?>

  <a href="users.pdf">download pdf</a>

<?php
  $ch = curl_init('https://webtopdf.expeditedaddons.com/?api_key=' . getenv('WEBTOPDF_API_KEY') . '&content=https://myasso.herokuapp.com/liste.php&html_width=1024&margin=10&title=ListeUser');

  $test = curl_exec($ch);
  curl_close($ch);

  file_put_contents('test.pdf', $test);

  //header('Location:liste.php');
  ?>

  <a href="test.pdf"> / download pdf</a>
