<?php
require('helpers.php');

if($_GET){
  $_GET = sanitize($_GET);
  function breakeven(){
    $cost = $_GET["cost"];
    $fees = $_GET["fees"];
    $paypal = $cost*0.029 + 0.3;
    $eBay = $cost*1.1 + $paypal;
    $shopify = $cost*1.02 + $paypal;

    if ($fees=="eBay"){
      $breakeven = $eBay;
    } elseif ($fees=="paypal") {
      $breakeven = $cost + $paypal;
    } elseif ($fees=="shopify") {
      $breakeven = $shopify;
    }

    if (isset($_GET["shipping"])){
      $breakeven+=25;
    }

    return ceil($breakeven);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>P2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/p2.css">
  </head>
  <body>
    <div>
      <form autocomplete="off" method='GET' name="p2Form">
        <fieldset name="Breakeven">
          <legend><b>Breakeven</b></legend>
          <label for="cost">Cost: </label>
          <input type="number" placeholder="required" name="cost" id="cost"
          required="required" pattern=".{1,}" min="0" step="0.01"
          value="<?sanitize($keyword)?>"><br><br>
          <label for="shipping">Free Shipping:</label>
          <input type="checkbox" name="shipping" id="shipping"><br><br>
          <label for="fees">Fees:</label>
          <select name="fees" id="fees">
            <option value="eBay">eBay</option>
            <option value="paypal">Paypal</option>
            <option value="shopify">Shopify</option>
          </select><br><br>
          <button type="submit" name="submit" value="Submit">Submit</button>
        </fieldset>
      </form>
    </div><br>
    <div>
    <?php if(isset($_GET['submit'])) : ?>
      Breakeven is approximately:
      <span id="amount">$<?=breakeven()?></span>
    <?php endif; ?>
  </div>
  </body>
</html>
