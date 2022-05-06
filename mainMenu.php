<?php
    include ("db_connect.php");
    $query = "select * from product_database";
    $products = mysqli_query($conn,$query);
    $total_products = mysqli_num_rows($products);
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
<p class="productNum"><?=$total_products?> Products Found</p>
    <div id="product-grid">
        
        <?php include_once 'mainMenu-navbar.php'; ?>
        <div class="productContainer">
            <?php foreach ($products as $product): ?>
                <form method="post" action="cart.php?action=add&pid=<?php echo $product["ItemID"]; ?>">
                <div class="card">
                    <div>
                        <img src="images/productImages/<?=$product['ItemImageLoc']?>" alt="<?=$product['foodTitle']?>" class="card-image">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $product['ItemName']; ?></h2>
                        <p class="card-text"><?=$product['ItemDesc']?></p>
                        <h5>
                            <span class="price">RM<?php echo number_format($product['ItemPrice'],2)?></span>
                        </h5>
                        <button type="submit" name="addCart" class="cart">Add to Cart <i class="btnAddAction"></i></button>
                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                    </div>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    <?php include_once 'mainMenu-footer.php'; ?>
    </div> 

</body>
</html>