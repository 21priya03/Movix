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
                <a href="index.html" id="branding">
                     
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
                        <li class="menu-item"><a href="feedback_page.php">Contact</a></li>
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
                        <a href="index.php">Home</a>
                        <a href="review.php">Movie Review</a>
                        <span>Lion King</span>
                        <hr>
                        <div class="heading">
                       <h1><span><h4>(2018)</h4></span></h1>
                        <h3>PG-13 | 1h 48min | Musical-Drama, Adventure, Animation | 19 July 2019 (USA) </h3>
                        <h4> Genres: Adventure | Musical-Drama | Animation </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/TheLionKing.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/7TavVZMewpY">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                           Simba, a young lion prince, flees his kingdom after the murder of his father, Mufasa.
						   Years later, a chance encounter with Nala, a lioness, causes him to return and take back what is rightfully his.<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Jon Favreau<br/>
                            <b>Writers</b>: Jeff Nathanson, Irene Mecchi<br/>
                            <b>Stars</b>: Donald Grover, Beyoncé, James Earl Jones
                        </p>

                        <h1>Detailes</h1>
                        <p>
                                
							<!--Official Sites: Marvel [United States] | Official Facebook | See more »
							<br> -->
							Country: USA
							<br>
							Language: English | Swahili | Nama | Xhosa | Korean
							<br>
							Release Date: 19 July 2019 (USA) 
							<br>
							<!--Also Known As: Black Panther See more »
							<br>-->
							Filming Locations: Kenya, Playa Vista CA
							<br>
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>Overhyped but entertaining.</h3>
                            26 July 2018 | by NpMoviez:– 
                            
                           Seriously, this an absolute masterpiece!  Perhaps one of my personal all-time stories.  The part where Musfasa dies is gut-wrenching for sure and even more real in than the original. That said, if you are a fan of original The Lion King...you will want to add this to your collection.
						   The artistry and the craftsmanship in this recreation is nothing short of jaw-dropping. 
						   Most importantly, the integrity of the original was not only maintained, but followed respectfully.
                           The attention given to every single detail of the movie:animals and their behavior and grasslands, plants, bugs is truely remarkable!!!  Even the grub eating shrew moved so real. It's crazy!
						   It is simply a masterpiece!!!The Lion King (2019) met and exceeded all expectations!
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