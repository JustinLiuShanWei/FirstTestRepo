<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table class="table">
  <thead>
    <tr>
<th>ID</th>
<th>Item Name</th>
<th>Price</th>
<th>Discount</th>
<th>Quantity</th>
<th colspan=2 sytle="align=center">ACTION</th>
</tr></thead><tbody>
<?php
include ("db_connect.php");

$qry="select * from product_database";
$recset=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($recset))
{
      echo "<td>";
      echo $row["ItemID"];
      echo "</td>";

      echo "<td>";
      echo $row["ItemName"];
      echo "</td>";

      echo "<td>";
      echo $row["ItemPrice"];
      echo "</td>";

      echo "<td>";
      echo $row["ItemPriceDis"];
      echo "</td>";

      echo "<td>";
      echo $row["ItemQuantity"];
      echo "</td>";

      echo "<td>";
      $ItemID=$row["ItemID"];
      echo "<a href='adminItemDelete.php?key=$ItemID'>DELETE</>";
      echo "</td>";

      echo "<TD><a href='adminModify.php?key=$ItemID'>MODIFY</>";
      echo "</td></tr>";
}      
?>
</tbody>
</table>