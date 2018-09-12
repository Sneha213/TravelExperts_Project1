<?php
	session_start();	
	
	if(!isset($_SESSION["username"]))
	{
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

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
<header>
	<?php 
		include_once "header.php"; 
		require_once"customerFunctions.php";
	
	?>
	
</header>

</head>

<body>
<?php
		$custData = getCustomerInfoforUserName($_SESSION["username"]);
		
		//Display customer welcome banner
		
		echo '<div id="jumbo1" class="jumbotron jumbotron-fluid">
				<div class="container">

					<h3>Welcome '. $custData['CustFirstName'] ." ".$custData['CustLastName']. ' </h3>
					<h3><a href="login.php" class="btn btn-info" role="button">Log out</a></h3>';
		echo '</div>
				</div>';
				
		//Get bookings for the customer
		$bookings = getBookingsfor($custData['CustomerId']);
		
		if(mysqli_num_rows($bookings) > 0)
		{
		
			while ($row = $bookings->fetch_assoc()) 
			{
			
				//Get the details of the package for this booking
				$packageDetails = getPackageInfoForPackageId($row['PackageId']);
				
				//Display the booking details
		?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="thumbnail">
							<h3><?php echo "<b> Booking ID " . $row['BookingId'] . "</b>"?></h3>
							<!-- <img height="30%" src="<?php //echo $packageDetails['PkgImg'] ?> " alt="" class="img-responsive">-->
								<div class="caption">
									<h4 class="pull-right"><?php echo "$" . $packageDetails['PkgBasePrice'] ?></h4>
									<h4><?php echo "<b> Package " . $packageDetails['PackageId'] . "</b>" ?></h4>
									<b><h6 style="color:red;"><?php echo "<b> Package starting date: " . $packageDetails['PkgStartDate'] . "</b>" ?> </h6></b>
									<h6 style="color:red;"><?php echo "<b> Package ending date: " . $packageDetails['PkgEndDate'] . "</b>" ?></h6></b>

									<p><?php echo $packageDetails['PkgDesc'] ?></p>
									<!--<p><?php //echo $packageDetails['PkgWeather'] ?></p>-->
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
						  </div>
						 </div>
					 </div>
				 </div>
<?php
		}
	}
	else
	{
		echo '<h3>You have no bookings with us at this time</h3>';
	}
			/* free result set */
			$bookings->free();

				
?>

</body>

<?php
 include_once("footer.php");
?>

</html>