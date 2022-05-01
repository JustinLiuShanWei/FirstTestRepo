<?php 
    session_start();
    include ("db_connect.php");
    include ("login-functions.php");

    $loginst = check_login($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/styleMainMenu-Navbar.css">
</head>
<body>
    <header>
        <img class="logo" src="images/Logo.png" alt="logo">
        <?php if ($loginst == "1"){?>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Cart</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Menu</button></a>
        <?php } else { ?>
        <a class="cta" href="login.php"><button>Login</button></a>
        <?php } ?>
    </header>
</body>
</html>