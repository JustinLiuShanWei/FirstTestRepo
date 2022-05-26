<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table class="table" style="overflow-y: scroll">
  <thead>
    <tr>
<th>Customer ID</th>
<th>Customer Name</th>
<th>Email</th>
<th>Username</th>
<th>Membership Status</th>
<th>Membership Expiry</th>
</tr></thead><tbody>
<?php
include ("db_connect.php");
$result=mysqli_query($conn,"SELECT * FROM userdatabase ORDER BY id ASC");
while ($orderArrays=mysqli_fetch_array($result)){
    $datas[] = $orderArrays;
}
$orderNo = 1;
foreach ($datas as $data){
    $custID = $data['id'];
    $custName = $data['name'];
    $custEmail = $data['email'];
    $username = $data['username'];
    
    $membershipStatus = $data['membership_status'];
    $membershipExpiry = $data['membership_expiry'];
    
    echo "<td>";
    echo $custID;
    echo "</td>";

    echo "<td>";
    echo $custName;
    echo "</td>";

    echo "<td>";
    echo $custEmail;
    echo "</td>";

    echo "<td>";
    echo $username;
    echo "</td>";

    echo "<td>";
    echo $membershipStatus;
    echo "</td>";

    echo "<td>";
    echo $membershipExpiry;
    echo "</td>";

    echo "</tr>";
}      
?>
</tbody>
</table>