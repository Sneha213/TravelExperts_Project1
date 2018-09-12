<?php
//Assignment 10
//Prince Nimoh
//Student#: 000792122	
	//This function writes data from an associativeArray to the travelexperts database.
	//It takes the name of the table and the associativeArray as parameters.
	//Returns a boolean value indicating if the insert operation was successful.
	function writeToDB($tableName, $associativeArray)
	{
		$wasSuccessful = FALSE;
		$dbconnection = connectDB();
		
		if(isset($associativeArray["CustPassword"]))
		{
			//Hash password before building query.
			$associativeArray["CustPassword"] = password_hash($associativeArray["CustPassword"], PASSWORD_DEFAULT);
		}
		
		
		$myQuery = buildInsertQuery($tableName,$associativeArray);
		
		//echo $myQuery;
		
		
		
		
		 $result = $dbconnection->query($myQuery);
		
		if($result)
		{
			$wasSuccessful = TRUE;
			
		}
		$dbconnection->close(); //Close the database connection here.
		return $wasSuccessful;
	}
	
	//This function builds an insert query
	//It takes the name of the table and the associativeArray as parameters.
	//Returns the query that was built.
	function buildInsertQuery($tableName, $associativeArray)
	{
		$myQuery = "";
		$concatFields="";
		$concatValues="";
		
		
		$isFirstTry = TRUE;
		foreach($associativeArray as $field => $value)
		{
			if($isFirstTry)
			{
				$concatFields = $field;
				$concatValues = "'$value'";
				$isFirstTry = FALSE;
			}
			elseif($field != "submit")
			{
				$concatFields = $concatFields . ", ". $field;
				$concatValues = $concatValues. ", " . "'$value'";
			}
		}
		
		$myQuery = "INSERT INTO " . $tableName . " (" . $concatFields . ") " . "VALUES (" . $concatValues . ")";
		
		return $myQuery;
	}

	//This function creates a database connection to the travelexperts database.
	//It returns a database connection object to its caller.
	function connectDB()
	{
		//creats a database connection object using exception handling.
		try
		{
			$dbconnection = new mysqli('localhost', 'root', '','travelexperts');
			
			if(!$dbconnection->connect_error)
			{
				//echo "connection successful! </br>";
				
			}
			else
			{
				echo "An exception will be thrown! </br>";
				throw new Exception('Database connection failed.</br>');
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
		
		return $dbconnection;
	}
	
	//This function validates the username and password with the 
	//information stored in the customer database
	//It takes the username and password as parameters
	//Returns a boolean value indicating if the username and password combination are a match
	function validateUsername($enteredUserName, $enteredPassword)
	{
		//Get database connections
		$dbconnection = connectDB();
					
		//Create  select query
		$myQuery = "SELECT CustPassword FROM customers WHERE CustEmail = '$enteredUserName'";
		
		$result = $dbconnection->query($myQuery);
					
		$hasMatch = FALSE;
		while ($row = mysqli_fetch_row($result))
		{
			foreach ($row as $col)
			{
			//print_r($col);
			//Check entered password against database
			if(password_verify($enteredPassword, $col))
			{
				$hasMatch = TRUE;
			}
			}
		}
		return $hasMatch;
	}
	
	//This function returns the customer ID for a given userName
	//Returns the customer ID for a given username
	function getCustomerIDforUserName($userName)
	{
		//Get database connections
		$dbconnection = connectDB();
					
		//Create  select query
		$myQuery = "SELECT CustomerId FROM customers WHERE CustEmail = '$userName'";
		
		$result = $dbconnection->query($myQuery);
		
		while ($row = mysqli_fetch_row($result))
		{
			foreach ($row as $col)
			{
				$customerID = $col;
			}
		}
		return $customerID;
	}
	
	//This function returns an associative array with the customer information
	//It takes the customers username as a parameter.
	function getCustomerInfoforUserName($userName)
	{
		//Get database connections
		$dbconnection = connectDB();
					
		//Create  select query
		$myQuery = "SELECT * FROM customers WHERE CustEmail = '$userName'";
		
		$result = $dbconnection->query($myQuery);
		
		
		$customerArray = mysqli_fetch_assoc($result);
		
		return $customerArray;
	}
	
	/* Function for fetching booking based on CustomerId from Database */

	function getBookingsfor($customerId)
	{
		$dbconnection = connectDB();// make databse connection

		$myQuery = "SELECT * from bookings WHERE CustomerId = '$customerId'";

		$bookings = $dbconnection->query($myQuery);

		$dbconnection->close(); //Close the database connection here.

		return $bookings;
	}
	
	//This function returns an associative array with the package information
	//It takes the bookingId as a parameter.
	function getPackageInfoForPackageId($packageId)
	{
		//Get database connections
		$dbconnection = connectDB();
					
		//Create  select query
		$myQuery = "SELECT * FROM packages WHERE PackageId = '$packageId'";
		
		$result = $dbconnection->query($myQuery);
		
		
		$packageArray = mysqli_fetch_assoc($result);
		
		return $packageArray;
	}

?>