<?php
require('form.php');
require('prints.php');
require('helpers.php');

use DWA\Form;
use P2\Prints;

$filePath = 'data.json';
$import = file_get_contents($filePath);
$parsed = json_decode($import);

if($_POST)
$_POST = sanitize($_POST);
$form = new Form($_POST);
$artist = $form->get('artist',"");
$printName = $form->get('printName',"");
$cost = $form->get('cost',"");
$condition = $form->get('condition',"");

if ($form->isSubmitted()){
  $errors = $form->validate([
          'artist' => 'required',
          'printName' => 'required',
          'cost' => 'required|numeric',
      ]
    );

  if (empty($errors)){
    $print = new Prints($artist,$printName,$cost,$condition);
    array_push($parsed, $print);
    $jsonPrints = json_encode($parsed);
    file_put_contents($filePath, $jsonPrints);
  }
}



