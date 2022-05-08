<!DOCTYPE html>
<html lang="en">

<head>
	<title>Feedback Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<?php include_once 'feedBack-navbar.php'; ?>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="heading">
				<h2>Customer Feedback Form</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10">
					<div class="row no-gutters">
						<div class="col-md-6">
							<div class="contact-wrap">

								<form method="post" id="contactForm" action="feedbackProcess.php" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" id="name" placeholder="Order ID" required="required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
											</div>
										</div>
										<div class="col-md-12"> 
											<div class="form-group">
												<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="name" id="name" placeholder="Phone Number" required="required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="message" class="feedback-text form-control" id="message" cols="30" rows="6" placeholder="Feedbacks/Comments" required="required"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="button">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="info-wrap p-md-5">
								<h3>Contact US</h3>
								<p class="mb-4">We're open for any suggestion or just to have a chat</p>
								<div class="dbox">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="pl-3">
										<p><span>Address:</span> 93350 Kuching, Sarawak, Malaysia.</p>
									</div>
								</div>

								<div class="dbox">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="pl-3">
										<p><span>Phone:</span> <a href="tel:+6085 320 011">+6085 320 011</a></p>
									</div>
								</div>

								<div class="dbox">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="pl-3">
										<p><span>Email:</span> <a href="mailto:101233218@students.swinburne.edu.my">101233218@students.swinburne.edu.my</a></p>
									</div>
								</div>

								<div class="dbox">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="pl-3">
										<p><span>Website:</span> <a href="index.php">index.php</a></p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</section>

<footer>
	<?php include_once 'feedBack-footer.php'; ?>
</footer>
</body>
</html>