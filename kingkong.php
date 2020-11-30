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
                        <span>King Kong</span>
                        <hr>
                        <div class="heading">
                       <h1><span><h4>(1933)</h4></span></h1>
                        <h3>PG-13 | 1h 57min | Adventure, Action | 2 March 1933 (USA) </h3>
                        <h4> Genres: Adventure | Action </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/king-kong.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/PbrikL8IjXM">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                           When a film crew goes to a mysterious island for a shoot, they discover a giant prehistoric ape living there. 
						   Mayhem emanates, when the gorilla attempts to possess a woman from the crew.<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Merian C. Cooper, Ernest B. Schoedsack<br/>
                            <b>Writers</b>: Merian C. Cooper, Edgar Wallace, Leon Gordon<br/>
                            <b>Stars</b>: Fay Wray, Robert Armstrong, Frank Reicher.
                        </p>

                        <h1>Details</h1>
                        <p>
                                
							<!--Official Sites: Marvel [United States] | Official Facebook | See more »
							<br>-->
							Country: USA
							<br>
							Language: English
							<br>
							Release Date: 2 March 1933 (USA)
							<br>
							<!--Also Known As: Black Panther See more »
							<br>-->
							Filming Locations: Los Angeles on a beach at San Pedro, California, RKO-Pathé lot in Culver City.
							<br>
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>Exciting.</h3>
                            2 March 1933 | 
                            
                           King Kong is one of the most influential movie´s of all time.The original King Kong has amazed people for over 85 years.
						   The film has a nice leisurely pace.The characters are stunning,Robert Armstrong as Carl Denham was a great casting choice
						   and he does a really good job as a filmmaker.Kong and the rest of the creatures were brought to life thanks to a technique
						   called stop motion animation and was done by Willis O´Brien. Kong in this movie was great.The movie was great at showing
						   a king confused,powerful,horrifying,and sympathetic.The films darkesh tone helps describe a world that isn't just a world
						   of cupcakes and rainbows.The films ending is a masterpiece making the audience feel sorry for the beast.All and all this
						   film is a great masterpiece and will still amaze people foe generations to come.
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