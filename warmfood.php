<!DOCTYPE html>

<!-- Start of HTML -->
<html lang="en">

<head>
    <title>Pinocone Food Menu</title>
    <meta charset="utf-8" />
    <meta name="author" content="Jason Kho" />
    <meta name="description" content="Warm Food Menu" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script src="slide.js"></script> 
    <script src="script.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Start of Body -->
<body>
<header>

<!-- Navigation Bar -->
    <?php include_once 'header.php'; ?>
</header>

<article>
    <div class="dropdown_article1">
        <a class="dropbtn_good">&#8615; &#160; &#160; &#160;Types of Goods&#160; &#160; &#160; &#8615;</a>
        <div class="dropdown-content_good">
        <a href="coldfood.html">Frozen Goods</a>
        <a href="warmfood.html">Warm Goods</a>
        </div>
    </div>

    <div class="dropdown_article2">
        <a class="dropbtn_time">&#8615; &#160; &#160; &#160;Order Received Time&#160; &#160; &#160; &#8615;</a>
        <div class="dropdown-content_time">
            <a>11.00am</a>
            <a>12.00pm</a>
            <a>13.00pm</a>
            <a>14.00pm</a>
            <a>15.00pm</a>
            <a>16.00pm</a>
            <a>17.00pm</a>
            <a>18.00pm</a>
            <a>19.00am</a>
            <a>20.00pm</a>
        </div>
    </div>
    <form action="cart.php" class="input_address">
        <label for="address" style="font-weight:bold">Deliver Address:</label>
        <textarea id="address" name="address" rows="1" cols="50" placeholder="Provide Delivery Address"></textarea>
    </form>
</article>
<footer>
    <?php include_once 'footer.php'; ?>
</footer>
</body>
</html>