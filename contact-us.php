<?php include_once "includes/header.php";
	include_once "includes/navbar.php";
?>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">
				You are using an <strong>outdated</strong> browser. Please
				<a href="http://browsehappy.com/">upgrade your browser</a> or
				<a href="http://www.google.com/chromeframe/?redirect=true"
					>activate Google Chrome Frame</a
				>
				to improve your experience.
			</p>
		<![endif]-->

		<!-- start side arrow  -->
		<div class="arrow">
			<button class="fas fa-chevron-up" onclick="btn_click()"></button>
		</div>
		<!-- End side arrow  -->
		
		<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h3>Address</h3>
						<!-- Contact Info -->
						<p class="contact-us-details">
							<b>Address:</b> Gujarat,India<br />
							<b>Phone:</b> +919598127003 | +917984312074 <br />
							<b>Phone:</b> +918264989698 | +919998931924 <br />
							<b>Email:</b>
							<a href="mailto:support@pantomathes.in"
								> support@pantomathes.in</a
							>
						</p>
						<!-- End Contact Info -->
					</div>
					<div class="col-sm-6">
						<!-- Contact Form -->
						<h3>Send Us a Message</h3>

						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="Name" class="col-sm-3 control-label"
									><b>Your name</b></label
								>
								<div class="col-sm-9">
									<input
										class="form-control"
										id="Name"
										type="text"
										placeholder=""
									/>
								</div>
							</div>
							<div class="form-group">
								<label
									for="contact-email"
									class="col-sm-3 control-label"
									><b>Your Email</b></label
								>
								<div class="col-sm-9">
									<input
										class="form-control"
										id="contact-email"
										type="text"
										placeholder=""
									/>
								</div>
							</div>

							<div class="form-group">
								<label
									for="contact-message"
									class="col-sm-3 control-label"
									><b>Message</b></label
								>
								<div class="col-sm-9">
									<textarea
										class="form-control"
										rows="5"
										id="contact-message"
									></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button
										type="submit"
										class="btn pull-right"
									>
										Send
									</button>
								</div>
							</div>
						</form>

						<!-- End Contact Info -->
					</div>
				</div>
			</div>
		</div>

		<?php include_once "includes/footer.php"; ?>

		<?php include_once "includes/scripts.php"; ?>
	</body>
