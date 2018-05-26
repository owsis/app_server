<?php
$INSTANCE_ID = '12';  // TODO: Replace it with your gateway instance ID here
$CLIENT_ID = "saphiretombakintan@gmail.com";  // TODO: Replace it with your Forever Green client ID here
$CLIENT_SECRET = "1ebf48df334a4bb4bebd3885aa3aaa45";   // TODO: Replace it with your Forever Green client secret here
$postData = array(
  'number' => '6287871741415',  // TODO: Specify the recipient's number here. NOT the gateway number
  'message' => 'test'
);
$headers = array(
  'Content-Type: application/json',
  'X-WM-CLIENT-ID: '.$CLIENT_ID,
  'X-WM-CLIENT-SECRET: '.$CLIENT_SECRET
);
$url = 'http://api.whatsmate.net/v3/whatsapp/single/text/message/' . $INSTANCE_ID;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
$response = curl_exec($ch);
echo "Response: ".$response;
curl_close($ch);
?>