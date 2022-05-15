<?php 
    session_start();
    include ("db_connect.php");
    $id = $_SESSION['user_id'];
    $query = "select * from userdatabase where id=$id";
    $result = mysqli_query($conn,$query);
    $user_data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styleCustProfile.css">  
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=0txT2NKVrqWmLwbd87bfI08Dwc6vlob08aZuGx2mK1lhvzVInkgNXNVBvrOriIpujU8HWMHKodgJ-Uv8ONaQY2QYIO_4YG1mSgt-_1bfvnlxTkL8cI7EYo2g9UE6UIy9ljO0nOoe7Cld7hSFzpAnYuyC4rYout6FxXHNheqTDIa9efoT1DXTIJmfrkS4SFqdc6w2f3dOt0_9dQqsvIPlSKM2ArsrH25GEYAoBGq5RIUNn8dwnjyTQiFTJA2ABhZtP0UFDolLOQScS5tvkBDm3X_3FigwBq417tKw6lH8Wg_HTA3b-1afc-uVGCYSd8HzKWwnlHe-kp7O6JZyIeOJoyhjstgwX58hxRsYppkzyGdkvrFRSBFB6r5VKjoP86AlTU91zVAm-Sskd9ZiEPbg9VIgUcNtp6xQG-K1cyauY9XSW0B6mO0XAhOIlPgPW6oSOzkYwl2RPiIOQ5kVw-nZxBYcvOVBVk115Zkb7q1J8hT4O6aqAGsdXBqDYzoc-qFQDtDGEZARPpHoYuYmldhstQGo7acme0AzNi7oUunQ_zWA8WNIs6DMJiVV2IbaQh9zGNL73LxJLH2ujVYu8ODi6AEZEM6s7sHabLGPGoQUqNwgkWtaNvc9Drrly0LiwtBjXjQWvjTsgvi0IQsxPQPHXr4doIhH10AjrA-fjcoxDl6SQkN2BtRHwzycN0wI8A9LTdut3yZyeEsCrlublkNpVwC81uMLX1EIAlSiBselfwqEP49TcfNwTdBR4AU74gC8p2ZLjYXcZKn372iAbGqOOXKqQSsTTh5iecsqQwI7HmY_Jw8Ao2tV2ve5aeSkisvd-77FBKdGwEXzd-bQfx1_9w_3r54HptImiYmwQFOENhq1f3O43zXyiaK_rR3d4iNkTe-2jeMmieFwOda5TyXw1QweBeg9veW7LjI-u3G3bWgob1DWrUTYA-q3VVzzxU5cLP4MwSIa5X48CWsONcHxeHOPcM7iZQmtG-LrCekNaFPpNKQD29tCwNS6MS0cfh1ddPnBDpbWrRY-6jIPA9RnUntFhfaoIeQZOShcJzP80I0KhHkS_yJ5JkhNZNo5RIgPGiYutAQEendTy72GKtX2SgYNyETSHsyNBywI3Wq-Ip911d6sb3RM-MEBOAWZfWh4DghEE-uAEZjg0cHAi95rD-5hgUB0HZJARdatGkHO8neRUCug13EjcOHJbW7JnWpY-f-tDk0wcFKof2_Pv5AZd9rWGvgOWXPvTWbYa1fr0Tvaq663OG1FQrQilBWJstfukkveembDT9rAStUA7Mgm76iNIdXcpQd2MLuAxvGCrHwi0n-UVY6jxEs6zkMEdgqwjHIxslBFWZ15_-BSAnBtukbW474Kq5RyROFmKaNT8vFv9ywYewGpzcFeH3Xrq1UytU_dkpKJ3Tph5GFnWzWPAl6bPTd4cPtw5KR7lsM7eo3OwoZr9KqDSqR_mo1wt_EpKx1NlrqcCK1Pesa4Re-di467tpWURrZVyyprjGfWAc9zIX3s7_Wxjx_Y14LkuOgS" charset="UTF-8"></script></head>
<body>
    <?php include_once 'mainMenu-navbar.php'; ?>
    <div class="Profile">
        <div class="container">
            <div class="title">Your Profile</div>
            <div class="content">
            <form action="#">
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="<?php echo $user_data["name"] ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="<?php echo $user_data["username"] ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="<?php echo $user_data["email"] ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="<?php echo $user_data["phone"] ?>" readonly>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="**********" readonly>
                </div>
                </div>
                    <button class="button" onclick="openForm()">Edit Password</button>
                <div class="container2" id="myForm">

                <div class="input-box">
                    <span class="details">New Password</span>
                    <input type="password" placeholder="New Password" required>
                </div>
                        <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm Password" required>
                </div>

                        <input type="submit" value="Confirm">
                        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
