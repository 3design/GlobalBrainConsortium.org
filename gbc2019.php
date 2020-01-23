<!DOCTYPE html>
<?php error_reporting(0) ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>GBC 2019</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


	<!-- Styles -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/icons.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bright-red.css" title="bright-red" />

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


<!-- Scripts -->
<script src="js/jquery-2.2.2.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.js" type="text/javascript"></script>
<script src='js/script.js'></script>
<script src='js/bootstrap.js'></script>
<script src="js/html5lightbox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script defer src="js/jquery.mousewheel.js"></script>

<script>
	$(window).load(function(){
		$('.slideshow').flexslider({
			animation: "fade",
			animationLoop: false,
			slideShow:false,
			controlNav: true,	
			maxItems: 1,
			pausePlay: false,
			mousewheel:true,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
		
		$('.footer_carousel').flexslider({
			animation: "slide",
			animationLoop: false,
			slideShow:false,
			controlNav: true,	
			maxItems: 1,
			pausePlay: false,
			mousewheel:true,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
		
		
	});
</script>

</head><!-- Head --> 

<body>
	<div class="theme-layout">


		<div id="top-bar" class="modern2">
			<div class="container">
				
				<div class="header-social">
					<ul>
						<li><a href="#" title=""><i class="icon-google-plus"></i></a></li>
						<li><a href="#" title=""><i class="icon-facebook"></i></a></li>
						<li><a href="#" title=""><i class="icon-skype"></i></a></li>
						<li><a href="#" title=""><i class="icon-linkedin"></i></a></li>
						<li><a href="#" title=""><i class="icon-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>


		<header  class="header2 sticky">
			<div class="container">
				<div class="logo">
					<a href="#" title=""><img src="images/logo.png" alt="Logo" /><h1 style="font-size: 11px"><i>G</i>lobal Brain Consortium</h1></a>
				</div><!-- Logo -->

				<nav class="menu">
					<ul id="menu-navigation">
						<li class="active"><a href="index.php"><i class="icon-home"></i>Home</a></li>

						<li><a href="workshops.html">Workshops</a>
							
						</li>
						<li ><a href="wgroups.html">Working Groups</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>   
				</nav><!-- Menu -->



			</div>		
		</header><!--header-->
		<div class="responsive-header">	

			<div class="responsive-logomenu">
				<div class="container">
					<a href="index.html" title=""><img src="images/logo.png" alt="Logo" /></a>
					<span class="menu-btn"><i class="fa fa-th-list"></i></span>
				</div>
			</div>
			<div class="responsive-menu">
				<span class="close-btn"><i class="fa fa-close"></i></span>
				<ul>
					<li class="active"><a href="index.php">Home</a></li>

					<li><a href="workshops.html">Workshops</a>
						
					</li>
					<li ><a href="wgroups.html">Working Groups</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div> 

		</div>


		<div class="top-image">
			<img src="images/slider/banner.png" alt="" />
		</div><!-- Page Top Image -->
		
		<section class="inner-page">
			<div class="container">
				<div class="page-title">
					<h1>GBC  <span>2019</span> Workshop</h1>
				</div><!--Page Title-->
			</div>

			
			


			<section class="block remove-top">
				<div class="container">
					<div class="row block remove-top">
						<div class="col-md-8">
							<?php if (isset($_GET["tab"])&&$_GET["tab"]!='') include './pages/'.$_GET["tab"].'.html'; else{ ?>
								<section class="variable-sizes bounceinup" id="alignedimages">
									
									<div class="row block">
										<div class=" aligned center" style="text-align: justify; color: black !important">
											<img class="pull-left" style="margin-right: 15px" src="images/thumbs/bb.png" alt="" />
											<h5 class="highlight rounded"> <span>GBC 2019 Welcome Message</span></h5>
											<p >On behalf of our entire Steering Committee, it is a pleasure to welcome you all to the inaugural meeting of the Global Brain Consortium (GBC). Numerous workshops in recent years on the topic prove that there is considerable appetite for the creation of transnational neuroscience networks that will allow us to tackle some of biggest questions in neuroscience. Recent advances in information technology to mediate data-sharing, dedicated support from funders, and a burgeoning culture of Open Science offer new hope for meaningful scientific engagement on an international scale. However, bringing scientists across the globe together to work collectively has been difficult - for a variety of technical, logistical, ethical and sociopolitical reasons. We must work together – scientists, technology developers and funders - to devise the strategies that can make this happen. This is why we have come together here today.  
											</p>
											<p>Finding a place to begin that provides an opportunity for us to have a scientific focus, tackle major technological challenges and enhance global impact is a delicate balancing act. Modern neuroscience has a considerable arsenal of theoretical, modelling and neuroimaging technologies, but many of these devices are not readily available in Lower- and Middle-Income Countries (LMIC). Fortunately, access to an array of digital and neuro-technologies, enhanced in recent years thanks to the investment of the Big Brain initiatives, may allow us to cross this critical divide. This in turn will open collaborative opportunities for neuroscientists and clinicians in LMIC who have been somewhat marginalized from previous efforts in global collaboration. This was the focus of a first meeting of international Brain Projects with the World Health Organization in Geneva in 2016, regarding health care to underserved populations around the world. The GBC Steering Committee now seeks to level the playing field by creating an ecosystem where we can learn from each other. </p>		
											<p>We have elected to begin this venture with EEG, a technique that allows us to study dynamic brain states in consciousness, sleep, anesthesia, and across multiple brain disorders. EEG has exquisite temporal resolution in quantifying brain states, and is broadly used internationally. We believe it is an excellent use case that will lay the groundwork for a new global neuroscience collaborative ecosystem - tackling complex issues of international best practices and data-sharing, fostering global precision mental health and reducing the global burden of brain disorders. Our current efforts are based upon and considerably expand the Canada-Cuba-China collaboration that has received support from the Quebec, Cuban, and Chinese governments. It has initiated the construction, within the framework of Canadian Open Neuroscience Platform (CONP), of an accessible neuroinformatics platform that not only includes EEG but also is conceived to make possible full engagement from all countries regardless of their economic setting. </p>				
											<p>We are deeply grateful to the Ludmer Foundation and the Healthy Brains for Healthy Lives initiative at McGill University for their support for this inaugural GBC workshop and the vision of a global neuroscience network. </p>

										</div>
										
										
									</div>
									<div class="row block remove-top">
										<div class=" aligned left" style="text-align: justify; color: black !important">
											<img class="pull-left" src="images/thumbs/ludmer.png" alt="" />
											<h5>Ludmer Centre Welcome</h5>
											<p>On behalf of the Ludmer Centre, welcome. Today represents a dream come true---a global consortium cooperatively researching neurodegenerative and mental illnesses.  </p>
											<p>Several years ago I asked the then Dean of Medicine if McGill University, my alma mater, was studying the matter of consciousness. He replied, “No, but if we start by fixing and modernizing our psychiatry training centre, maybe we can recruit scientists to fulfill our needs.” We turned what looked like a prison into a modern facility. But there remained much more to be done. </p>
											<p>The next step was to build a consortium of the Douglas Mental Health Hospital, The Montreal Neurological Institute and the Lady Davis Institute of the Jewish General Hospital into a multidisciplinary research centre for neurodegenerative and mental health studies.</p>
											<p>About a year later, contracts were signed and The Ludmer Centre was born. Then came Alan Evans’ “Canada Cuba China” cooperative and a Canada-wide cooperative. Now with a global consortium, I’m confident we’ll see even further progress in the understanding of the universe within, the functioning of matter and energy into consciousness and cures. </p>
											<p>Thank you for your participation. </p>
										</div>
										
										
									</div>
								</section>
							<?php }?>
							
							
							
						</div>
						<div class=" col-md-4">
							
							<div class="row block remove-top">
								
								
								
								<div class="row block remove-top">
									<div class="sec-heading">
										<h2><strong>Participant's</strong> Bio Sketch</h2>
									</div><!-- Section Title -->
									<div class="gallery-image">
										<a href="gbc2019.php?tab=biosketch"><img height="173"  src="images/thumbs/e.png" alt="" /></a>
										<span><a href="gbc2019.php?tab=biosketch" style="color: white">Participant's Bio Sketch</a></span>
										
									</div>
								</div>

								
								<div class="row block remove-top">
									<div class="sec-heading">
										<h2><strong>Breakout</strong> Session Groups</h2>
									</div>
									<div class="gallery-image">
										<a href="gbc2019.php?tab=sessions"> <img height="173"  src="images/thumbs/c.jpg" alt="" /></a>
										<span><a href="gbc2019.php?tab=sessions" style="color: white">Breakout Session Groups</a></span>
										
									</div>
								</div>
								
								
								
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="sec-heading">
						<h2><strong>Partners</strong></h2>
					</div>	
					<div class="row">
						<div class="col-md-3"><a href="http://ludmercentre.ca/" target="#blank"><img height="100" width="100%" src="images/thumbs/Ludmerlogo.png" alt="Ludmer Foundation" /> </a>
						</div>
						<div class="col-md-3"><a href="https://mcgill.ca/" target="#blank"><img height="100" width="100%" src="images/thumbs/McGill.png" alt="" />
						</a></div>
						<div class="col-md-3"><a href="https://www.mcgill.ca/hbhl/events/mcgill-hbhl-logo" target="#blank"><img height="100" width="100%" src="images/thumbs/healthybrain.jpeg" alt="" />
						</a></div>
					</div>
				</div>
			</section>			
			



		</div>

		<section class="block">
			<div class="container">
				<div class="row">
					<div class="fixed-bg " style="background:url(images/moving-bg.png) no-repeat scroll 0 0 transparent; background-attachment:fixed; background-size:cover;"></div>
					<div class="col-md-12">
						<div class="sec-heading">
							<h2><strong>D</strong>ocuments</h2>
						</div>			
						<div class="posts-carousel">
							<ul class="slides">
								<li>
									<div class="row">
<!--						<div class="col-md-3">
							<div class="carou-post">
								<div class="carou-post-img">
									<img src="http://placehold.it/270x235" alt="" />
									<a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
								</div>
								<h4>Development</h4>
								<p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
								<a href="single-post-video.html" title="">Read More</a>
							</div>
						</div>-->
						
					</div>
				</li>
				
			</ul>
		</div>
	</div>
</div>
</div>
</section>



</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>C</span>hair </strong> Statement</h4>
				</div>
				<div class="footer_carousel">
					<ul class="slides">
<!--						<li>
							<div class="review">
								<i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
							</div>						
							<div class="from">
								<h6>Thoms gomz britian</h6>
								<span>CE0, Australia</span>
							</div>
						</li>-->
						
					</ul>
				</div>
			</div><!-- Reviews Widget -->
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>U</span>p</strong> Coming Events</h4>
				</div>
				
			</div><!-- Flickr Widget -->
			<div class="col-md-3">
				<div class="footer-widget-title">
					<h4><strong><span>C</span>ontact</strong> Us</h4>
				</div>
				<ul class="contact-details">
					<li>
						<span><i class="icon-home"></i>ADDRESS</span>
						<p>#</p>
					</li>
					<li>
						<span><i class="icon-phone-sign"></i>PHONE NO</span>
						<p>+00 0000000 / +00 00000000</p>
					</li>
					<li>
						<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
						<p>esss@gmail.com</p>
					</li>
					
				</ul>
			</div><!-- Contact Us Widget -->
			<div class="col-md-3">
				<div class="newsletter">
					<h4><strong>SIGNUP</strong> NEWSLETTER</h4>
					<p>Get push notifications of our activities.</p>
					<input class="form-control" type="email" placeholder="Email" />
				</div>
				<ul class="social-bar">
					<li><a href="#" title=""><img src="images/rss.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/facebook.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/gplus.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/linked-in.jpg" alt="" /></a></li>
					<li><a href="#" title=""><img src="images/pinterest.jpg" alt="" /></a></li>
				</ul>
				<div class="newsletter-btn">
					<input type="button" value="Submit" />
				</div>
			</div>	<!-- News Letter SignUp -->		
		</div>
	</div>
</footer><!-- Footer -->


<div class="footer-bottom " style="background-color: #dc4b3a">
	<div class="container">
		<p>Copyright © 2019 Global Brain Consortium. <span>All rights reserved.</span> </p>
		
		
	</div>
</div><!-- Bottom Footer Strip -->


</body>
</html>
