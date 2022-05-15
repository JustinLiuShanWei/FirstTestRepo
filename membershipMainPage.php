<?php
    session_start();
    include ("db_connect.php");
    include_once 'verify-Function.php';
    $membershipCheck = checkMembership($conn);
    $Expiry = checkMembershipExpiry($conn);
    $finalCheckDate = finalCheckDate($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/styleMembership.css?v1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

    
<body>
    <?php include_once 'mainMenu-navbar.php'; ?>
    <div class="membershipContainer">
        <h1>Membership</h1>
        <p>Get more Offer by Opt-In Our Membership</p>
        <div class="membershipStatus">
            <table id="membershipTable">
                <tr>
                    <th>Membership Status</th>
                    <th>Membership Expiry Date</th>
                </tr>
                <tr>
                    <?php if ($membershipCheck==TRUE){?>        <!--  If got membership -->
                    <td>Acitve</td>     
                    <td><?php echo $finalCheckDate?></td>
                    <?php } else { ?>                           <!-- If no membership -->
                    <td>Inactive</td>
                        <?php  if ($Expiry==TRUE) {;?>
                            <td> <a class="renew" href="#">Expired Renew</a></td>
                        <?php } else {?>
                            <<td>Not Joined Before!</td>  
                    <?php }} ?>
                </tr>
            </table>
        </div>
        </br>
        <div class="w3-card-4">
            <div class="w3-container top">
              <h1>Membership</h1>
              <h3>RM 50 Per Month</h3>
            </div>
            <div class="w3-container2">
                <h4>Included Benefits</h4>
                <ul>
                    <li><span>&#10003;</span> Get Discount Up to 50%</li>
                    <li><span>&#10003;</span> Exclusive Season Discount</li>
                    <li><span>&#10003;</span> Get Additional Support</li>
                </ul>
            </div>
            <?php if ($membershipCheck!=TRUE && $Expiry!=TRUE){?>
            <div class="w3-container3">
              <button href="#">Join Now</button>
            </div>
            <?php } else {?>
                <div class="w3-container3">
                    <button>Joined</button>
                </div>
            <?php }?>
        </div>
        </br>
    </div>
    <?php include_once 'mainMenu-footer.php'; ?>
</body>
</html>
</HTML>