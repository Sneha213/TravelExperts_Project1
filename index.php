<!DOCTYPE html>

<html lang="en">

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

<style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #2aabd2;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>



  <header>
    <?php include_once "header.php" ?>
  </header>

	<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}
	</script>

<body>
<!--including Header File--->
     <?php
     include_once "header.php"
	 	?>

<!-- Back to top -->

<!-- Slider's Code -->

     <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->

      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

	  <!-- Wrapper for slides -->

     <div class="carousel-inner" role="listbox">

         <div class="item active">
                 <img src="media/img31.jpg" alt="Image">
                 <div class="carousel-caption">
                 <h2>Dont let your dreams be dreams</h2>
                 <p> Book with us today! </p>
                 <a href="packages.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Book Now</a><br>
                 </div>
         </div>

         <div class="item">
                 <img src="media/img32.jpg" alt="Image">
                 <div class="carousel-caption">
                 <h2>Dont let your dreams be dreams</h2>
                 <p> Book with us today! </p>
                 <a href="packages.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Book Now</a><br>
                 </div>
         </div>

		 <div class="item">
				 <img src="media/img33.jpg" alt="Image">
				 <div class="carousel-caption">
                 <h2>Dont let your dreams be dreams</h2>
                 <p> Book with us today! </p>
                 <a href="packages.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Book Now</a><br>
			     </div>
		 </div>


		 <div class="item">
				 <img src="media/img34.jpg" alt="Image">
				 <div class="carousel-caption">
                 <h2>Dont let your dreams be dreams</h2>
                 <p> Book with us today! </p>
                 <a href="packages.php" class="btn btn-info btn-sm turned-button"><i class="fa fa-search"></i> Book Now</a><br>
			     </div>
		 </div>
	 </div>
     <!-- Controlls for slides -->

         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>

<!--Why Choose Us_Text Container's Code_Row 1-->

<div class="container text-center" style="margin-bottom: 40px;">
    <h1>Why Choose Us</h1><br>
    <div class="row">

      <div class="col-sm-4">
	    <i class="fas fa-handshake fa-5x fa-border" style="color:Blue" ></i>
		<!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
          <h3> <b>Your Personal Travel Agent </b></h3>
            <p>Remember how easy it used to be book a holiday? When someone else took care of everything? When they knew you well enough to get it just right? At Travel Experts we believe travel should be personal. That’s why you deserve your own travel expert, who will build something that fits you perfectly.</p>

      </div>

      <div class="col-sm-4">
	    <i class="fas fa-child fa-5x fa-border" style="color:Blue" ></i>
		<!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
        <h3> <b>Truly Independent</b></h3>
        <p>We’re proud to be family-owned. Our independence makes us unique. It means your Travel Expert’s Agent is able to book with a huge rang of travel providers. That way you can be confident you’re getting a holiday which suits your needs and your budget, and not the holiday which is best for our boardroom. </p>

      </div>


      <div class="col-sm-4">
	  <i class="fas fa-lock fa-5x fa-border" style="color:Blue" ></i>
	  <!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
        <h3><b>Your Money Completely Safe</b></h3>
        <p>Nobody does financial protection like we do. We’ve all heard the horror stories-stranded holidaymakers, lost-bookings. Not with Travel Experts. Everything you book with us is fully protected (and we mean everything – no ifs, no buts, no excuses). With such peace of mind, all you’ll have to worry about is your luggage allowances!.</p>

      </div>

    </div>
  </div>
<!--Why Choose Us_Text Container's Code_Row 2-->

<div class="container text-center">
    <div class="row">
      <div class="col-sm-4">
	   <i class="fas fa-globe fa-5x fa-border" style="color:Blue"></i>
	   <!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
        <h3><b>We’re Global</b></h3>
        <p>With over 1,500 friendly and professional Travel Experts around the world, were only ever a phone call away. Ant time of the day or night, wherever you are, you can reach us. And our global network means that Travel Experts around the world can share their experience – which means accurate local knowledge behind every single booking.</p>

      </div>

        <div class="col-sm-4">
		  <i class="fas fa-star fa-5x fa-border" style="color:Blue"></i>
		  <!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
          <h3><b>Award Winning</b></h3>
          <p>It’s always nice to be recognized for doing a good job, especially when it’s our customers doing the voting. We think our trophy cabinet looks pretty good, being three-time winners of the Guardian Best Travel Agent and earning the UK’s highest business accolade, the Queen’s Award for Enterprise, on two separate occasions – a feat achieved by  no other travel company.</p>

        </div>

        <div class="col-sm-4">
          <i class="fas fa-check fa-5x fa-border" style="color:Blue"></i>
		  <!--Text info reference from https://www.pinterest.ca/KatyaGrenardo/travel-counsellors/ --->
          <h3><b>Delighted Customers</b></h3>
          <p>At Travel Experts we’re all about you –  your wants, your needs and aspirations. Thousands of business travel customers absolutely love this unique approach, because we believe in treating you the way we would expect to be treated. It's why 96% of our customers say they would recommend us.</p>

      </div>

    </div>
  </div>
<br>
<!--Image-->

<div class="container">
              <img  src="media/img41.jpg" class="img-responsive" alt="img41">
</div>
<!--Contact Us Container-->

<div class="container text-center">
      <h1>Contact Us</h1><br>
      <p> If you have any questions about our packages or need additional information please feel free to click the button below and send us your questions or concerns</p>
    <button class="btn btn-info btn-sm turned-button" data-toggle="modal" data-target="#myModal">Contact Us</button>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">Contact Us</h4>
</div>
<div class="modal-body">

        <form role="form" method="post" id="reused_form" >

        <p>Leave your name, email and your message and we will get back to you as soon as possible!</p>

        <div class="form-group">
            <label for="name">
                Name:</label>
            <input type="text" class="form-control" id="name" name="name"   required maxlength="50">

        </div>

        <div class="form-group">
            <label for="email">
                Email:</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
        </div>

        <div class="form-group">
            <label for="name">
                Message:</label>
            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
        </div>

         <button type="submit" class="btn btn-info btn-sm turned-button" id="btnContactUs">Submit</button>


    </form>

    <div id="success_message" style="width:100%; height:100%; display:none; ">
        <h3>Sent your message successfully!</h3>
    </div>
    <div id="error_message"
    style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your form.

    </div>
</div>

</div>

 </div>
</div>
<br>

<!--including Header File--->
<?php
//include_once("footer.php");
?>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<footer class="copyright">
  <p>Travel Experts 2018 &copy</p>
</footer>


</body>
</html>
