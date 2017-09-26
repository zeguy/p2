<?php
require('logic.php');
?>

<div>
  <table>
    <tr>
      <th>Artist</th>
      <th>Print</th>
      <th>Variant</th>
      <th>Cost</th>
      <th>Condtion</th>
      <th>Notes</th>
      <th>Paypal</th>
      <th>Shopify</th>
      <th>Ebay</th>
    </tr>
      <?php foreach ($parsed as $print) : ?>
      <tr>
        <td><?=$print->artist?></td>
        <td><?=$print->printName?></td>
        <td><?=$print->variant?></td>
        <td><?=$print->cost?></td>
        <td><?=$print->condition?></td>
        <td><?=$print->notes?></td>
        <td><?=$print->paypal?></td>
        <td><?=$print->shopify?></td>
        <td><?=$print->ebay?></td>
      </tr>
      <?php endforeach; ?>
  </table>
</div>
