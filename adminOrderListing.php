<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table class="table" style="overflow-y: scroll">
  <thead>
    <tr>
<th>Order ID</th>
<th>Customer Name</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Order Status</th>
</tr></thead><tbody>
<?php
include ("db_connect.php");
$result=mysqli_query($conn,"SELECT * FROM order_database ORDER BY order_id ASC");
while ($orderArrays=mysqli_fetch_array($result)){
    $datas[] = $orderArrays;
}
$orderNo = 1;
foreach ($datas as $data){
    $orderID = $data['order_id'];
    $userID = $data['user_id'];
    $itemID = $data['item_id'];
    $itemQuantity = $data['item_quantity'];
    
    $orderStatus = $data['order_status'];

    $result1=mysqli_query($conn,"SELECT username FROM userdatabase WHERE id =$userID" );
    $userName=mysqli_fetch_assoc($result1)['username'];

    $result2=mysqli_query($conn,"SELECT ItemName FROM product_database WHERE ItemID =$itemID" );
    $itemName=mysqli_fetch_assoc($result2)['ItemName'];
    
    echo "<td>";
    echo $orderID;
    echo "</td>";

    echo "<td>";
    echo $userName;
    echo "</td>";

    echo "<td>";
    echo $itemName;
    echo "</td>";

    echo "<td>";
    echo $itemQuantity;
    echo "</td>";

    echo "<td>";
    $total_price = $data["item_price"];
    echo "RM ".number_format($total_price, 2);
    echo "</td>";

    echo "<td>";
    echo $data["order_status"];
    echo "</td>";

    echo "</tr>";
    $orderNo += 1;
}      
?>
</tbody>
</table>