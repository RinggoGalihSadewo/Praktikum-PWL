<?php  

session_start();
require './fb-init.php';

if (isset($_POST["submit"])){

	if ( $_POST["username"] == "admin" && $_POST["password"] == "admin") {
			
			header("Location: home.php");
			exit;

		}	

	else {

		$error=true;

	}
}
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/style-index.css">

</head>
<body style="background-image: url(img/bg1.jpg); background-size: cover;background-repeat: no-repeat;">

	<div class="container">

		<h2>Login</h2>

		<?php if (isset($error)) :?>
			<p style="color: red;font-family:sans-serif; text-align: center;">Username / Password salah !</p>
		<?php endif; ?>

		<div class="form">

			<form action="" method="post">

				<div class="userandpw">

				<input type="text" name="username" placeholder="Masukan nama">

				<br>
				<br>

				<input type="password" name="password" placeholder="Masukan password">

				<br>
				<br>

				<button type="Submit" name="submit" class="button">Login</button>

				</div>

			</form>
			
			<br>

			<div class="login-fb">

				<p><center>With Facebook</center></p>

				<div class="btn-fb">
					<a href="<?php echo $login_url;?>"><center>Login with facebook</center></a>
				</div>

			</div>

		</div>
	
	</div>




</body>
</html>