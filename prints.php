<?php

namespace P2;

class Prints {

	function __construct($artist, $printName, $cost, $condition) {
    $this->artist = $artist;
    $this->printName = $printName;
    $this->cost = $cost;
    $this->condition = $condition;
		$this->paypal = $cost + ($cost * 0.029) + 0.300 + 25;
    $this->shopify = $cost + ($cost * 0.029) + 0.300 + 25 + ($cost * 0.020);
		$this->ebay = $cost + ($cost * 0.029) + 0.300 + 25 + ($cost * 0.100);

    if (isset($_POST["variant"])) {
      $this->variant = "yes";
    } else {
      $this->variant = "no";
    }
  }
}