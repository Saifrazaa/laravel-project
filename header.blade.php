<html>
<head>
<title>
    @yield('title')
</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Custom CSS-->
    <link href="bootstrap/css/general.css" rel="stylesheet">
    
     <!-- Owl-Carousel -->
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <link href="bootstrap/css/owl.carousel.css" rel="stylesheet">
    <link href="bootstrap/css/owl.theme.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/animate.css" rel="stylesheet">
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="bootstrap/css/magnific-popup.css"> 
    
    <script src="bootstrap/js/modernizr-2.8.3.min.js"></script> 
</head>
<body>
<nav class="navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">INTERNO</a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="menuItem"><a href="/interno">HOME</a></li>
                  
                    <li class="menuItem"><a href="/interno/register">SIGN UP</a></li>
                    <li class="menuItem"><a href="#credits">CONTACT US</a></li>
                    <li class="menuItem"><a href="#contact">OUR BLOG</a></li>
                      <li class="menuItem"><a href="/interno/login">@yield('login')</a></li>
                                          <li class="menuItem"><a href="/interno/login">@yield('dashboard')</a></li>


                </ul>
            </div>
           
        </div>
    </nav> 
    @section('body')
    @show
    </body>
   
    </html>