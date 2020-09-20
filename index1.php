<!DOCTYPE html>
<!--
Template Name: Responsive Bootstrap Website by tanzTalks.tech
Author: <a href="https://www.youtube.com/tanztalkstech/>tanzTalks.tech</a>
Author URI: https://www.facebook.com/tanzTalks.tech
Licence: Free to use
-->
<html>
<head>
	<!-- Meta Information -->
    <meta name="author" content="Er. Tanzeel O. Ansari">
    <meta name="description" content="Create Responsive Animated Website using HTML5, CSS3, Bootstrap & JavaScript">

	<!-- Webpage Title -->
    <title>Responsive Bootstrap Website with Animation | Example 8</title>

    <!-- To ensure proper rendering and touch zooming in mobile phones -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CDN for Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">

    <!-- CDN for Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Ubuntu:400,600|Dancing+Script:400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap (CSS) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- "Animate" Plugin to get Animation (But animation will start as soon as page loads) -->
	<link rel="stylesheet" type="text/css" href="styles/animate.min.css">
	<!-- WOW Plugin to Start Animation on Scroll -->
	<script type="text/javascript" src="scripts/wow.min.js"></script>
	<!-- Start WOW() service -->
	<script type="text/javascript">new WOW().init();</script>

	<!-- External CSS Stylesheet -->
    <link href="styles/layout.css" rel="stylesheet" type="text/css">
</head>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--Additional Menu Links And Social Icons-->
        <div class="wrapper bg-white border" id="home">
         <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white p-0">
                <div class="collapse navbar-collapse justify-content-around" id="secondaryNavbar">
                    <!--Links (left side)-->
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a href="#" class="nav-link">
                            <p class="m-0"><small>HOME</small></p>
                        </a>
                        </li>
                        <li class="nav-item px-2">
                        <a href="#" class="nav-link">
                            <p class="m-0"><small>SITEMAP</small></p>
                        </a>
                        </li>
                        <li class="nav-item px-2">
                        <a href="#" class="nav-link">
                            <p class="m-0"><small>ARCHIVE</small></p>
                        </a>
                        </li>
                        <li class="nav-item px-2">
                        <a href="#" class="nav-link">
                            <p class="m-0"><small>CONTACT US</small></p>
                        </a>
                        </li>
                    </ul>
                    <ul class="d-flex social-icon">
                        <li>
                            <a href="#" class="faicon-whatsapp rounded-circle"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="#" class="faicon-twitter rounded-circle"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="faicon-instagram rounded-circle"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="faicon-linkedin rounded-circle"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="faicon-pinterest rounded-circle"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                    <!--Social Icons (right side)-->
                </div>
                </nav>
            </div>
        </div>       
         </div>
        </div>
    <!--Header for Logo/Text-->
        <div class="wrapper  py-3 px-5 text-secondary bg-white" id="header">
        <header class="d-flex flex-row justify-content-between">
<h1 class="d-flex align-items-center">
    <a href="index.html" class="t3">
        HIGH<span class="text-info">BURY</span><span>COLLEGE</span>
    </a>
</h1>
<h2 class="align-self-end">
    <small>One Stop For Web Designing</small>
</h2>
        </header>
        </div>

        <!--Navigation Bar (Menu Bar)-->
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-0" id="mainNavbar">
                 <!--Navbar logo-->
    <a href="#home" class="navbar-brand py-2 px-3">
        <img src="gallery/logo.png" style="height:32px" alt="">
    </a>

     <!--Collapse Button to replace links below 992px wide screen-->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbarContent">
     <span class="navbar-toggler-icon"></span>
    </button>

     <!--Navigation Links-->
     <div class="collapse navbar-collapse justify-content-around" id="mainNavbarContent">
        
        <!--align on left-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#home" class="nav-link px-3">HOME</a>
            </li>
            <li class="nav-item">
                <a href="#services" class="nav-link px-3">SERVICES</a>
            </li>
            <li class="nav-item">
                <a href="#text-over-image" class="nav-link px-3">TEXT-1</a>
            </li>
            <li class="nav-item">
                <a href="#text-overlap-image" class="nav-link px-3">TEXT-2</a>
            </li>
            <li class="nav-item">
                <a href="#testimonials-carousel" class="nav-link px-3">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
                <a href="#news-blog" class="nav-link px-3">NEWS</a>
            </li>
             <!--Link with dropdown-->
             <li class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle px-3" id="navbarDropdpwn" 
                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES</a>
                 <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdpwn">
                     <a href="#" class="dropdown-item">Page-1</a>
                     <a href="#" class="dropdown-item">Page-2</a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">Something Else</a>
                 </div>
             </li>
             <a href="#contact" class="nav-link px-3">CONTACT</a>
        </ul>
        <!--align on right-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link disabled px-3">Login</a>
            </li>
        </ul>    
    </div>
    </nav>
        </div>

         <!--Cover image-->
         <div class="wrapper-overlay" id="cover-image">
             <div class="hor-cen pl-5 ml-5" id="pageintro">
                 <article class="ml-5 pl-5">
                     <h3 class="heading">Bootstrap Website</h3>
                     <p class="text-secondary">Create Your Bootstrap Website</p>
                     <footer class="mt-5 pt-5">
                         <ul class="m-0 p-0"> 
                             <li class="d-inline-block mr-4">
                                 <a href="#" class="btn btn-danger btn-lg">GET STARTED</a>
                             </li>
                             <li class="d-inline-block">
                                <a href="#" class="btn btn-outline-secondary text-white btn-lg">Know More</a>
                            </li>
                         </ul>
                     </footer>

                 </article>

             </div>
         </div>

         <!--Body Container-->
         <div class="container">

              <!--Adding Border-->
              <div class="content-wrapper boder border-light rounded">

                    <!--Services-->
                    <div class="wrapper bg-white text-secondary p-5" id="services">

                    </div>

              </div>
         </div>



    
   
    
    
    
    




















   
    <!-- Bootstrap (JQuery) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Bootstrap Plugin (Popper.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Bootstrap (JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Position BackToTop button after cover image is scrolled up -->
    <script type="text/javascript" src="scripts/jquery.backtotop.js"></script>

    <!-- Make The Navigation Bar fixed on top once the header is scrolled up -->
    <script type="text/javascript" src="scripts/jquery.navbar-fix-top.js"></script>

    <!-- Position Sticky Social Bar after cover image is scrolled up -->
    <script type="text/javascript" src="scripts/jquery.sticky-social-bar.js"></script>
</body>
</html>