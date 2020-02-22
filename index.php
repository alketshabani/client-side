<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	//$_SESSION['msg'] = "You must log in first";
  	//header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v3.8.5" />
    <title>Albanian Alps</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!--date picker-->
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
    
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
-->
  <!--  <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script> -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    .mr-sm-2, .mx-sm-2{
      border-radius: 1rem;
    }

    /* for the dropdown of menu items {alket} */
    .dropdown:hover>.dropdown-menu {
      display: block;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet" />
  </head>
  <body>

    <header>

      <!-- navbar with logo {fati} -->
     <nav class=" navbar navbar-expand-lg  navbar-dark fixed-top bg-dark">
       <a class="navbar-brand" href="index.php" ><img src="alb_mount.png" width="50" height="50">Albanian Alps</a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Guides
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="guides/2dayvalbone.html">2 day trip to Valbone</a>
                    <a class="dropdown-item" href="guides/2daytheth.html">2 day trip to Theth</a>
                    <a class="dropdown-item" href="guides/1dayluginashales.html">1 day trip to Lugina e Shales</a>
  
                </div>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Site Attractions
                  </a>
                  <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink1">
                      <a class="dropdown-item" href="site-attractions/Theth.html">Theth</a>
                      <a class="dropdown-item" href="site-attractions/valbone.html">Valbone</a>
                      <a class="dropdown-item" href="site-attractions/bajram-curri.html">Bajram Curri</a>
                      <a class="dropdown-item" href="site-attractions/lugina-e-shales.html">Lugina e Shales</a>
                  </div>
              <!-- for the dropdown of menu items {alket} -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                      <a class="dropdown-item" href="services/CarRental.html">Car Rentals</a>
                      <a class="dropdown-item" href="services/Accomodation.html">Accomodiation</a>
                  </div>
  
              </li>
            <li class="nav-item">
              <a class="nav-link " href="About.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.html">Contact</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
              <input
                class="form-control mr-sm-2"
                type="text"
                placeholder="trip search"
                aria-label="Search"
              />
			   <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	 <a href="index.php?logout='1'" class="btn btn-primary">logout</a> 
		 <?php else: ?>
			  <a class="btn btn-primary" href="login.php" role="button" >Login</a>
    <?php endif ?>
            </form>
        </div>
      </nav>
    </header>

    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="https://www.wildfrontierstravel.com/media/cache/responsive/opengraph-1200/axum/Web%20Images%20-%20Axum-FTP/A-Group%20Tour%20Carousel%20%28New%29/Europe%20%26%20the%20Caucasus/Northern%20Albania/0-Albania%20Alps%20%28DT%29.jpg" class="d-block w-100" alt="...">
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"


            >
              <rect width="100%" height="100%" fill="#777"  />
            </svg>
            <div class="container">
              <div class="carousel-caption text-left">
                
                <p>
                  Join us for the trip of your life
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="register.php" role="button"
                    >Sign up today</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Bajram_Curri_Qytet.jpg"/>
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
            >

              <rect width="100%" height="100%" fill="#777" />
            </svg>
            <div class="container">
              <div class="carousel-caption">
               <!-- <h1>Another example headline.</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. Nullam id
                  dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#" role="button"
                    >Learn more</a
                  >
                </p>-->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              src="shala.jpg"
            >
              <rect width="100%" height="100%" fill="#777" />
          </img>
            <div class="container">
              <div class="carousel-caption text-right">
                <!--<h1>One more for good measure.</h1>
                <p>
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                  Donec id elit non mi porta gravida at eget metus. Nullam id
                  dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="site-attractions/SiteAttractions.html" role="button"
                    >Explore Attractions</a
                  >
                </p>-->
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#myCarousel"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myCarousel"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <h1 align="center">Check OUT</h1>
        <hr class="featurette-divider" />
        <div class="row">
          <div class="col-lg-4">
              <h2>Site Attractions</h2>
            <img
              class="bd-placeholder-img rounded"
              width="240"
              height="240"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 140x140"
              src="SiteAttractions.png"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />

            </svg>


            <p>
              <a class="btn btn-secondary" href="site-attractions/SiteAttractions.html" role="button"
                >View details &raquo;</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <h2>Guides</h2>
            <img
              class="bd-placeholder-img rounded"
              width="240"
              height="240"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 140x140"
              src="guide.png"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />

            </svg>


            <p>
              <a class="btn btn-secondary" href="guides/Guides.html" role="button"
                >View details &raquo;</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <h2>Services</h2>
            <img
              class="bd-placeholder-img rounded"
              width="240"
              height="240"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              role="img"
              aria-label="Placeholder: 140x140"
              src="services.png"
            >
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777" />

            </svg>

            <p>
              <a class="btn btn-secondary" href="services/Services.html" role="button"
                >View details &raquo;</a
              >
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->
      <hr class="featurette-divider" />
      <!-- FOOTER -->
      <footer class="container">



          <p class="float-right">
              <a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
              <a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
              <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
              <a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-youtube"></i></a>
          </p>


        <p>
          &copy; 2019 Client-Side &middot;

        </p>




        <!-- <a class="btn  btn-social-icon btn-facebook">
          <span class="fa fa-facebook"></span>
        </a>
        <a class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
          </a> -->

      </footer>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>'
        );
    </script>
    <script
      src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
      crossorigin="anonymous"
    ></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css" integrity="sha256-rFMLRbqAytD9ic/37Rnzr2Ycy/RlpxE5QH52h7VoIZo=" crossorigin="anonymous" />

  </body>
  </body>
</html>
