    <main>
        <div class="section-default">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }
                else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">User is already taken!</p>';
                }
                else if ($_GET["signup"] == "success") {
                    echo '<p class="signupsuccess">Signup successful!</p>';
               }
            }
            

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Employee sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="includes/signup.inc.php" method="post">
					<span class="login100-form-title p-b-70">
						Employee Sign Up
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="mail">
						<span class="focus-input100" data-placeholder="Email.."></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-50" data-validate = "Enter username">
						<input class="input100" type="text" name="uid">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pwd">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pwd-repeat">
						<span class="focus-input100" data-placeholder="Re-enter Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signup-submit">
							Sign up
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								No email verification required
							</span>
                    <?php /* <li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>
                            */ ?>

						<li>
							<span class="txt1">
								Have an account?
							</span>

							<a href="index.php" class="txt2">
								Log In
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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

