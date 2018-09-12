<!DOCTYPE html>
<html>
	<head>
		<!--Project Awesome
		Threaded Project-->
		<title>The Travel Experts</title>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--Bootstrap CSS file link--->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <!--Jquery file link--->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  <!--Bootstrap JS file link--->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >  <!--Bootstrap Theam file link--->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">  <!--Fontawesome for icons link--->
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">  <!--Basic CSS file link--->
        <script src="form.js"></script>  <!--Basic JS file link--->
		<script type="text/javascript" src="js/CustomerFormScriptFile.js"></script>
	</head>

	<style>

#jumbo1 {
		height: 200px;
		width: 100%;
		background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
		color: white;
		opacity: 1.1;
		text-align: center;
}

</style>

	<body>
		<?php
			include_once("header.php");
			require_once("customerFunctions.php");
		?>

		<?php
				session_start();
				//This php script is used to process the customer registration form.
				if(isset($_POST['submit']))
				{
					$tableName = 'customers';
					$custData = $_POST;


					$results = writeToDB($tableName, $custData);


					if($results)
					{
						
						echo '<div id="jumbo1" class="jumbotron jumbotron-fluid">
									<div class="container">

									<h3>'. $custData['CustFirstName'] ." ".$custData['CustLastName']. ' has been successfully registered</h3>
									<h3><a href="login.php" class="btn btn-info" role="button">Login now!</a></h3>';
						//Check if customer was trying to make a booking during registeration
						//and make the booking
						if(isset($_SESSION['PackageId']))
						{
							date_default_timezone_set('America/Edmonton');
							$custID = getCustomerIDforUserName($custData['CustEmail']);
							
							$bookingDate = date("Y-m-d H:i:s");
							
							$bookingInfo = array("BookingDate"=>$bookingDate, "CustomerId"=>$custID, "PackageId"=>$_SESSION['PackageId']);
							
							$wasSuccessful = writeToDB("bookings", $bookingInfo);
							
							if($wasSuccessful)
							{
								echo "<h3>Your booking has been confirmed!</h3>";
								$_SESSION = Array();
				
							}
							else
							{
								echo "<h3>We couldn't confirm your booking at this time. Please try again later.</h3>";
							}
						}			
							
							echo '</div>
							</div>';
					}
					else
					{
						echo '<div id="jumbo1" class="jumbotron jumbotron-fluid">
									<div class="container">
									<h3>An error occured during registration. Please try again. </h3>
								</div>
							</div>';
					}
				}
				else
				{
						echo '<div id="jumbo1" class="jumbotron jumbotron-fluid">
									<div class="container">

									<p>Welcome to our registration page.</p>
								</div>
								</div>';
?>

<div class="container">
		<div class="row">
				<div class="col-md-12">

				 <div class="thumbnail">
				<h3><?php echo "<b>" . $_SESSION['PkgName'] . "</b>"?></h3>
					 <img height="30%" src="<?php echo $_SESSION['PkgImg'] ?> " alt="" class="img-responsive">
					<div class="caption">
						<h4 class="pull-right"><?php echo "$" . $_SESSION['PkgBasePrice'] ?></h4>
										<b><h6 style="color:red;"><?php echo "<b> Package starting date: " . $_SESSION['PkgStartDate'] . "</b>" ?> </h6></b>
										<h6 style="color:red;"><?php echo "<b> Package ending date: " . $_SESSION['PkgEndDate'] . "</b>" ?></h6></b>
						<p><?php echo $_SESSION['PkgDesc'] ?></p>
					</div>
					 <div class="ratings">
						<p>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						 (15 reviews)
						</p>
					</div>
					<div class="space-ten"></div>
					<div class="btn-ground text-center">
							<!--<a href="register.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Order Now</a>-->
					</div>
					<div class="space-ten"></div>
					</div>


				<?php
				}

			?>

		<div class="container">
			<form id="agentForm" class="needs-validation" name="custForm" method="post" novalidate action="<?php echo $_SERVER['PHP_SELF']; ?>" >
				<div class="form-group row">
					<div class="col-md-6">
						<label for="firstName"> First name</label>
						<input type="text" id="firstName" name="CustFirstName" class="form-control" placeholder="First name" required>
					</div>
					<div class="col-md-6">
						<label for="lastName"> Last name</label>
						<input type="text" id="lastName" name="CustLastName" class="form-control" placeholder="Last name" required>
					</div>
				</div>
				<div class="form-group">
					<label for="address"> Address</label>
					<input type="text" id="address" name="CustAddress" class="form-control" placeholder="Street address, including apartment, studio, or floor">
				</div>
				 <div class="form-group row">
					<div class="col-md-3">
						<label for="city"> City</label>
						<input type="text" id="city" name="CustCity" class="form-control" placeholder="City">
					</div>
					<div class="col-md-3">
						<label for="province">Province</label>
						<input type="text" id="province" name="CustProv" class="form-control" placeholder="Province">
					</div>
					<div class="col-md-3">
						<label for="country">Country</label>
						<input type="text" id="country" name="CustCountry" class="form-control" placeholder="Country">
					</div>
					<div class="col-md-3">
						<label for="postalcode">Postal code</label>
						<input type="text" id="postalcode" name="CustPostal" class="form-control" placeholder="Postal code">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label for="homePhone">Home phone</label>
						<input type="text" id="homePhone" name="CustHomePhone" class="form-control" placeholder="Home phone" required>
					</div>
					<div class="col-md-6">
						<label for="busPhone"> Business phone</label>
						<input type="text" id="busPhone" name="CustBusPhone" class="form-control" placeholder="Business phone">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label for="email">Email</label>
						<input type="email" id="email" name="CustEmail" class="form-control" placeholder="Email" required>
					</div>
					<div class="col-md-6">
						<label for="confirmEmail"> Confirm email</label>
						<input type="email" id="confirmEmail" class="form-control" placeholder="Confirm email" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label for="password">Password</label>
						<input type="password" id="password" name="CustPassword" class="form-control" placeholder="Password" required>
					</div>
					<div class="col-md-6">
						<label for="confirmPassword"> Confirm password</label>
						<input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<button type="submit" id="submitBtn" name="submit" class="btn btn-success" onclick="return validateData(this.form)">Submit</button>
					</div>
					<div class="col-md-6">
						<input type="button" id="resetBtn" value="Reset Form" class="btn btn-primary" onclick="return clearForm(this.form)">
					</div>
				</div>
			</form>
		</div>
		<?php
			include_once("footer.php");
		?>
	</body>
</html>
