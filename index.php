<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Designers Sri Lanka</title>


        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />

        <link rel="stylesheet" type="text/css" href="css/theme.css" />

        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie7.css"/>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />


        <link rel="stylesheet" href="css/preloader.css">
        <script src="js/modernizr-2.6.2.min.js"></script>


        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />


        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    
    <body>

        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>



        <div class="navbar hidden">

            <div id="topbar" class="clearfix" style="background-color: rgb(6, 59, 128)">
                <div class="container">
                    <div class="span5">
                        <ul class="top-soc-small social">
                            <li><a class="soc-facebook" href="#"></a></li>
                            <li><a class="soc-twitter" href="#"></a></li>
                            <li><a class="soc-google" href="#"></a></li>
                            <li><a class="soc-pinterest" href="#"></a></li>
                            <li><a class="soc-linkedin" href="#"></a></li>
                            <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <div class="span7">
                        <div class="menu-top-menu-container">
                            <ul id="top-menu" class="top-menu clearfix">
                                <li class=""><i class="fa fa-phone"></i><a href="tel:+94779190673" class="tp-small"> 077-9190673</a></li>
                                <li class=""><i class="fa fa-phone"></i><a href="tel:+9476-6755645" class="tp-small"> 076-6755645</a></li>
                                <li class=""><i class="fa fa-envelope"></i><a href="mailto:info@webdesignerssrilanka.lk" class="top-address"> info@webdesignerssrilanka.lk</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>



            <div class="navbar-inner">
                <div class="container">

                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">






                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#clients">Clients</a></li>
                            <li><a href="#price">Price</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>













        <!-- Start home section -->
            <div id="home">
                <!-- Start cSlider -->
                <div id="da-slider" class="da-slider">
                    <div class="triangle"></div>
                    <!-- mask elemet use for masking background image -->
                    <div class="mask"></div>
                    <!-- All slides centred in container element -->
                    <div class="container">
                        <!-- Start first slide -->

                        <?php
                        $heading_2 = array(
                                            'Web Designing',
                                            'Web Developing',
                                            'Customer Satisfaction',
                                            'Launching',
                                            'Clients',
                                            'Mobile',
                                            'Devices',
                                            'Technologies');

                        $heading_4 = array(
                                            'We make Eye Catching Elegant Designs',
                                            '',
                                            'We guaranteed 100% customer satisfaction',
                                            'Make Your Website Live',
                                            'Project Scale',
                                            'Mobile  Comfortable Web Apps',
                                            'Responsive Web Designs',
                                            'latest technologies');

                        $paragraph = array(
                                            'Elegant and beautiful design is the key thing that seek attention of visitors.',
                                            'We are developing various kind of web applications from simple solutions to large scale projects.',
                                            '',
                                            'We are our unique knowledge and experience to make launch your web site as soon as possible.',
                                            'We have very well experienced working with the clients offered small and also large scale projects.',
                                            'We make web apps that 100% comfortable with all mobile devices.',
                                            'we are using Clean & responsive web design techniques to make your web site work with various devices.',
                                            'We are using latest web technologies such as HTML5, CSS3, JAVASCRIPT(ES 5), PHP 5.6, MYSQL 5.7 .....');

                        $imgNo = array(2,24,7,9,17,5,13,25);

                        for ($i=0;$i<8;$i++)
                        {
                            ?>
                            <div class="da-slide">
                                <h2 class="fittext2"><?php echo $heading_2[$i];?></h2>
                                <h4><?php echo $heading_4[$i];?></h4>
                                <p><?php echo $paragraph[$i];?></p>
<!--                                <a href="#" class="da-link button">Read more</a>-->
                                <div class="da-img">

                                    <img src="images/slider/<?php echo $imgNo[$i];?>.png" alt="image01" width="480">

                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- End first slide -->

                        <!-- Start second slide
                        <div class="da-slide">
                            <h2>Easy management</h2>
                            <h4>Easy to use</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <a href="#" class="da-link button">Read more</a>
                            <div class="da-img">
                                <img src="images/Slider02.png" width="320" alt="image02">
                            </div>
                        </div>-->
                        <!-- End second slide -->
                        <!-- Start third slide
                        <div class="da-slide">
                            <h2>Revolution</h2>
                            <h4>Customizable</h4>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            <a href="#" class="da-link button">Read more</a>
                            <div class="da-img">
                                <img src="images/Slider03.png" width="320" alt="image03">
                            </div>
                        </div>-->
                        <!-- Start third slide -->
                        <!-- Start cSlide navigation arrows -->
                        <div class="da-arrows">
                            <span class="da-arrows-prev"></span>
                            <span class="da-arrows-next"></span>
                        </div>
                        <!-- End cSlide navigation arrows -->
                    </div>

                </div>
            </div>
            <!-- End home section -->


            <!-- Service section start -->
            <div class="section primary-section" id="service">

                <div class="container">
                    <!-- Start title section -->
                    <div class="title">
                        <h1>Our Services</h1>
                        <!-- Section's title goes here -->
                        <p style="text-align: justify;">We provide various kind of services according to your neeeds.Below Shows Categorized view providing services.Our main target is provide full Customer satisfaction</p>
                        <!--Simple description for section goes here. -->
                    </div>
                    <div class="row-fluid">
                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service2.png" alt="service 2" />
                                </div>
                                <h3>Web Design</h3>
                                <p>
                                    We Create Eye catching, elegant unique designs. Because elegant and beautiful design
                                    is the key thing that seek attention of visitors.
                                </p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service6.png" alt="service 3">
                                </div>
                                <h3>Web Development</h3>
                                <p>We are developing web applications from simple solutions to large scale projects.
                                    For our solutions we are using industry's latest web technologies</p>
                            </div>
                        </div>
                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service4.png" alt="service 1">
                                </div>
                                <h3>Search Engine Optimization</h3>
                                <p>Always We starting the SEO process before creating a website, and then step by step,
                                    we are optimizing the content on the website</p>
                            </div>
                        </div>


                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service3.png" alt="service 3">
                                </div>
                                <h3>Mobile Application</h3>
                                <p>In these days mobile applications are acting major role in technology world.
                                    therefore for aiming the success of your business we are providing creative mobile
                                    application solutions.
                                </p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service1.png" alt="service 1">
                                </div>
                                <h3>Social Bookmarking</h3>
                                <p>We enables users to add, annotate, edit, and share bookmarks of web documents. </p>
                            </div>
                        </div>

                        <div class="span4 serviceDiv">
                            <div class="centered service">
                                <div class="circle-border_ zoom-in">
                                    <img class="img-circle" src="images/service5.png" alt="service 2" />
                                </div>
                                <h3>Branding & Logo Design</h3>
                                <p>A logo is the thing that gives the first most impression about your whole business to the
                                    customer. Keep that in mind, we are providing creative and beautiful Brandings & Logo Designs
                                    for your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service section end -->
            <!-- Portfolio section start -->
            <div class="section secondary-section " id="portfolio">
                <!--<div class="qqqqq" style="">-->
                <div class="triangle"></div>
                <div class="container">
                    <div class=" title">
                        <h1>Here is Our Recent Works</h1>
<!--                        <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>-->
                    </div>
                    <ul class="nav nav-pills">
                        <li class="filter" data-filter="all">
                            <a href="#noAction">All</a>
                        </li>
                        <li class="filter" data-filter="webdesign">
                            <a href="#noAction">Web Design</a>
                        </li>
                        <li class="filter" data-filter="webdevelopment">
                            <a href="#noAction">Web Development</a>
                        </li>
                        <li class="filter" data-filter="identity">
                            <a href="#noAction">Identity</a>
                        </li>
                    </ul>

                    <!-- Start details for portfolio project 1 -->
                    <div id="single-project">
                        <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-01.png" alt="project 1" />-->
                                <img class="lazy" data-original="images/portfolio/po-01.png" alt="project 1">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Website for Olinco Engineering</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Olinco Engineering</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.olincoengineering.com" target="_blank">www.olincoengineering.com</a></div>
                                    </div>
                                    <p>
                                        Olinco Engineering is steel building construction contractor in Sri Lanka
                                        through the quality and speedy constructions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 1 -->
                        <!-- Start details for portfolio project 2 -->
                        <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-02.png" alt="project 2">-->
                                <img class="lazy" data-original="images/portfolio/po-02.png" alt="project 2">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Yala Tusker Safari</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Yala Tusker Safari</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.yalatuskersafari.com" target="_blank">www.yalatuskersafari.com</a></div>
                                    </div>
                                    <p>
                                        Yala Tusker Safari, is a safari jeep service initiated with the intention of providing
                                        tourists visiting down south of Sri Lanka an unforgettable experience in Yala, Bundala,
                                        Udawalawa national parks
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 2 -->
                        <!-- Start details for portfolio project 3 -->
                        <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-03.png" alt="project 3">-->
                                <img class="lazy" data-original="images/portfolio/po-03.png" alt="project 3">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for MAS Consolidated</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>MAS Consolidated</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.masconsolidated.com" target="_blank">www.masconsolidated.com</a></div>
                                    </div>
                                    <p>
                                        MAS Consolidated exclusive agent in Colombo for ASIA FOWRADING - Maldives & CF Freight
                                        India to secure all the traffic from Maldives to and India.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 3 -->
                        <!-- Start details for portfolio project 4 -->
                        <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-04.png" alt="project 4">-->
                                <img class="lazy" data-original="images/portfolio/po-04.png" alt="project 4">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Pinehill</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Pinehill</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.pinehilltea.com" target="_blank">www.pinehilltea.com</a></div>
                                    </div>
                                    <p>
                                        Pinehill tea factory has been producing Sri Lankan tea for over 30 years,
                                        situated across the lush Sinharaja forest. The Pinehill tea factory specializes
                                        in the production of Ceylon orthodox black tea.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 4 -->
                        <!-- Start details for portfolio project 5 -->
                        <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-05.png" alt="project 5">-->
                                <img class="lazy" data-original="images/portfolio/po-05.png" alt="project 5">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Lanka CCTV</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Lanka CCTV</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.lankacctv.biz" target="_blank">www.lankacctv.biz</a></div>
                                    </div>
                                    <p>Lanka CCTV is leading provider in CCTV cameras and Home security equipments.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 5 -->
                        <!-- Start details for portfolio project 6 -->
                        <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-06.png" alt="project 6">-->
                                <img class="lazy" data-original="images/portfolio/po-06.png" alt="project 6">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste Luxuary Tours Sri Lanka</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Luxuary Tours Sri Lanka</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span>Under Construction</div>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 6 -->
                        <!-- Start details for portfolio project 7 -->
                        <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-08.png" alt="project 7">-->
                                <img class="lazy" data-original="images/portfolio/po-07.png" alt="project 7">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Logo for SteelFab</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>SteelFab</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span>-</div>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 7 -->
                        <!-- Start details for portfolio project 8 -->
                        <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                            <div class="span6">

                                <img class="lazy" data-original="images/portfolio/po-08.png" alt="project 8">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Creative Brands</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Creative Brands</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.creativebrands.lk" target="_blank">www.creativebrands.lk</a></div>
                                    </div>
                                    <p>
                                        Creative Brands is a promotional & creative clothing manufacturing
                                        company which established in 2014 aiming the blooming market of promotional
                                        products for all occasions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 8 -->

                        <!-- Start details for portfolio project 9 -->
                        <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-09.png" alt="project 9">-->
                                <img class="lazy" data-original="images/portfolio/po-09.png" alt="project 9">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Raklo</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Some Client Name</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.raklo.lk" target="_blank">www.raklo.lk</a></div>
                                    </div>
                                    <p>
                                        Raklo doors and windows , that take you to inner depths in doors and
                                        window designs, have a great finish.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 9 -->

                        <!-- Start details for portfolio project 10 -->
                        <div id="slidingDiv9" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-10.png" alt="project 10">-->
                                <img class="lazy" data-original="images/portfolio/po-10.png" alt="project 10">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Speedee</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Speedee</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.speedee.lk" target="_blank">www.speedee.lk</a></div>
                                    </div>
                                    <p>
                                        Speedee.lk is a speedy and accurate on time delivery service launched in
                                        2015 from a targeted case study done on speedy deliveries as per our valued
                                        customer segments and focus on maintaining a valued and happy blue chip
                                        customer base in the near future.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 10 -->

                        <!-- Start details for portfolio project 11 -->
                        <div id="slidingDiv10" class="toggleDiv row-fluid single-project">
                            <div class="span6">
<!--                                <img src="images/portfolio/_po-11.png" alt="project 11">-->
                                <img class="lazy" data-original="images/portfolio/po-11.png" alt="project 11">
                            </div>
                            <div class="span6">
                                <div class="project-description">
                                    <div class="project-title clearfix">
                                        <h3>Webste for Vision Works</h3>
                                        <span class="show_hide close">
                                            <i class="icon-cancel"></i>
                                        </span>
                                    </div>
                                    <div class="project-info">
                                        <div><span>Client</span>Vision Works</div>
<!--                                        <div><span>Date</span>July 2013</div>-->
<!--                                        <div><span>Skills</span>HTML5, CSS3, JavaScript</div>-->
                                        <div><span>Link</span><a href="http://www.visionworkslk.com" target="_blank">www.visionworkslk.com</a></div>
                                    </div>
                                    <p>
                                        Vision Works was incorporated in 1995 as a Production unit
                                        to facilitate the production of Advertising films, Documentaries
                                        and any other content for Television or Theatres.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End details for portfolio project 11 -->

                        <ul id="portfolio-grid" class="thumbnails row">
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-01.png" alt="project 1">-->
                                    <img class="lazy" data-original="images/portfolio/po-01.png" alt="project 1">
                                    <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Olinco Engineering</h3>
                                    <p><a href="http://www.olincoengineering.com" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-02.png" alt="project 2">-->
                                    <img class="lazy" data-original="images/portfolio/po-02.png" alt="project 2">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Yala Tusker Safari</h3>
                                    <p><a href="http://www.yalatuskersafari.com" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-03.png" alt="project 3">-->
                                    <img class="lazy" data-original="images/portfolio/po-03.png" alt="project 3">
                                    <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>MAS Consolidated</h3>
                                    <p><a href="http://www.masconsolidated.com" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-04.png" alt="project 4">-->
                                    <img class="lazy" data-original="images/portfolio/po-04.png" alt="project 4">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Pinehill</h3>
                                    <p><a href="http://www.pinehilltea.com" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-05.png" alt="project 5">-->
                                    <img class="lazy" data-original="images/portfolio/po-05.png" alt="project 5">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Lanka CCTV</h3>
                                    <p><a href="http://www.lankacctv.biz" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-06.png" alt="project 6">-->
                                    <img class="lazy" data-original="images/portfolio/po-06.png" alt="project 6">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Luxuary Tours Sri Lanka</h3>
                                    <p class="gotowebsite">Under Construction</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix identity">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-08.png" alt="project 7" />-->
                                    <img class="lazy" data-original="images/portfolio/po-07.png" alt="project 7">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Steel Fab</h3>
                                    <p class="gotowebsite">Steel Fab Logo</p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-07.png" alt="project 8">-->
                                    <img class="lazy" data-original="images/portfolio/po-08.png" alt="project 8">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Creative Brands</h3>
                                    <p><a href="http://www.creativebrands.lk" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                            <li class="span4 mix webdesign">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-09.png" alt="project 9">-->
                                    <img class="lazy" data-original="images/portfolio/po-09.png" alt="project 9">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Raklo</h3>
                                    <p><a href="http://www.raklo.lk" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>

                            <li class="span4 mix webdevelopment">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-10.png" alt="project 9">-->
                                    <img class="lazy" data-original="images/portfolio/po-10.png" alt="project 10">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv9">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Speedee</h3>
                                    <p><a href="http://www.speedee.lk" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>

                            <li class="span4 mix webdesgn">
                                <div class="thumbnail">
<!--                                    <img src="images/portfolio/po-11.png" alt="project 9">-->
                                    <img class="lazy" data-original="images/portfolio/po-11.png" alt="project 11">
                                    <a href="#single-project" class="show_hide more" rel="#slidingDiv10">
                                        <i class="icon-plus"></i>
                                    </a>
                                    <h3>Vision Works</h3>
                                    <p><a href="http://www.visionworkslk.com" class="gotowebsite" target="_blank">Go to Website</a></p>
                                    <div class="mask"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            <!--</div>--><div class="triangle4"></div>
            </div>
            <!-- Portfolio section end -->


            <!-- About us section start -->
            <div class="section primary-section" id="about">

                <div class="container">

                    <div class="title">
                        <h1>About Us</h1>
                        <p style="text-align: justify">Web Designers Sri Lanka is a locally based web design and development company. We specialize
                            in creating websites that build company profiles, utilizing a range of online marketing strategies
                            and web technologies. We provide extensive experience in search engine optimization and search engine
                            marketing. We also specialize in website traffic analysis. We are keen advocates for mobile responsive
                            web design, web accessibility best practice and cross browser compatibility in order to optimize the
                            end user experience.
                        </p>

                        <h1>Our Mission</h1>
                        <p style="text-align: justify">We aim to provide long-lasting strategies that build on your businesses
                            bottom-line, reduce costs and maximize return on investment. The initial goal of any website design
                            is to create a strong online presence that connects with your audience. We are helping our clients
                            to realize value from online media. Our team will design, develop and execute our client's objectives
                            by integrating web solutions, mobile applications. If you would like us to assist you in building a
                            strong online presence for your business, please contact Web Designers Sri Lanka on <a href="tel:+94779190673" class="tp-small">&nbsp;&nbsp;077-9190673</a>&nbsp;&nbsp;or
                            <a href="tel:+9476-6755645" class="tp-small">&nbsp;&nbsp;076-6755645</a>.
                        </p>
                    </div>




                    <div class="title">
                        <h1>Where Are We Located</h1>
                        <p style="text-align:justify; ">We are a web Design & web Development
                            Company with offices colombo and kandy in sri lanka.</p>
                    </div>
                    <div class="locations">
                        <div class="row-fluid team">
                            <div class="span4" id="first-place">
                                <div class="thumbnail">
                                    <img class="lazy" data-original="images/colombo.jpg" alt="team 1">
                                    <h3>Colombo</h3>

                                    <div class="mask">
                                        <h2>Colombo</h2>
                                        <p style="font-weight: bold;">Our Head Office is Located on Colombo <br>Call Us <a href="tel:+94779190673" style="color:#fff">&nbsp;&nbsp;077-9190673</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="span4" id="second-place">
                                <div class="thumbnail">
                                    <img class="lazy" data-original="images/kandy.jpg" alt="team 2">
                                    <h3>Kandy</h3>

                                    <div class="mask">
                                        <h2>Kandy</h2>
                                        <p style="font-weight: bold;">We also have Branch in kandy <br>Call Us <a href="tel:+94766755645" style="color:#fff">&nbsp;&nbsp;076-6755645</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>

                </div>
            </div>
            <!-- About us section end -->

            <div class="section third-section" id="clients">
                <div class="triangle"></div>
                <div class="container centered">
                    <div class="sub-section">
                        <div class="title clearfix">
                            <div class="pull-left">
                                <h3>Our Clients</h3>
                            </div>
                            <ul class="client-nav pull-right">
                                <li id="client-prev"></li>
                                <li id="client-next"></li>
                            </ul>
                        </div>
                        <ul class="row client-slider" id="clint-slider">
                            <li>
                                <a href="">
                                    <img src="images/clients/c-1.png" alt="client logo 1">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-2.png" alt="client logo 2">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-3.png" alt="client logo 3">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-4.png" alt="client logo 4">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-5.png" alt="client logo 5">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-6.png" alt="client logo 6">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-7.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-8.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-9.png" alt="client logo 7">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clients/c-10.png" alt="client logo 7">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><div class="triangle3"></div>

            </div>
            <!-- Price section start -->
            <div id="price" class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Price</h1>
                        <p style="text-align: justify;">Our Web Design Packages Starting at Rs <strong>20,000</strong>.
                            A great conversion-based web design is very powerful
                            and will greatly help you rank and grow your business,
                            which is why customers are constantly approaching our
                            creative and market-leading Web designers Sri Lanka team
                            to create unique and eye-catching designs for their websites
                            because they know great designs can instantly grab the attention
                            website visitors
                        </p>
                    </div>

                    <div class="price-table-parent">
                        <div class="price-table row-fluid">
                            <div class="span3 price-column">
                                <h3>Starter</h3>
                                <ul class="list">
                                    <li class="price"><strong>Rs 20,000/=</strong></li>
                                    <li><strong>5 Web Pages</strong></li>
                                    <li><strong>Free One Year Web Hosting</strong></li>
                                    <li><strong>3 E-mail Accounts</strong></li>
                                    <li><strong>Photo Gallery</strong></li>
                                    <li><strong>Contact US form</strong></li>
                                    <li><strong>Basic SEO</strong></li>
                                    <li><strong>-</strong></li>
                                    <li><strong>-</strong></li>
                                </ul>
                                <a href="#contact-form" class="button button-ps">Order Now</a>
                            </div>
                            <div class="span3 price-column">
                                <h3>Premium</h3>
                                <ul class="list">
                                    <li class="price"><strong>Rs 40,000/=</strong></li>
                                    <li><strong>10 Web Pages</strong></li>
                                    <li><strong>Responsive design</strong></li>
                                    <li><strong>Free One Year Web Hosting</strong></li>
                                    <li><strong>5 E-mail Accounts</strong></li>
                                    <li><strong>Photo Gallery</strong></li>
                                    <li><strong>Contact US form</strong></li>
                                    <li><strong>Basic SEO</strong></li>
                                    <li><strong>-</strong></li>
                                </ul>
                                <a href="#contact-form" class="button button-ps">Order Now</a>
                            </div>
                            <div class="span3 price-column">
                                <h3>Business</h3>
                                <ul class="list">
                                    <li class="price"><strong>Rs 65,000/=</strong></li>
                                    <li><strong>Unlimited Web Pages</strong></li>
                                    <li><strong>CMS Website</strong></li>
                                    <li><strong>Responsive design</strong></li>
                                    <li><strong>Free One Year Web Hosting</strong></li>
                                    <li><strong>10 E-mail Accounts</strong></li>
                                    <li><strong>Video & Photo Galleries</strong></li>
                                    <li><strong>Contact US form</strong></li>
                                    <li><strong>Basic SEO</strong></li>

                                </ul>
                                <a href="#contact-form" class="button button-ps">Order Now</a>
                            </div>
                            <div class="span3 price-column">
                                <h3>Enterprise</h3>
                                <ul class="list">
                                    <li class="price"><strong>Rs 80,000/=</strong></li>
                                    <li><strong>Unlimited Web Pages</strong></li>
                                    <li><strong>Category Based CMS</strong></li>
                                    <li><strong>Responsive design</strong></li>
                                    <li><strong>Free One Year Web Hosting</strong></li>
                                    <li><strong>10 E-mail Accounts</strong></li>
                                    <li><strong>Video & Photo Galleries</strong></li>
                                    <li><strong>Contact US form</strong></li>
                                    <li><strong>Basic SEO</strong></li>

                                </ul>
                                <a href="#contact-form" class="button button-ps">Order Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="centered custom-plans-div">
                        <p class="price-text">We Offer Custom Plans. Contact Us For More Info.</p>
                        <a href="#contact-form" class="button">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Price section end -->



        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Contact Web Designers Sri Lanka</h1>
                        <p style="text-align: justify;">Web designers srilanka create a custom solution specific to your online business needs.
                            We specialize in providing high quality web design services for local professional businesses.
                            We are passionate online business builders who specialize in quality design, web development,
                            Mobile app development, online marketing and online publishing. Please view some examples of
                            our most recent projects. If you are looking for quality professional website services or if
                            you have a question about our website design services, please give us a Call on <a href="tel:+94779190673" class="tp-small">&nbsp;&nbsp;077-9190673</a>&nbsp;&nbspor
                            <a href="tel:+9476-6755645" class="tp-small">&nbsp;&nbsp;076-6755645</a>
                        </p>
                    </div>
                </div>
                <div class="map-wrapper">
                    <div class="triangle1"></div>
                    <div class="map-canvas" id="map-canvas">Loading map...</div>

                    <div class="container">
                        <div class="row-fluid">
                            <div class="span5 contact-form centered">
                                <h3 style="color: #052C5F !important;">Submit Your Inquiry</h3>
                                <div id="successSend" class="alert alert-success invisible">
                                    <strong>Well done!</strong> Your message has been sent. We will be in touch with you shortly.<br /><br />
                                    <strong>Thank you.</strong></div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" action="mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="Your Name" />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="Your Email" />
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="tel" name="phone" id="phone" placeholder="Your Phone number" />
                                            <div class="error left-align" id="err-phone">Please enter valid phone number.</div>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="Your Message"></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">

                        <div class="title">
                        <h3>Our Contact details</h3>
                        </div>


                        <address>Web Designers Sri Lanka, Oceanview Tower, Colombo 04, Sri Lanka</address>

                        <a href="mailto:info@webdesignerssrilanka.lk" class="info-mail">info@webdesignerssrilanka.lk</a>

                        <br><a href="tel:+94779190673">077-9190673</a>

                        <br><a href="tel:+9476-6755645">076-6755645</a>

                        <div class="title">
                            <h3>Are you ready to start with us?</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">

                        <ul class="soc social">
                            <li><a class="soc-facebook" href="#"></a></li>
                            <li><a class="soc-twitter" href="#"></a></li>
                            <li><a class="soc-google" href="#"></a></li>
                            <li><a class="soc-pinterest" href="#"></a></li>
                            <li><a class="soc-linkedin" href="#"></a></li>
                            <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->



        <!-- Footer section start -->
        <div style="background: #005C97;background: -webkit-linear-gradient(to left, #01548A , #10264A);background: linear-gradient(to left, #01548A , #10264A);">
            <div class="triangle2"></div>
            <footer class="footer-distributed">

                <div class="footer-left">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>


                    <ul class="footer-links">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#service">SERVICES</a></li>
                        <li><a href="#portfolio">PORTFOLIO</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#clients">CLIENTS</a></li>
                        <li><a href="#price">PRICE</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>



                    <div class="footer_company_name">Web Designers Sri Lanka &copy; 2016</div>

                </div>

                <div class="footer-center">

                    <div class="clearfix">
                        <i class="fa fa-map-marker" style="float: left;"></i>
                        <address style="float: left;padding:0px 10px;color: #fff;font-family: 'Lato', sans-serif;">Web Designers Sri Lanka,<br> Oceanview Tower,<br> Colombo 04,<br> Sri Lanka</address>
                    </div>


                    <div>
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:+94779190673">077-9190673</a></p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p><a href="tel:+9476-6755645">076-6755645</a></p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:info@webdesignerssrilanka.lk" class="">info@webdesignerssrilanka.lk</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About The Company</span>
                        Web Designers Sri Lanka is a locally based web design and development company. We specialize in
                        creating websites that build company profiles, utilizing a range of online marketing strategies and
                        web technologies.
                    </p>

                    <div class="footer-icons">
                        <ul class="top-soc-small social">
                            <li><a class="soc-facebook" href="#"></a></li>
                            <li><a class="soc-twitter" href="#"></a></li>
                            <li><a class="soc-google" href="#"></a></li>
                            <li><a class="soc-pinterest" href="#"></a></li>
                            <li><a class="soc-linkedin" href="#"></a></li>
                            <li><a class="soc-skype soc-icon-last" href="#"></a></li>
                        </ul>
                    </div>
                </div>

            </footer>
        </div>
        <!-- Footer section end -->

        <!-- ScrollUp button start -->
        <div class="scrollup hidden">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->



        <!-- Include javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery_lazyload/1.9.7/jquery.lazyload.js"></script>


        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>

        <!-- Load google maps api and call initializeMap function defined in app.js -->

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

        <script type="text/javascript" src="js/app.js"></script>
        <script src="js/preloader.js"></script>




    </body>
</html>