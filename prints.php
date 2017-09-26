<?php

class prints {

	function __construct($artist, $printName, $cost, $condition, $notes) {
    $this->artist = $artist;
    $this->printName = $printName;
    $this->cost = $cost;
    $this->condition = $condition;
    $this->notes = $notes;

    if (isset($_POST["variant"])) {
      $this->variant = "yes";
    } else {
      $this->variant = "no";
    }
	}
}
