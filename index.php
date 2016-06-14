<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>aBaCUS'16</title>
		<link rel="shortcut icon" href="images/a.png" />
		<meta name="description" content="Abacus, the national level technical symposium, conducted by CSEA" />
		<meta name="keywords" content="csea,abacus16,abacus,dcse,anna university,computer science" />
		<meta name="author" content="aBacUS'16" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css" href="css/particle.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		 <link href='https://fonts.googleapis.com/css?family=Kurale' rel='stylesheet' type='text/css'>
    	
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		 <style type="text/css">
			p{
				font-family: 'Kurale','sans-serif';
				font-size:1.3em;
				color:white;	
			}
		</style>	
		<script src="js/modernizr.custom.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-74300559-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>

	<body>
		
		<div id="particles-js"></div>
		
		<div class="bcontainer">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div id="sidebar" class="mp-level">
						<h2 class="icon icon-world">Home</h2>
						<ul>
							<?php
							include_once("config.php");
							include_once("includes/functions.php");
							//destroy facebook session if user clicks reset
							if($fbuser){
							$user_profile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
							$user = new Users();
							$user_data = $user->checkUser('facebook',$user_profile['id'],$user_profile['first_name'],$user_profile['last_name'],$uemail,$user_profile['gender'],$user_profile['locale'],$user_profile['picture']['data']['url']);
							if(!empty($user_data)){
								echo '<li><a class="icon icon-user" href="/login">'.$user_data['fname'].'</a></li>';
							}}
							else
							{echo '<li><a class="icon icon-user" href="/login">Login/SignUp</a></li>';
							}
							?>
                            <li><a class="icon icon-photo" href="about.html">About</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-display" href="#">Events</a>
								<div class="mp-level">
									<h2 class="icon icon-display">Events</h2>
									<ul>
										<li>
											<a class="icon icon-phone" href="online.html">Online</a>
										</li>
										<li class="icon icon-arrow-left">
											<a class="icon icon-tv" href="#">Onsite</a>
											<div class="mp-level">
												<h2>Onsite</h2>
												<ul>
													<li><a class="icon icon-bulb" href="general.html">General</a></li>
													<li><a class="icon icon-key" href="tech.html">Technical</a></li>
													<li><a class="icon icon-star" href="d2d.html">Dusk2Dawn</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li><a class="icon icon-news" href="workshops.html">Workshops</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-paperplane" href="reach.html">Reach</a>
								<!--div class="mp-level">
									<h2 class="icon icon-paperplane">Reach</h2>
									<ul>
										<li><a href="#">A</a></li>
										<li><a href="#">B</a></li>
										<li><a href="#">C</a></li>
									</ul>
								</div-->
							</li>
							<li><a class="icon icon-photo" href="sponsor.html">Sponsors</a></li>
							<li><a class="icon icon-photo" href="ambassador.html">Student Ambassadors</a></li>
							<li><a class="icon icon-wallet" href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</nav>
				<!-- /mp-menu -->

				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">

							<nav class="navbar text-center" role="navigation">
							  <div class="container-fluid">

							    <div class="navbar-header">
							      <a class="navbar-brand" href="#"></a>
							      <a href="#" id="trigger" class="navicon-button x"><div class="navicon"></div></a>
							    </div>
							    <div class="Iam">
											<b>
												<p style="color:#337ab7;"><strong>Updates >> </strong></p>
		  										<div class="innerIam">
		    										<p>Re'Present' Submission date extended to March 5</p><br> 
		    										<p>Student Ambassador will be opened soon</p><br>
		    										<p>Scribble Away online contest is opened</p><br>
		    									</div>
											</b>
								</div>
							   
							  <div class="container soc">
							  
							  	<div class="row">


									<div id="socialbtns" class="col-md-1 col-xs-2"><a href="https://www.facebook.com/abacus.cse/?fref=ts"><img class="rotate" src="images/f.png"></a></div>
									<!-- <div id="socialbtns" class="col-md-1 col-xs-2"><img class="rotate" src="images/t.png"></div>
									<div id="socialbtns" class="col-md-1 col-xs-2"><img class="rotate" src="images/g.png"></div> -->
									<div class="col-md-8"></div>
									<div id="logos" class="col-md-1"><img src="images/ceg.png" width="50px" height="50px"></div>
									<div id="logos" class="col-md-1"><img src="images/csea.png" width="50px" height="50px"></div>

							    </div>
							    
							    </div>

							  </div>
							</nav>

							<div class="row ">
								<div class="col-md-12 text-center animated fadeInDown"><img id="abacuslogo" src="images/logo.png"/></div>
							</div>
					</div><!-- /scroller-inner -->
							
					</div>
				</div><!-- /scroller -->


			</div><!-- /pusher -->

		</div><!-- /container -->
		<footer>
		<div class="row sponsor">
						<div class="col-md-12">
									<div class="sblogos" data-random="true" data-interval="1500" data-keep-alive="2000">
								    <div class="sblogos-row">
								      <div class="sblogos-col">
								        <a href="#"><img src="images/gigamon.png" alt="logo" /></a>
								      </div>
								      <div class="sblogos-col">
								        <a href="#"><img src="images/geazy.png" alt="logo" /></a>
								      </div>
								      <div class="sblogos-col">
								        <a href="#"><img src="images/symantec.png" alt="logo" /></a>
								      </div>
								      <div class="sblogos-col">
								        <a href="#"><img src="images/zoho.png" alt="logo" /></a>
								      </div>
								      <div class="sblogos-col">
								        <a href="#"><img src="images/ibm.png" alt="logo" /></a>
								      </div>
								      <div class="sblogos-col">
								        <a href="#"><img src="images/mazenet.jpg" alt="logo" /></a>
								      </div>					
								    </div>
								    </div>	
								</div>
							</div>
		</footer>
		

		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script src="js/index.js"></script>
		<script>
				$("#trigger").click(function(){
					$(this).toggleClass("open");
					$(".sponsor").toggleClass("trans");
			});
		</script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
		<script src="js/particles.min.js"></script>
  		<script src="js/particle.js"></script>

	</body>
		
</html>