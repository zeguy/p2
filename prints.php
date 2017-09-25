<?php

class prints {

	# [...properties redacted...]

	/**
	*
	*/
	function __construct($artist, $printName, $cost, $condition, $notes) {
    $this->artist = $artist;
    $this->printName = $printName;
    $this->cost = $cost;
    $this->condition = $condition;
    $this->notes = $notes;

    if (isset($_GET["variant"])){
      $this->variant = "yes";
    } else {
      $this->variant = "no";
    }
	}

  function paypal() {
    return $this->cost * 1.02 + 0.3;
  }

  function eBay() {
    return $this->paypal() + $this->cost*0.1;
  }

  function shopify() {
    return $this->paypal() + $this->cost*0.02;
  }
}
