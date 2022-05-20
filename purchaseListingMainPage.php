<?php
    session_start();
    include ("db_connect.php");
    $user=$_SESSION['user_id'];
    $result=mysqli_query($conn,"SELECT * FROM order_database WHERE user_id='$user' GROUP BY item_no DESC");
    $previousID = -1;
    if($result && mysqli_num_rows($result)>0){
        while($orderArray=mysqli_fetch_array($result)){
            $datas[] = $orderArray;
        }
        $test = sizeof($datas);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Order Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/stylePurchaseMainPage.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/styleOrderListing.css?v2">
</head>
<body>
    <?php include_once 'mainMenu-navbar.php'; ?>
    
    <div class="orderPageContent">
        <div id="All" class="viewOrder">
            <?php
                $total = 0;
                $priceArray = [];
                $index = 0;
                $previousID = -1;
                if(!empty($datas)){
                    foreach($datas as $data){
                        $orderId = $data["order_id"];
                        $itemStatus = $data["order_status"];
                        if ($index < sizeof($datas)-1){
                            if ($datas[$index+1]["order_id"]==$orderId){
                                $pause=true;
                            }
                            else $pause = false;
                        }
                        if ($previousID!=$orderId){
                        ?>
                        <div class="context-section">
                            <div class="orderContainer">
                                <div class="individualOrderList">
                                    <div class="orderDetail-section">
                                        <div class="orderDetail">
                                            <a>Order ID: <span>#<?php echo $orderId?></span></a>
                                        </div>
                                        <div class="orderStatus">
                                            <a>Status: <span><?php echo $itemStatus?></span></a>
                                        </div>
                                    </div>
                                </div>
                        <?php 
                        }   
                            $itemID = $data["item_id"];
                            $q = mysqli_query($conn,"SELECT * FROM product_database WHERE ItemID='$itemID'");
                            $item = mysqli_fetch_assoc($q);
                            $itemQuantity = $data["item_quantity"];
                            $itemPrice = $data["item_price"];
                            array_push($priceArray,$itemPrice);
                        ?>
                            <div class="product-section">
                                <div class="product-detail">
                                    <div class="product-pic">
                                        <img src=<?php $object = $item['ItemImageLoc'];echo "images/productImages/$object";?> alt="PRODUCT" class="card-image" style="width:80px; height:80px; object-fit:cover;">
                                    </div>
                                    <div class="product-desc" >
                                        <span><?php echo $item["ItemName"]?></span><br>
                                        <span>Quantity: <?php echo $itemQuantity?></span>
                                    </div>
                                    <div class="product-price">
                                            <span><?php echo "RM ". number_format($itemPrice,2);?></span>
                                    </div>
                        <?php if ($pause!=true){ 
                            foreach ($priceArray as $price) $total += $price;   
                            $priceArray = []    
                        ?>
                            </div>
                            </div>
                            <div class="total-section">
                                <div class="total-section-alignment">
                                    <span>Order Total: </span>
                                    <span class="total"> <?php echo "RM ". number_format($total,2);?></span>
                                </div>
                            </div>
                        <?php 
                            }
                            $index += 1;
                            $previousID=$orderId;
                            
                        ?>
                        </div>
                                
                        </div>    
                    <?php 
                    }
                }
                else{
                    echo "<div class='no-records'>Your Cart is Empty</div><style>text-align=center;</style>";
                }
                ?>
            </div>
        </div>
    </div>
    <?php include_once 'mainMenu-footer.php'; ?>
</body>
</html>