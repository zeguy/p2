<?php
require('helpers.php');
require('prints.php');

if($_GET){
  $_GET = sanitize($_GET);
  $print = new prints($_GET["artist"],$_GET["printName"], $_GET["cost"],
  $_GET["condition"], $_GET["notes"]);
}
