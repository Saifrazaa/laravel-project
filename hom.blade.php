 @extends('layout.header')
 @section('title','INTERNO')

 @section('dashboard','YOUR ACCOUNT')
 @section('body')
 @include('contents/partial/message')
 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

   
    <!-- Bootstrap core CSS -->
     <!-- Modernizr /-->
    <!--[if IE 9]>
        <script src="js/PIE_IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/PIE_IE678.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body id="home">

    <!-- Preloader -->
    <!--<div id="preloader">
        <div id="status"></div>
    </div>-->
    
    <!-- FullScreen -->
    <div class="intro-header">
        <div class="col-xs-12 text-center abcen1">
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">INTERNO</h1>
            <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">A Name Of  Responsive Furniture Company</h3>
            <ul class="list-inline intro-social-buttons">
                <li><a href="https://twitter.com/galantiandrea" class="btn  btn-primary mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Twitter</span></a>
                </li>
                <li id="download" ><a href="#downloadlink" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Facebook</span></a>
                </li>
            </ul>
        </div>    
        <!-- /.container -->
        <div class="col-xs-12 text-center abcen wow fadeIn">
            <div class="button_down "> 
                <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="bootstrap/img/icon/circle.png" alt=""> </a>
            </div>
        </div>
    </div>
    
    <!-- NavBar-->
    
    <!-- What is -->
    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h3 style="font-size: 40px">OUR SERVICE GALLERY </h3>
                <hr>
           
                
            </div>
            
            <div class="row">
            
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img class="rotate" src="bootstrap/img/icon/bed.png" height="80px" width="80px" alt="Generic placeholder image">
                  <h3>BED</h3>
                  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>

                  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="bootstrap/img/icon/sofa.png" height="80px" width="80px"  alt="Generic placeholder image">
                   <h3>SOFA</h3>
                   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="bootstrap/img/icon/dining.jpg" height="90px" width="90px"  alt="Generic placeholder image">
                   <h3>DINING TABLE</h3>
                    <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.row -->
                
            <div class="row tworow">
            
                <div class="col-sm-4  wow fadeInDown text-center">
                  <img class="rotate" src="bootstrap/img/icon/table.png" height="80px" width="80px"  alt="Generic placeholder image">
                  <h3>CENTER TABLE</h3>
                  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="bootstrap/img/icon/chairs.png" height="80px" width="80px" alt="Generic placeholder image">
                   <h3>CHAIRS</h3>
                   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="bootstrap/img/icon/safe.jpg" height="80px" width="80px"  alt="Generic placeholder image">
                   <h3>SAFE ALMARI</h3>
                 <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.row -->
        </div>
    </div>
    
    <!-- Use it -->
    <div id ="useit" class="content-section-a">

        <div class="container">
            
            <div class="row">
            
                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="bootstrap/img/c1.jpg" alt="">
                </div>
                
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Special Bed</h3>
                    <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
                        In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
                        Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
                        uam non erat mirum sapientiae lorem cupido
                        patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                    </p>

                     <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
                     <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
                </div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b"> 
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="bootstrap/img/c101.jpg" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="bootstrap/img/c141.jpg" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="bootstrap/img/c5.jpg" alt="">
                            </div>
                        </a>
                    </div>       
                </div>
                
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Sofa Set's</h3>
                    <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
                        In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
                        Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
                        uam non erat mirum sapientiae lorem cupido
                        patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                    </p>

                     <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
                     <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
                </div>              
            </div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
             
                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="bootstrap/img/c41.jpg" alt="">
                </div>
             
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Chairs </h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for 
                    providing the photographs that you see in this template. 
                    </p>
                    
                    <ul class="descp lead2">
                        <li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
                        <li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
                        <li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
                    </ul>
                </div>           
            </div>
        </div>

    </div>

    <!-- Screenshot -->
    <div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
             <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                <h2>Special For You</h2>
                <p class="lead" style="margin-top:0">A special thanks to Our customers.</p>
             </div>
          </div>
            <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
                
                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/c9.jpg" alt="Owl Image">
                    </div>
                </a>
                
               <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/c7.jpg" alt="Owl Image">
                    </div>
                </a>
                
                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/c14.jpg" alt="Owl Image">
                    </div>
                </a>
                
                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/c5.jpg" alt="Owl Image">
                    </div>
                </a>
                
               <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/c41.jpg" alt="Owl Image">
                    </div>
                </a>
                
                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="bootstrap/img/15.jpg" alt="Owl Image">
                    </div>
                </a>
              </div>       
          </div>
        </div>


    </div>
    
    <div  class="content-section-c ">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center white">
                <h2>Get Live Updates</h2>
              
             </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="mockup-content">
                        <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                            <button type="button "><span>Subscribe to our Newsletter</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">Subscribe to our Newsletter</h2>
                                        <form>
                                            <p><label>Your Email Address</label><input type="text"/></p>
                                            <p><button>Subscribe me</button></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>  
            </div>>
        </div>
    </div>  
    
    <!-- Credits -->
    <div id="credits" class="content-section-a">
        <div class="container">
            <div class="row">
            
            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Credits</h2>
                <p class="lead" style="margin-top:0">Special Thanks To Community</p>
             </div>
             
                <div class="col-sm-6  block wow bounceIn">
                    <div class="row">
                        <div class="col-md-4 box-icon rotate"> 
                            <i class="fa fa-desktop fa-4x "> </i> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h3> Bootstrap </h3>
                            <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                        </div>
                  </div>
              </div>
              <div class="col-sm-6 block wow bounceIn">
                    <div class="row">
                      <div class="col-md-4 box-icon rotate"> 
                        <i class="fa fa-picture-o fa-4x "> </i> 
                      </div>
                      <div class="col-md-8 box-ct">
                        <h3> Owl-Carousel </h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
                      </div>
                    </div>
              </div>
          </div>
          
          <div class="row tworow">
                <div class="col-sm-6  block wow bounceIn">
                    <div class="row">
                        <div class="col-md-4 box-icon rotate"> 
                            <i class="fa fa-magic fa-4x "> </i> 
                        </div>
                        <div class="col-md-8 box-ct">
                            <h3> Codrops </h3>
                            <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                        </div>
                  </div>
              </div>
              <div class="col-sm-6 block wow bounceIn">
                    <div class="row">
                      <div class="col-md-4 box-icon rotate"> 
                        <i class="fa fa-heart fa-4x "> </i> 
                      </div>
                      <div class="col-md-8 box-ct">
                        <h3> Lorem Ipsum</h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
    
    <!-- Banner Download -->
    <div id="downloadlink" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>YOUR FEEDBACK</h2>
                <p class="lead" style="margin-top:0">Pay with a Tweet</p>
                <p><a class="btn btn-embossed btn-primary view" role="button">Tweet Us</a></p> 
             </div>
            </div>
        </div>
    </div>
    
    <!-- Contact -->
    
    
    @include('layout.footer')

    <!-- JavaScript -->
    </body>

</html>
@endsection
