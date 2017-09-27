<?php
require('Form.php');
require('Prints.php');
require('helpers.php');

use DWA\form;
use P2\prints;

$filePath = 'data.json';
$import = file_get_contents($filePath);
$parsed = json_decode($import);

$form = new Form($_POST);
$artist = $form->get('artist',"");
$printName = $form->get('printName',"");
$cost = $form->get('cost',"");
$condition = $form->get('condition',"");

if ($form->isSubmitted()){
  $errors = $form->validate([
          'artist' => 'required',
          'printName' => 'required',
          'cost' => 'required',
      ]
    );

  if (empty($errors)){
    $print = new Prints($artist,$printName,$cost,$condition);
    array_push($parsed, $print);
    $jsonPrints = json_encode($parsed);
    file_put_contents($filePath, $jsonPrints);
  }
}



