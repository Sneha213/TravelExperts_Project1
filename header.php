<style>
/* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
           margin-bottom: 0;
           border-radius: 0;
          }

/* Add a gray background color and some padding to the footer */
  footer {
          background-color: #fff;
          padding: 25px;
         }

.carousel-inner img {
                     width: 100%; /* Set width to 100% */
                     margin: auto;
                     min-height:200px;
                     }

/* Hide the carousel text when the screen is less than 600 pixels wide */
@media (max-width: 600px) {
                      .carousel-caption
						                {
                            display: none;
                            }
                          }



</style>


<header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand"><i class="fas fa-fighter-jet"></i></a>

      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="packages.php">Packages</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
        </form>

        <div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login / Register</a></li>
        </ul>
      </div>

      </div>
    </div>
  </nav>
</header>
