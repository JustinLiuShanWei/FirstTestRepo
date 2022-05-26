<?php 
    $loginst = 0;
    include ("db_connect.php");
    include ("login-functions.php");

    $loginst = check_login($conn);
?>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginRight = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginRight = "0";
    }
    function logout() {
        $("#contents").load("logout.php");
    }
</script>
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
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="mainMenu.php">Main Menu</a>
            <a href="customerProfile.php">Profile</a>
            <a href="membershipMainPage.php">Membership</a>
            <a href="purchaseListingMainPage.php">My Purchases</a>
            <a id="logout" href="logout.php" onclick="logout()">Logout</a>
        </div>
        <a class="cta" onclick="openNav()" href="#"><button>Menu</button></a>
        <?php } else { ?>
        <a class="cta" href="login.php"><button>Login</button></a>
        <?php } ?>
    </header>
</body>
</html>