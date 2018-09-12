
<!------ Include the above in your HEAD tag ---------->

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
{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin: center;
}

.product_view .modal-dialog{max-width: 800px; width: 100%;}
.pre-cost{text-decoration: line-through; color: #a5a5a5;}
.space-ten{padding: 10px 0;}

  </style>

<header>
	<?php include_once "header.php" ?>
</header>

</head>

<body>

		<br><h1><b>Our Packages</b></h1>

<article>
	<?php

		if(isset($_POST['submit']))
				{
					//echo "The package you click on is " . $_POST['packageid'];
					session_start();

					$_SESSION['PackageId'] = $_POST['packageid'];
					$_SESSION['PkgName'] = $_POST['PkgName'];
					$_SESSION['PkgImg'] = $_POST['PkgImg'];
					$_SESSION['PkgEndDate'] = $_POST['PkgEndDate'];
					$_SESSION['PkgBasePrice'] = $_POST['PkgBasePrice'];
					$_SESSION['PkgStartDate'] = $_POST['PkgStartDate'];
					$_SESSION['PkgDesc'] = $_POST['PkgDesc'];

					header('Location: register.php');
				}
	?>


	<?php
/* Server connection.*/
$link = mysqli_connect("localhost", "root", "", "travelexperts");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Query execution
$sql = "SELECT * FROM packages WHERE PkgStartDate>= NOW() and PkgEndDate> NOW()";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
?>
		<br><br>

		<div class="container">
		    <div class="row">
		        <div class="col-md-12">

					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						 <div class="thumbnail">
						<h3><?php echo "<b> Package " . $row['PkgName'] . "</b>"?></h3>
							 <img height="30%" src="<?php echo $row['PkgImg'] ?> " alt="" class="img-responsive">
							<div class="caption">
							  <h4 class="pull-right"><?php echo "$" . $row['PkgBasePrice'] ?></h4>
							  <h4><?php echo "<b> Package " . $row['PackageId'] . "</b>" ?></h4>
								<?php
									//Added hidden field.
									echo '<input type="hidden" name="packageid" value="' . $row['PackageId'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgName" value="' . $row['PkgName'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgImg" value="' . $row['PkgImg'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgEndDate" value="' . $row['PkgEndDate'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgBasePrice" value="' . $row['PkgBasePrice'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgStartDate" value="' . $row['PkgStartDate'] . '"' . '/>' ;
									echo '<input type="hidden" name="PkgDesc" value="' . $row['PkgDesc'] . '"' . '/>' ;
								?>
												<b><h6 style="color:red;"><?php echo "<b> Package starting date: " . $row['PkgStartDate'] . "</b>" ?> </h6></b>
												<h6><?php echo "<b> Package ending date: " . $row['PkgEndDate'] . "</b>" ?></h6></b>

							  <p><?php echo $row['PkgDesc'] ?></p>
							  <p><?php echo $row['PkgWeather'] ?></p>
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
							<input type="submit" name="submit" class="btn btn-info btn-sm turned-button" value="Order Now"/>
							    <!--<a href="register.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Order Now</a>-->
							</div>
							<div class="space-ten"></div>
						  </div>
					  </form>

						<?php
        }

        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>

</article>

</div>

</body>

<?php
 include_once("footer.php");
?>

</html>
