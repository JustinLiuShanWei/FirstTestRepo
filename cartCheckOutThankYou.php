<?php
  session_start();
  unset($_SESSION['cart_item']);
?>

<script>
    function backToHome() {
        window.location='mainMenu.php';
    }
</script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" href="style/styleCartCheckoutThankYou.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>Thanks for your order purchase.  </p>
      <p>you should receive a confirmation email soon.  </p>
      <button onclick="backToHome()" class="go-home">go home</button>
    </div>
    <div class="footer-like">
      <p>Email not received?
       <a href="#">Click here to send again</a>
      </p>
    </div>
</div>
</div>

</body>
</html>
