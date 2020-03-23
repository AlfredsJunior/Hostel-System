<!DOCTYPE html>
<html lang="en">
<head>

	<title>Lipa Mt. Kenya Hostels na Mpesa </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php include('header.php');?>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<?php include('sidebar.php');?>

		<div class="container-contact2">
			<div class="wrap-contact2">

				<form class="contact2-form validate-form" action="lipaOnline.php" method="post">

						<h1>Make a Payment</h1> 

					<div class="wrap-input2 validate-input" data-validate="Amount is required">
						<input class="input2" type="number" placeholder="AMOUNT" name="amount">
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid phone number is required: 07XXXXXXXX">
						<input class="input2" type="tel" placeholder="Phone Number" name="phone" required="required">
						<span class="focus-input2" data-placeholder="MPESA PHONE NUMBER TO MAKE PAYMENT"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Complete Payment
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
