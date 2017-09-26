<?php
require('logic.php');
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
      <form method='POST' name="p2Form" action="results.php">
        <fieldset name="Breakeven">

          <legend><b>Breakeven</b></legend>

          <label for="artist">Artist:</label>
          <input type="text" name="artist" id="artist" required="required"
          placeholder="required">

          <label for="printName">Print:</label>
          <input type="text" name="printName" id="printName" required="required"
          placeholder="required">

          <label for="variant">Variant:</label>
          <input type="checkbox" name="variant" id="variant">

          <label for="cost">Cost:</label>
          <input type="number" name="cost" id="cost" required="required"
          placeholder="required" pattern=".{1,}" min="0" step="0.01"
          value="<?sanitize($keyword)?>">

          <label for="condition">Condition:</label>
          <select name="condition" id="condition">
            <option value="very good">Very Good</option>
            <option value="good">Good</option>
            <option value="fair">Fair</option>
            <option value="poor">Poor</option>
          </select>

          <label for="notes">Notes:</label>
          <input type="text" name="notes" id="notes">

          <button type="submit" name="submit" value="Submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
