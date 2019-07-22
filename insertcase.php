<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Case Details - JDBMS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="insertcase1.php" method="POST">
					<span class="login100-form-title">
                        <?php
   if(isset($_SESSION['id'])){
        echo "Logged in Id : ".$_SESSION['id'];
                echo "<br>";
            }
?>
						Enter Case Details
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="caseid" placeholder="Case Id">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="judgeid" placeholder="Judge Id">
						<span class="focus-input100"></span>
					</div>
                <br>
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        &nbsp; &nbsp; &nbsp; &nbsp; Filing Date
						<input class="input100" type="date" name="filing_date">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        &nbsp; &nbsp; &nbsp; &nbsp; Next Date
						<input class="input100" type="date" name="next_date">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="chargeid" placeholder="Charge Id">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="courtid" placeholder="Court Id">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="status" placeholder="Status">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="plaintiff" placeholder="Plaintiff's Name">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        &nbsp; &nbsp; &nbsp; &nbsp; 
                        Plaintiff's DOB:
						<input class="input100" type="date" name="plaintiff_dob">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="prosecutorid" placeholder="Prosecutor Id">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="accused" placeholder="Accused's Name">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        &nbsp; &nbsp; &nbsp; &nbsp; Accused's DOB:
						<input class="input100" type="date" name="accused_dob">
						<span class="focus-input100"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="defenceid" placeholder="Defence Id">
						<span class="focus-input100"></span>
					</div>
                    <br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Submit
						</button>
					</div>
                    

					<div>
						<br>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>