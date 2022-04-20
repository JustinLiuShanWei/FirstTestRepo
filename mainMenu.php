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
    <?php include_once 'mainMenu-navbar.php'; ?>
    <p class="productNum"><?=$total_products?> Products Found</p>
    <div class="productContainer">
        <?php foreach ($products as $product): ?>
        <div class="card">
            <div>
                <img src="images/productImages/<?=$product['ItemImageLoc']?>" alt="<?=$product['foodTitle']?>" class="card-image">
            </div>
            <div class="card-body">
                <h2 class="card-title"><?=$product['ItemName']?></h2>
                <p class="card-text"><?=$product['ItemDesc']?></p>
                <h5>
                    <span class="price">RM<?=number_format($product['ItemPrice'],2)?></span>
                </h5>
                <button type="submit" name="addCart">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php include_once 'mainMenu-footer.php'; ?>
</body>
</html>