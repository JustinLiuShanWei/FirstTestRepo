<?php
    session_start();
    include ("db_connect.php");
    include_once 'verify-Function.php';
    $query = "select * from product_database";
    $products = mysqli_query($conn,$query);
    $total_products = mysqli_num_rows($products);

    $membershipCheck = checkMembership($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styleMainMenu.css">
</head>
<body>
    <?php include_once 'mainMenu-navbar.php'; ?>
    <p class="productNum"><?=$total_products?> Products Found</p>
    <div class="productContainer">
        <?php foreach ($products as $product): ?>
            <form method="POST" action="cartMainPage.php?action=add&pid=<?php echo $product["ItemID"]; ?>">
                <div class="card">
                    <div>
                        <img src="images/productImages/<?=$product['ItemImageLoc']?>" alt="<?=$product['foodTitle']?>" class="card-image">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title"><?=$product['ItemName']?></h2>
                        <p class="card-text"><?=$product['ItemDesc']?></p>
                        <h5>
                            <?php 
                                if ($membershipCheck==TRUE){ ?>
                                    <span style="text-decoration:line-through;" class="price">RM<?=number_format($product['ItemPrice'],2)?></span>
                                    <span class="price">RM<?=number_format($product['ItemPriceDis'],2)?></span>
                                <?php } 
                                else{   ?>
                                    <span class="price">RM<?=number_format($product['ItemPrice'],2)?></span>
                                <?php }
                            ?>
                            
                        </h5>
                        <button type="submit" name="addCart" class="cart">Add to Cart <i class="btnAddAction"></i></button>
                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    <?php include_once 'mainMenu-footer.php'; ?>
</body>
</html>