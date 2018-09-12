<!DOCTYPE html>
<html>
	 <head>
      <!--Project Awesome Threaded Project-->
	  
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
	 </head>
	 
	 <body>
	 
	     <!--including Header file and Agent-Agency Function File--->
		
		<?php
		
			include_once("header.php");
			require_once("agentagenciesfunctions.php");
			
		?>
		 <!--Heading of Page-->
		
		 <h1 class="contactform">Contact Us</h1><br>
		 
		 <!--Code for Map of AgencyId_1-->
		 
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3847274439927!2d-114.09056018424701!3d51.045983579562105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe76e972489%3A0x149461cedf5b7c5b!2s1155+8+Ave+SW%2C+Calgary%2C+AB!5e0!3m2!1sen!2sca!4v1527994536356" width="100%" height="350" frameborder="2" style="border:2" allowfullscreen>
	     </iframe>
	     <br>
	     <br>
		 
		 <!--PHP file to Display Data from Database-->
		
		<?php
				
			//Get Agencies from database
			$agencies = getAgencies();
			
			
			//Loop through agencies and print to page
			while ($row = $agencies->fetch_assoc()) 
			{

				echo '<div class="container-fluid">
								<div class="jumbotron">';
				echo '<h2 align="center"><b>Contact us at our '. $row["AgncyCity"] . ' location!</b> </h2>';
				echo '<h3 align="center"><i class="fas fa-home" fa-2px style="color:Blue"></i> ' .$row["AgncyAddress"].' '.$row["AgncyCity"]. ', ' .$row["AgncyProv"]. ' ' .$row["AgncyPostal"]. ', ' .$row["AgncyCountry"].'</br>';
				echo '<i class="fas fa-phone" fa-2px style="color:Blue"></i> Phone: '.$row["AgncyPhone"].'</br><i class="fas fa-fax" fa-2px style="color:Blue"></i> Fax: '.$row["AgncyFax"].'</h3></br>';
				
				//Get Agents from database based on AgencyId		
				displayAgentsForAgncyID($row["AgencyId"]);
				
				echo '</div>
					  </div>';
				
			}

			/* free result set */
			$agencies->free();
		?>
		
		<!--Text-Container's Code-->
		
         <div class="container text-center">
      
             <p class="contactform"><font size="4"> <b>If you have any questions about our packages or need additional information please feel free to contact us and send us your questions or concerns </font> <b></p>
 
         </div>
 
    <!--Contact Us Form Container's Code-->
 
     <div class="container-fluid">
 
         <div class="row">
 
             <div class="col-sm-3" style="background-color:white"></div>
 
                 <div class="col-sm-6" style="background-color:#e0e3e5;">
 
                     <form role="form" method="post" id="reused_form" class="contactform" >
  
                         <label class="contactform" for="name">
                             Name:</label>
                             <input type="text" class="form-control" id="name" name="name"   required maxlength="50"> <br>
						 
                         <label class="contactform" for="email">
                             E-mail:</label>
                             <input type="email" class="form-control" id="email" name="email" required maxlength="50"> <br>
   
                         <label class="contactform" for="name">
                             Message:</label>
                             <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea> <br>
   
                         <button align="center" class="contactform" type="send" value="Send" style="margin-bottom:17px;"> Send </button>
		 
                     </form>
	     
		         </div>
    
	         <div class="col-sm-3" style="background-color:white"></div>
 
         </div>
		 
	 </div>
	 
		 <!--including Footer file--->
		 
		<?php
		
			include_once("footer.php");
			
		?>
		
	 </body>
	 
</html>