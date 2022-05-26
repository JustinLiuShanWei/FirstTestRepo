<?php
session_start();
include ("db_connect.php");
//code for adding product in cart
if(!empty($_SESSION['user_id'])){
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            //code for adding product in cart
            case "add":
                if(!empty($_POST["quantity"])) {
                    $pid=$_GET["pid"];
                    $result=mysqli_query($conn,"SELECT * FROM product_database WHERE ItemID='$pid'");
                        while($productByCode=mysqli_fetch_array($result)){
                    $itemArray = array($productByCode["ItemID"]=>array('name'=>$productByCode["ItemName"], 'code'=>$productByCode["ItemID"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["ItemPrice"], 'image'=>$productByCode["ItemImageLoc"]));
                    if(!empty($_SESSION["cart_item"])) {
                    // searches for specific value code
                        if(in_array($productByCode["ItemID"],array_keys($_SESSION["cart_item"]))) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                if($productByCode["ItemID"] == $k) {
                                    if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                        $_SESSION["cart_item"][$k]["quantity"] = 0;
                                    }
                                    $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                }
                            }
                        } else {
                        //The array_merge() function merges one or more arrays into one array.
                            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                        }
                    } else {
                        $_SESSION["cart_item"] = $itemArray;
                    }
                }
            }
            break;

            // code for removing product from cart
            case "remove":
                if(!empty($_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                        if($_GET["code"] == $k)
                            unset($_SESSION["cart_item"][$k]);				
                        if(empty($_SESSION["cart_item"]))
                            unset($_SESSION["cart_item"]);
                    }
                }
            break;
            // code for if cart is empty
            case "empty":
                if(!empty($_SESSION["cart_item"])){
                    unset($_SESSION["cart_item"]);
                }
            break;   
        }
    }
}
else {
    echo "<script> alert('Please Login to Add Your Food.');</script>";
    echo "<script> window.location='login.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link href="style/styleCartMainPage.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <?php include_once 'mainMenu-navbar.php'; ?>
    <!-- Cart ---->
    <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>
    <a id="btnEmpty" href="cartMainPage.php?action=empty">Empty Cart</a>
    <a id="btnEmpty" href="mainMenu.php">Main Menu</a>
    <?php
    if(isset($_SESSION["cart_item"])){
        $total_quantity = 0;
        $total_price = 0;
    ?>	
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
    <tbody>
    <tr>
    <th style="text-align:left;">Product Name</th>
    <th style="text-align:left;">Item ID</th>
    <th style="text-align:right;" width="5%">Quantity</th>
    <th style="text-align:right;" width="10%">Unit Price</th>
    <th style="text-align:right;" width="10%">Price</th>
    <th style="text-align:center;" width="5%">Remove</th>
    </tr>	
    <?php		
        foreach ($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"]*$item["price"];
            ?>
                <tr>
                <td><img src="images/productImages/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                <td><?php echo $item["code"]; ?></td>
                <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                <td  style="text-align:right;"><?php echo "RM ".$item["price"]; ?></td>
                <td  style="text-align:right;"><?php echo "RM ". number_format($item_price,2);?></td>
                <td style="text-align:center;"><a href="cartMainPage.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
                </tr>
                <?php
                $total_quantity += $item["quantity"];
                $total_price += ($item["price"]*$item["quantity"]);
            }
            ?>

    <tr>
    <td colspan="2" align="right">Total:</td>
    <td align="right"><?php echo $total_quantity; ?></td>
    <td align="right" colspan="2"><strong><?php echo "RM ".number_format($total_price, 2); $_SESSION["totalPrice"]=$total_price ?></strong></td>
    <td></td>
    </tr>
    </tbody>
    </table>		
        <?php
    } else {
    ?>
    <div class="no-records">Your Cart is Empty</div>
    <?php 
    } if(!empty($_SESSION['cart_item'])){
    ?>
    <form class="submitForm" name="Enquiry Form" id="enquiry" action="cartCheckout.php" method="post" novalidate="novalidate">
        <input class="submit" type="submit" value="Checkout" />
    </form>
    <?php }?>
    </div>
    
    <?php include_once 'mainMenu-footer.php'; ?>
</body>
</html>