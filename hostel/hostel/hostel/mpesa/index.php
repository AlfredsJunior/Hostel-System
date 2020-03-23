<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lipa Mt. Kenya Hostels na Mpesa </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../css/style.css">

	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
	<?php include('../includes/header.php');?>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">

				<form class="contact2-form validate-form" action="lipaOnline.php" method="post">
						<h1>Make a Payment</h1> 
					

					<div class="wrap-input2 validate-input" data-validate="Amount is required">
						<input class="input2" type="number" required="required" placeholder="Amount To Pay" name="amount">
					</div> <br>
					<div class="wrap-input2 validate-input" data-validate = "Valid phone number is required: 07XXXXXXXX">
						<input class="input2" type="tel" required="required" placeholder="My Phone Number" name="phone">
						
					</div> <br>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<input type="submit" class="contact2-form-btn" placeholder="Complete Payment" name="Complete Payment">
							
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
	<div class="foot">
		<footer>
			<p> Brought To You By <a href="https:#">Alfreds</p>
		</footer> 
	</div>

</body>
</html>
