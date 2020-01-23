<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>GBC HOME</title>
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
    <!-- Style updates created by derek.lo@mcin.ca to optimize GBC website layout and branding -->
    <link rel="stylesheet" type="text/css" href="css/styles-update.css" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- Scripts -->
    <script src="js/jquery-2.2.2.js" type="text/javascript"></script>
    <script src="js/perfect-scrollbar.jquery.js" type="text/javascript"></script>
    <script src="js/perfect-scrollbar.js" type="text/javascript"></script>
    <script src='js/testimonials.js'></script>

    <script src='js/script.js'></script>
    <script src='js/bootstrap.js'></script>
    <script src="js/html5lightbox.js"></script>
    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script defer src="js/jquery.mousewheel.js"></script>

    <!-- Scripts For Layer Slider  -->
    <script src="layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script>

        $(document).ready(function () {
            $(function () {
                $('#carousel').carouFredSel({
                    responsive: true,
                    circular: false,
                    auto: false,
                    items: {
                        visible: 1,
                        width: 20,
                    },
                    scroll: {
                        fx: 'directscroll'
                    }
                });
                $('#thumbs').carouFredSel({
                    responsive: true,
                    circular: false,
                    infinite: false,
                    auto: false,
                    prev: '#prev',
                    next: '#next',
                    items: {
                        visible: {
                            min: 1,
                            max: 6
                        },
                        width: 200,
                        height: '80%'
                    }
                });
                $('#thumbs a').click(function () {
                    $('#carousel').trigger('slideTo', '#' + this.href.split('#').pop());
                    $('#thumbs a').removeClass('selected');
                    $(this).addClass('selected');
                    return false;
                });
            });
        });

    </script>

    <script>
        $(window).load(function () {
            $('.shop').flexslider({
                animation: "slide",
                animationLoop: false,
                controlNav: false,
                maxItems: 1,
                pausePlay: false,
                mousewheel: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });





            $('.ongoing-projects').flexslider({
                animation: "slide",
                animationLoop: false,
                slideShow: false,
                controlNav: false,
                maxItems: 1,
                pausePlay: false,
                mousewheel: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });

        });
        $(document).ready(function () {
            jQuery("#layerslider,#layerslider2,#layerslider3").layerSlider({
                responsive: true,
                responsiveUnder: 1280,
                layersContainer: 1170,
                skin: 'fullwidth',
                hoverPrevNext: true,
                skinsPath: 'layerslider/skins/'
            });
        });
    </script>
</head>
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
                        <li><a href="contact.html">Contact</a></li>
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
                        <li><a href="contact.html">Contact</a></li>
                </ul>
            </div> 

        </div>
        <div id="layerslider-container-fw">
            <div id="layerslider" style="width: 80%; height: 530px; margin: 0px auto; ">

                <div class="ls-slide" data-ls="transition3d:53; timeshift:-1000;">			
                    <img src="images/slider/slide1.png" class="ls-bg" alt="Slide background">
                    <p class="ls-l slide1"	style="top: 330px; left:248px; font-family:roboto; font-size:13px; color:#fefefe;" data-ls="delayin:1000; scalein:4; durationin : 1000;"> <span>Participants</span> of participants at the GBC meeting, 2019 </p>
                </div><!-- Slide1 -->

                <div class="ls-slide" data-ls="transition3d:12;timeshift:-1000;">			
                    <img src="images/slider/slide2.png" class="ls-bg" alt="Slide background">

                    <h5 class="ls-l slide3" style="top:319px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:3px;" data-ls="offsetxin:0; scalexin:0; scaleyin:0; offsetxout:0; offsetyout:top; durationin:1500; durationout:800; delayin:1000; showuntil:3000;fadeout:false;">
                        Participants of <span>GBC,2019 </span> meeting posing for mores pictures</h5>
                </div><!-- Slide2 -->

                <div class="ls-slide" data-ls="transition3d:35;timeshift:-1000;">			
                    <img src="images/slider/slide3.png" class="ls-bg" alt="Slide background">

                    <span class="ls-l slide3-subtitle" style="top: 248px; left:160px; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px;" data-ls="offsetxin:0;offsetyin:bottom;durationin:1500;delayin:1200;easingin:easeInOutQuart;fadein:false;scalexin:0;scaleyin:0;offsetxout:0;offsetyout:top;durationout:1000;fadeout:false;">GBC Workshop  <i style="font-style:normal; color:#373737;">Ongoing</i></span>

                </div><!-- Slide3 -->


                <div class="ls-slide" data-ls="transition3d:75;timeshift:-1000;">			
                    <img src="images/slider/slide4.png" class="ls-bg" alt="Slide background">


                    <span class="ls-l slide4-subtitle" style="top:280px; left:215px;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px;" data-ls="offsetxin:bottom;durationin:2000;delayin:1500;easingin:easeInOutQuart;fadein:false;scalexin:100;scaleyin:0;offsetxout:right;durationout:1400;fadeout:false;">Interactions of participants during coffee at the GBC meeting</span>


                </div><!-- Slide4 -->

                <!--		 <div class="ls-slide" data-ls="transition3d:63;timeshift:-1000;">			
                                     <img src="images/slider/prof.png" class="ls-bg" alt="Slide background">
                                        <h3 class="ls-l slide5" style="top:80px; left:670px; font-family:open sans; font-size:36px; font-weight:700; color:#FFF;"  data-ls="offsetxin:0;offsetyin:top;durationin:750;delayin:1000;easingin:easeOutQuart;fadein:false;offsetxout:right;durationout:1000;easingout:easeInQuart;fadeout:false;">HBHL  WORKSHOP</h3>
                                        </div> Slide5 -->


            </div>
        </div>
        <!--Responsive header-->
        <section class="block  ">
            <div class="container">
                <div class="row" style="background-color: #dc4b3a; text-align: justify; color: white;padding-top: 10px">
                    <div class="col-md-4 pull-left " >
                        <div class="sec-heading">
                            <h2 style=" color: white"><strong style=" color: white" >GCB</strong> Chairs</h2>
                        </div>


                        <div class="our-project-box ">
                            <div class="row">
                                <section class="element" id="alignedimages">

                                    <div class="row">
                                        <div class="col-md-6 aligned center">
                                            <img class="" src="images/thumbs/allainevans.png" alt="" />
                                            <h5 style=" color: white" >Alan Evans,Co-Chair</h5>

                                        </div>
                                        <div class="col-md-6 aligned center">
                                            <img class="" src="images/thumbs/pedro.png" alt="" />				
                                            <h5 style=" color: white">Pedro Valdes-Sosa, Co-Chair</h5>

                                        </div>

                                    </div>

                                </section>
                            </div>
                        </div><!-- Projects -->
                    </div>
                    <div class="col-md-8">
                        <div class="sec-heading">
                            <h2 style=" color: white" ><strong style=" color: white" >1<sup>st</sup> Annual Congress's Welcome</strong> Message</h2>
                        </div><!-- Section Title -->
                        <p>On behalf of our entire Steering Committee, it is a pleasure to welcome you all to the inaugural meeting of the Global Brain Consortium (GBC). Numerous workshops in recent years on the topic prove that there is considerable appetite for the creation of transnational neuroscience networks that will allow us to tackle some of biggest questions in neuroscience. Recent advances in information technology to mediate data-sharing, dedicated support from funders, and a burgeoning culture of Open Science offer new hope for meaningful scientific engagement on an international scale. However, bringing scientists across the globe together to work collectively has been difficult - for a variety of technical, logistical, ethical and sociopolitical reasons. We must work together – scientists, technology developers and funders - to devise the strategies that can make this happen. This is why we have come together here today  
                            <a href="gbc2019.php" class="highlight rounded"><span  style="background-color: white; color: #dc4b3a">View More</span></a>
                        </p>
                       <!-- <p>Finding a place to begin that provides an opportunity for us to have a scientific focus, tackle major technological challenges and enhance global impact is a delicate balancing act. Modern neuroscience has a considerable arsenal of theoretical, modelling and neuroimaging technologies, but many of these devices are not readily available in Lower- and Middle-Income Countries (LMIC). Fortunately, access to an array of digital and neuro-technologies, enhanced in recent years thanks to the investment of the Big Brain initiatives, may allow us to cross this critical divide. This in turn will open collaborative opportunities for neuroscientists and clinicians in LMIC who have been somewhat marginalized from previous efforts in global collaboration. This was the focus of a first meeting of international Brain Projects with the World Health Organization in Geneva in 2016, regarding health care to underserved populations around the world. The GBC Steering Committee now seeks to level the playing field by creating an ecosystem where we can learn from each other. </p>		
                        <p>We have elected to begin this venture with EEG, a technique that allows us to study dynamic brain states in consciousness, sleep, anesthesia, and across multiple brain disorders. EEG has exquisite temporal resolution in quantifying brain states, and is broadly used internationally. We believe it is an excellent use case that will lay the groundwork for a new global neuroscience collaborative ecosystem - tackling complex issues of international best practices and data-sharing, fostering global precision mental health and reducing the global burden of brain disorders. Our current efforts are based upon and considerably expand the Canada-Cuba-China collaboration that has received support from the Quebec, Cuban, and Chinese governments. It has initiated the construction, within the framework of Canadian Open Neuroscience Platform (CONP), of an accessible neuroinformatics platform that not only includes EEG but also is conceived to make possible full engagement from all countries regardless of their economic setting. </p>				
                        <p>We are deeply grateful to the Ludmer Foundation and the Healthy Brains for Healthy Lives initiative at McGill University for their support for this inaugural GBC workshop and the vision of a global neuroscience network. </p>-->
                    </div>



                </div>
            </div>
        </section>			



        <section class=" remove-top block">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="sec-heading">
                            <h2><strong>Steering </strong> Committee</h2>
                        </div>

                        <div class="gallery-image">

                            <img   src="images/news/ct.png" alt="" />
                            <span>GCB Steering Committee</span>

                        </div>
                        
                        <section class="block ">
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
                    <div class="col-md-3">
                        <div class=" row">
                            <div class="sec-heading">
                                <h2><strong>Upcoming</strong> Workshops</h2>
                            </div>	

                            <div class="upcoming-event">
                                <a href="gbc2019.php"> <img height="173" src="images/thumbs/b.png" alt="" /></a>
                                <h5><a href="gbc2019.php">GCB Workshop 2020 </a></h5>
                                <ul>
                                    <li><a href="#" title=""><i class="icon-map-marker"></i> Location here</a></li>
                                    <li><a href="#" title=""><i class="icon-calendar"></i>9-10 May 2020</a></li>
                                </ul>
                            </div>	
                        </div>
                        <div class=" block row">
                            <div class="sec-heading">
                                <h2><strong>Previous</strong> Workshops</h2>
                            </div>	

                            <div class="upcoming-event">
                                <a href="gbc2019.php"> <img height="173" src="images/thumbs/b1.png" alt="" /></a>
                                <h5><a href="gbc2019.php">GCB Workshop 2019 Program</a></h5>
                                <ul>
                                    <li><a href="#" title=""><i class="icon-map-marker"></i>Montreal Memorial Institute</a></li>
                                    <li><a href="#" title=""><i class="icon-calendar"></i>9-10 May 2019</a></li>
                                </ul>
                            </div>	
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="block remove-top">
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


    <div class="footer-bottom" style="background-color: #dc4b3a">
        <div class="container">
            <p>Copyright © 2019 Global Brain Consortium. <span>All rights reserved.</span> </p>


        </div>
    </div><!-- Bottom Footer Strip -->

</body>
</html>
