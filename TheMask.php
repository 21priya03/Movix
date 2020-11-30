<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Single</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style1.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
<body>
    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="list.php" id="branding">
                     
                    <div class="logo-copy">
                        <h1 class="site-title"><span>MOVIX</span></h1>
                        <small class="site-description">one stop for movie reviews</small>
                    </div>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="home.php">Home</a></li>
                        <li class="menu-item"><a href="trail.php">Latest trailer</a></li>
                        
                        <li class="menu-item"><a href="list.php">Top movies</a></li>
                        <li class="menu-item"><a href="search.php">Search</a></li>
                    </ul> <!-- .menu -->

                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa fa-search"></i></button>
                    </form><i class="fa fa-search"></i></button>
                    </form>
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="home.php">Home</a>
                        <a href="review.php">Movie Review</a>
                        <span> The Mask</span>
                        <hr>
                        <div class="heading">
                       <h1><span><h4>(1994)</h4></span></h1>
                        <h3>PG-13 | 1h 41min | Slapstick, Comedy, Action | 28 July 1994 (USA) </h3>
                        <h4> Genres: Slapstick | Comedy | Action </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/TheMask.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/LZl69yk5lEY">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                           Stanley, a meek bank employee, turns into an eccentric and maniacal green-skinned superhero who can bend reality, after wearing a wooden mask that was created by Loki, the Norse god of mischief<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Chuck Russel<br/>
                            <b>Writers</b>: Michael Fallon<br/>
                            <b>Stars</b>: Jim Carrey, Cameron Diaz, Peter Greene.
                        </p>

                        <h1>Details</h1>
                        <p>
                                
							<!--Official Sites: Marvel [United States] | Official Facebook | See more »
							<br>-->
							Country: USA
							<br>
							Language: English | Swahili | Nama | Xhosa | Korean
							<br>
							Release Date: 28 July 1994 (USA)
							<br>
							<!--Also Known As: Black Panther See more »
							<br>-->
							Filming Locations: Los Angeles, Monrovia, Van Nuys, Woodland Hills CA.
							<br>
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>Overhyped but entertaining.</h3>
                            28 July 1994 |  
                            
                            This film was the perfect vehicle to show off the talents of the real life cartoon character, Jim Carrey.
							The film is underrated and underappreciated for what it accomplished; in 1994 this movie proved that you 
							can have characters with extraordinary powers look believable on screen. A decade before Mr. Fantastic was
							stretching his body in Fantastic Four, we had Jim Carrey bending his body in The Mask. Before Green Lantern,
							The Mask was pulling objects out of thin air (or pockets, rather). Marvel and Fox should be thanking the creators
							of The Mask and specifically the CGI animators before basically laying the groundwork for making their super hero
							movies look good on the silver screen.
                            </p>
                            <p>Review this movie</p>
                            <form action="review.php" class="form1" method="POST">
								<div >
									Enter your email <input type="text" name="email" width="100px">
								</div>
                                <div>
									Enter your review <input type="text" name="review" style="height:200px;" >
								</div>
								<input type="submit" name="submit" value="submit" style="width:100px; align:center;">
                                
                            </form>
                            <br><a href="display.php" name="display">See all the other reviews</a>
                    </div>

                    

                <!--    <div class="irow">
                        <div class="icolumn">
                          <img src="../review/img/iron1.jpg" alt="Snow" style="width:100%">
                        </div>
                        <div class="icolumn">
                          <img src="../review/img/chris.jpg" alt="Forest" style="width:100%">
                        </div>
                        <div class="icolumn">
                          <img src="../review/img/scarlette.jpg" alt="Mountains" style="width:100%">
                        </div>
                      </div>

                    -->

                  <!---  <div class="cast">
                        <div>
                            <img src="../review/img/chris3.jpg" alt="">
                        </div>
                    </div>-->


                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/app.js"></script>


</body>