<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");
  
  $data = [
    "hello" => "world"
  ];

  echo(json_encode($data));
?>
