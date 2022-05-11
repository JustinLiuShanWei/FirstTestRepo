<!DOCTYPE html>

<!-- Start of HTML -->
<html lang="en">

<head>
    <title>Confirmation</title>
    <meta charset="utf-8" />
    <meta name="author" content="Jason Kho" />
    <meta name="description" content="About" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="confirm.js"></script>
</head>

<!-- Start of Body -->
<body>


<?php
	$time = $_POST['time'];
?>
<br/>
<h1 class="confirm_title">Order Confirmation</h1>

<form id = "bookform" method = "post" action = "button_process.php">
	<input type = "hidden" name = "time" value = "<?php echo $time; ?>"/>
		<fieldset class="confirm">
			<legend>User Details</legend>
			<p>Delivery Time: <?php echo $time; ?></p>
			
			<input type = "submit" value = "Confirm Booking"/>
		</fieldset>
</form>


</body>
</html>