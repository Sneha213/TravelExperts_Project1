<!DOCTYPE html>
<html>
	<head>
		<!--Project Awesome
		Threaded Project-->


	</head>
<style>

	#jumbo1 {
			height: 250px;
			width: 100%;
			background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
			color: white;
			opacity: 1.1;
	}

</style>
	<body>
		<?php
			include_once("header.php");
			require_once("customerFunctions.php");
		?>

	<div>
			<?php
				//This php script is used to process the add agents form.
				if(isset($_POST['submit']))
				{
					$enteredUserName = $_POST['userName'];
					$enteredPassword = $_POST['password'];

					$hasMatch = validateUsername($enteredUserName, $enteredPassword);

					if($hasMatch)
					{
							//echo "Password is a match!</br>";
							session_start();
							$_SESSION["username"] = $enteredUserName;
							header('Location: myAccount.php');
					}
					else
					{
						echo "Invalid username and password combination";
					}
				}
			?>
			<div class="container">
			<div id="jumbo1" class="jumbotron jumbotron-fluid">


					<h3>New to Travel experts? <a href="register.php" class="btn btn-info" role="button">Register here!</a></h3>

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group row">
						<div class="col-md-6">
							<label for="email">Email</label>
							<input type="email" id="email" name="userName" class="form-control" placeholder="Email" required>
						</div>
						<div class="col-md-6">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<button type="submit" id="submitBtn" name="submit" class="btn btn-success">Log in</button>
						</div>
					</div>
				</form>
				</div>
			</div>


		<?php
			include_once ("footer.php");
		?>

	</body>
</html>
