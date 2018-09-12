<?php

   /* To call connectDB function from customerfunction file*/
	require_once("customerFunctions.php");

	/*
	*This function selects all the rows from the agencies table and
	*returns the results to its caller.
	*/

	/* Function to connect to database and fetch Agency's Data from Database */

	function getAgencies()
	{
		$dbconnection = connectDB();// make databse connection

		$myQuery = "SELECT * from agencies";

		$agencies = $dbconnection->query($myQuery);

		$dbconnection->close(); //Close the database connection here.

		return $agencies;
	}

	/* Function for fetching Agent's Data based on AgencyId from Database */

	function getAgents($agncyId)
	{
		$dbconnection = connectDB();// make databse connection

		$myQuery = "SELECT * from agents WHERE AgencyId = '$agncyId'";

		$agents = $dbconnection->query($myQuery);

		$dbconnection->close(); //Close the database connection here.

		return $agents;
	}

	/* Function to display Agent's Data right after Agency-Info from Database */

	function displayAgentsForAgncyID($agencyId)
	{
		$agents = getAgents($agencyId);

		echo '<div class="container-fluid">';
		$count = 0;
		while ($row = $agents->fetch_assoc())
		{
			if($count%2==1)
			{
				echo '<div class="row">';
			}
			echo '<div class="col-lg-5">';

			echo '<p><i class="fas fa-user fa-2px" style="color:Blue"></i> ' .$row["AgtFirstName"].' '.$row["AgtLastName"]. '</br> &nbsp;&nbsp;&nbsp;&nbsp;'.$row["AgtPosition"].'</br>' ;
			echo '&nbsp;&nbsp;&nbsp;&nbsp;Phone: '.$row["AgtBusPhone"].'</br> &nbsp;&nbsp;&nbsp;&nbsp;Email: '.$row["AgtEmail"].'</p></br>';

			echo '</div>';
			if($count%2 ==1)
			{
				echo '</div>';
			}
			$count++;
		}
		echo '</div>';
			 /* free result set */
				$agents->free();
	}
?>
