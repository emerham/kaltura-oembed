<?php

header("Access-Control-Allow-Origin: *");
if (isset($_GET['url'])) {
  $url = $_GET['url'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  header('Content-Type: application/json');
  echo $output;
}
else {
  echo json_encode(['error' => 'No URL specified.']);
}
