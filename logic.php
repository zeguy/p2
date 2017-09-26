<?php
require('helpers.php');
require('prints.php');

$filePath = "data.json";
$import = file_get_contents($filePath);
$parsed = json_decode($import);

if($_POST){
  $_POST = sanitize($_POST);
  $print = new prints($_POST["artist"],$_POST["printName"], $_POST["cost"],
  $_POST["condition"], $_POST["notes"]);

  array_push($parsed, $print); 
  $jsonPrints = json_encode($parsed);
  file_put_contents($filePath, $jsonPrints);
}
