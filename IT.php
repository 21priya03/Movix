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
                        <span>IT</span>
                        <hr>
                        <div class="heading">
                       <h1><span><h4>(2017)</h4></span></h1>
                        <h3>PG-13 | 2h | Thriller, Horror | 8 September 2017 (USA) </h3>
                        <h4> Genres: Thriller | Horror </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/IT.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/hAUTdjf9rko">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                          Seven helpless and bullied children are forced to face their worst nightmares when Pennywise, a shape-shifting clown,
						  reappears. The clown, an ancient evil torments children before feeding on them..<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Andrés Muschietti<br/>
                            <b>Writers</b>:  Cary Joji Fukunaga, Gary Dauberman, Chase Palmer<br/>
                            <b>Stars</b>: Bill Skarsgård, Finn Wolfhard, Jaeden Martell, Sophia Lillis.
                        </p>

                        <h1>Details</h1>
                        <p>
                                
							<!--Official Sites: Marvel [United States] | Official Facebook | See more »
							<br>-->
							Country: USA
							<br>
							Language: English
							<br>
							Release Date: 8 Septemeber 2017(USA)
							<br>
							<!--Also Known As: Black Panther See more »
							<br>-->
							Filming Locations: Mill and Walton street, Walton Street bridge, Walton Street and Port Hope Town Hall.
							<br>
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>Thrilling, Scary.</h3>
                            15 May 2015 | 
                            
                           Definitely one of the best horror movies of all time. Not only is there horror, but there's action, humour and drama.
						   It definitely made me feel a mix of emotions throughout the entire movie, which is why it makes it so unique. 
						   I feel fear at one moment then happiness at the next then sadness, it's truly amazing. Every character is so thoughtfully
						   put together, along with practically the perfect cast. It really does feel like I'm experiencing the moments myself, as if 
						   I'm right there. The Losers Club shows such great development, they overcome challenges together and they really are true
						   friends. Pennywise is definitely one of the most unique clowns ever. I've heard of Killer Clowns but nothing comes as close
						   to this. Pennywise really is the type of thing you'd see in your worst nightmares, and that's what I like about it. It's 
						   not the common serial killer and jump-scare type of monster, Pennywise is it's own creature. It's nice how they added
						   simple side parts of the story that add so much to their general lives. Beverly's father, Eddie's mother, Bill's brother,
						   Ben's feelings, Richie's sexuality, etc. It is the type of movie you want to dig further into. Every single bit is
						   extremely important to the entire story. Stephen King is definitely one of the most talented writers out there. Overall
						   Rating: Storyline, 10/10. Character Development, 10/10. Emotional Drive, 10/10. Would definitely recommend this to 
						   anyone who loves something that gets their heart racing.
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