<!DOCTYPE HTML>
<html lang="en" xmlns:>
   <head>
      <!--=============== basic  ===============-->
      <meta charset="UTF-8">
      <title>Mart Walk India's local search engine, Booking Portal , Hotels & More.</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta name="keywords" content="Mart walk, Martwalk, local Engine search, travel, order food, grocery, medicines, online shopping, book tickets, movies, bus, flights, hotels, events, search plus services,
      local businesses, online yellow pages, Indian search engine, Mart Walk customer care, customer support" />
      <meta name="description" content="Mart Walk India's local search engine, Ticket Booking, Flights, Hotels, Movies, and Cabs. You can also Order Food, Book Restaurant,Doctors’ Appointment More." />
     
    

<!-- canonical Url -->

<!--End canonical Url -->

<meta name ="robots" content="index">


	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@Mart_walk" />
	<meta name="twitter:title" content="Martwalk - Mart Walk India's local search engine, Booking Portal , Hotels & More" />
	<meta name="twitter:description" content="Mart Walk, India's local search engine, provides Best Deals, Shop Online, Hotels, Movies, Buses and Cabs. You can also Order Food, Book Restaurant Table, View Menu, Book Doctors’ Appointments. " />
	<meta name="twitter:image" content="https://www.martwalk.in/images/bg/book.jpg" />
	<meta name="twitter:url" content="https://www.martwalk.in" />
<!--End Twitter card tag -->

<!--Markup Social Media-->

<!--End Markup Social Media-->
	
      <!-- Global site tag (gtag.js) - Google Analytics -->

 <!--End Global site tag (gtag.js) - Google Analytics -->

      <!--=============== css  ===============-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
     
      <!--=============== favicons ===============-->
     
      <link rel="shortcut icon" href="{{asset('/')}}images/favicon.ico">
      @livewireStyles
      @livewireScripts
      </head>
    <body>
   
 
      <!--loader-->
      <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
<!-- Main  -->
<header class="main-header">
                <!-- header-top-->
                 <div class="header-top fl-wrap">
        <div class="container">
            <div class="logo-holder">
            <a href="{{route('home')}}"><img src="{{asset('/')}}images/logo.png" alt=""></a>
            </div>
           

                <!-- <div class="show-reg-form modal-open add-hotel"><b style="color: white;">ADD YOUR BUSINESS</b> <span><i class="far fa-plus"></i></span> </div>

                <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div> -->
               
                @auth
                      
                      <a href="{{route('dashboard')}}" class="add-hotel">Add Your Property <span><i class="far fa-plus"></i></span></a>                    
                      @endauth
                      @guest
                      <a  class="show-reg-form modal-open">Add Your Property <span><i class="far fa-plus"></i></span></a>
      @endguest                
      @auth
        <livewire:logout />                       
                        @endauth
                        @guest
                        <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Log In</div>
        @endguest
        </div>
   
   
         </div>


         <div class="header-inner fl-wrap">
        <div class="container">
            <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div>
            <div class="wishlist-link"><i class="fal fa-heart"></i></div>
            @auth
                        <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{url('/storage/profile_image/'.Auth::user()->profile_image)}}" alt=""></span>
                                My account
                            </div>
                            <ul>
                                <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                                <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                                <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>                      
                        @endauth

                          <div class="home-btn"><a href=""><i class="fas fa-home"></i></a></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap color-bg">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                          <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="act-link">Everyday Needs<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.php"></a></li>

                                            <li>
                                        <a href="subcategory/apply-for-loan">Apply For Loan</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>

                                    <li>
                                        <a href="subcategory/hire-anything">Hire Anything</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>

                                    <li>
                                        <a href="subcategory/doctor">Doctor</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="subcategory/web-development">Web Development</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="subcategory/b2b">B2B</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                           <li>
                                        <a href="subcategory/shop-and-showroom">Shop & Showroom</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="subcategory/contractor">Contractor</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>

                                    <li>
                                        <a href="subcategory/home-improvement">Home Improvement</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                      <li>
                                        <a href="subcategory/restaurant">Restaurant</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>




                                      <li>
                                        <a href="subcategory/emergency">Emergency</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>

                                      <li>
                                        <a href="subcategory/hotel">Hotel</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    

                                      
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                        </ul>
                                        <!--second level end-->
                                                                      <li>
                                          <a href="subcategory/booking">Booking</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="subcategory/property">Properties</a></li>
                                        <!--second level -->

                                        <!--second level end-->

                                    <li>
                                        <a href="subcategory/education">Education</a>
                                        <!--second level -->
                                       </li>
                                    <!-- <li><a href="comingson.php">Shop</a></li> -->

                                    <!-- <li>
                                        <a href="subcategory/insurance">Insurance</a></li> -->
                                         <li>
                                        <a href="subcategory/insurance">Insurance</a>
                                        
                                    <li><a href="subcategory/on-call">On Call </a></li>
                                   
                                    
                                    <!--second level end-->

                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                        <!-- wishlist-wrap-->

                        <!-- wishlist-wrap end-->
                    </div>
                </div>
                <!-- header-inner end-->
                <!-- header-search -->
               <div class="header-search vis-search">
    <div class="container">
        <div class="row">
            <form action="listing.php" method="get">
                <!-- header-search-input-item -->
                <div class="col-sm-4">
                    <div style="width: 100%;"class="header-search-input-item fl-wrap location autocomplete-container">
                        <form action="../listing.php" method="get">
                            <label>Business</label>
                            <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                            <input type="text" placeholder="search bussiness"    name="keyword"  value=""/>
                            <a href="#"><i class="fal fa-dot-circle"></i></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="width: 100%;"class="header-search-input-item fl-wrap location autocomplete-container">
                        <form action="../listing.php" method="get">
                            <label>Services</label>
                            <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                            <input type="text" placeholder="services "    name="keyword"  value=""/>
                            
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="header-search-input-item fl-wrap">
                        <button class="header-search-button" type="submit">Search <i class="far fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- header-search-input-item end -->
        </div>
    </div>
    <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
</div>






                 

       

   <!-- header-search  end -->
   </header>
            <!--  header end -->
            <!--  wrapper  -->
@yield('content')



    <!--footer -->
    <footer class="main-footer">
        <!--subscribe-wrap-->
        <div class="subscribe-wrap color-bg  fl-wrap">
            <div class="container">
                <div class="sp-bg"> </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="subscribe-header">
                            <h3>Subscribe</h3>
                            <p>Want to be notified when we Lunch a new Business or an udpate. Just sign up and we'll send you a notification by email.</p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="footer-widget fl-wrap">
                            <div class="subscribe-widget fl-wrap">
                                <div class="subcribe-form">
                                    <form id="subscribe">
                                        <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fas fa-rss-square"></i> Subscribe</button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-bg"></div>
        </div>
        <!--subscribe-wrap end -->
        <!--footer-inner-->
        <div class="footer-inner">
            <div class="container">
                <!--footer-fw-widget-->
                <div class="footer-fw-widget fl-wrap">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-carousel-title">
                                Our partners
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!--footer-carousel-wrap-->
                            <div class="footer-carousel-wrap fl-wrap">
                                <div class="footer-carousel fl-wrap">
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/1.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/2.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/3.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/4.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/5.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                    <!--footer-carousel-item-->
                                    <div class="footer-carousel-item">
                                        <a href="#"><img src="images/partners/6.png" alt=""></a>
                                    </div>
                                    <!--footer-carousel-item end-->
                                </div>
                                <div class="fc-cont  fc-cont-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="fc-cont  fc-cont-next"><i class="fal fa-angle-right"></i></div>
                            </div>
                            <!--footer-carousel-wrap end-->
                        </div>
                    </div>
                </div>
                <!--footer-fw-widget end-->
                <div class="row">
                    <!--footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap">
                            <h3>About Us</h3>
                            <div class="footer-contacts-widget fl-wrap">
                                <p>Martwalk, India's local search engine, Best Portal For Growing you Business & Deals, Find Everything Like Shop Online, Ticket Booking for Flights, Hotels, Movies, Buses and Car. You can also order Food & More. </p>
                                <ul  class="footer-contacts fl-wrap">
                                    <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">support@martwalk.in</a></li>
                                    <li> <span><i class="fal fa-map-marker-alt"></i> Mail :</span><a href="#" target="_blank">Job@martwalk.in</a></li>
                                    <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">9719-896-896</a></li>
                                </ul>
                                <div class="footer-social">
                                    <span>Find us : </span>
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-widget end-->
                    <!--footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap">
                            <h3>Our Last News</h3>
                            <div class="widget-posts fl-wrap">
                                <ul>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Vivamus dapibus rutrum</a>
                                            <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="images/all/2.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title=""> In hac habitasse platea</a>
                                            <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#"  class="widget-posts-img"><img src="images/all/3.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Tortor tempor in porta</a>
                                            <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--footer-widget end-->
                    <!--footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap">
                            <h3>Our  Twitter</h3>
                            <div id="footer-twiit" class="fl-wrap"></div>
                            <a href="#" class="twitter-link" target="_blank">Follow</a>
                        </div>
                    </div>
                    <!--footer-widget end-->
                </div>
                <div class="clearfix"></div>
                <!--footer-widget -->
                <div class="footer-widget">
                    <div class="row">
                        <div class="col-md-4"><a class="contact-btn color-bg" href="contacts.html">Get In Touch<i class="fal fa-envelope"></i></a></div>
                        <div class="col-md-8">
                            <div class="customer-support-widget fl-wrap">
                                <h4>Customer support : </h4>
                                <a href="tel:9719896896" class="cs-mumber">9719-896-896</a>
                                <a href="tel:9719-896-896" class="cs-mumber-button color2-bg">Call Now <i class="far fa-phone-volume"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--footer-widget end -->
            </div>
        </div>
        <!--footer-inner end -->
        <div class="footer-bg">
        </div>
        <!--sub-footer-->
        <div class="sub-footer">
            <div class="container">
                <div class="copyright"> &#169; Martwalk 2019 .  All rights reserved.</div>
                <div class="subfooter-lang">
                    <div class="subfooter-show-lang"><span>Eng</span><i class="fa fa-caret-up"></i></div>
                    <ul class="subfooter-lang-tooltip">
                        <li><a href="#">Dutch</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="subfooter-nav">
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--sub-footer end -->
    </footer>
    <!--footer end -->
    <!--map-modal -->
    <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
            <div class="map-modal-container fl-wrap">
                <div class="map-modal fl-wrap">
                    <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                </div>
                <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
                <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                <div class="map-modal-close"><i class="fal fa-times"></i></div>
            </div>
        </div>
    </div>
    <!--map-modal end -->
    <!--register form -->
    <div class="main-register-wrap modal">
        <div class="reg-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                @livewire('login-register')
                <!--tabs -->
                <div id="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content">

                           
                           
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                           
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                   <!--  <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->
    <a class="to-top"><i class="fas fa-caret-up"></i></a>

        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>






