@extends('layouts.layout_home')
@section('content')

<div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--section -->
                    <section class="hero-section no-padding" data-scrollax-parent="true" id="sec1">
               <div class="slider-container-wrap fl-wrap color3-bg">
                  <div class="slider-container">
                     <!-- slideshow-item -->
                     <div class="slider-item fl-wrap">
                        <div class="hero-parallax">
                           <div class="bg" data-bg="images/bg/27.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                           <div class="overlay op7"></div>
                        </div>
                        <div class="hero-section-wrap fl-wrap">
                           <div class="container">
                              <div class="home-intro">
                                 <div class="section-title-separator"><span></span></div>
                                 <h1>Mart Walk Find Everything</h1>
                                 <span class="section-separator"></span>
                                 <h3>Let's start exploring the world together with Martwalk</h3>
                              </div>
                              @livewire('search')
                           </div>
                        </div>
                     </div>
                     <!--  slideshow-item end  -->
                     <!-- slideshow-item -->
                     <div class="slider-item fl-wrap">
                        <div class="hero-parallax">
                           <div class="bg" data-bg="images/bg/shop.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                           <div class="overlay op7"></div>
                        </div>
                        <div class="hero-section-wrap fl-wrap">
                           <div class="container">
                              <div class="home-intro-card">
                                 <div class="home-intro-card-counter">123 Hotels</div>
                                 <div class="weather-grid" data-grcity="London"></div>
                                 <div class="clearfix"></div>
                                 <h3></h3>
                                 <h5></h5></h5>
                                 <a href="listing.php" class="btn  color2-bg float-btn">Get Offer<i class="fas fa-caret-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  slideshow-item end  -->
                     <!-- slideshow-item -->
                     <div class="slider-item fl-wrap">
                        <div class="hero-parallax">
                           <div class="bg" data-bg="images/bg/9.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                           <div class="overlay op7"></div>
                        </div>
                        <div class="hero-section-wrap fl-wrap">
                           <div class="container">
                              <div class="home-intro-card">
                                 <div class="listing-rating-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <h3>Properties to Buy in Noida</h3>
                                 <div class="clearfix"></div>
                                 <div class="home-intro-card-counter home-intro-card-counter_price">2 BHK Flat</div>
                                 <div class="clearfix"></div>
                                 <h5>
                                 Ab Hoga Sapno Ka Ghar Apna
                                 <a href="https://housing.com/in/buy/real-estate-new_delhi" class="btn  color2-bg float-btn">View All Details<i class="fas fa-caret-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  slideshow-item end  -->
                  </div>
                  <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                  <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
               </div>
            </section>
                    <!-- section end -->

                     <!--section -->
                     <section id="sec2">
                        <div class="container">
                                <div class="section-title">
                     <div class="section-title-separator"><span></span></div>
                     <h2>Popular Business With Best Rating</h2>
                     <span class="section-separator"></span>
                     <p>Explore some of the best tips from around the city from our partners and friends.</p>
                  </div>
                            </div>



                            <div class="gallery-items fl-wrap mr-bot spad home-grid">








                                <!-- gallery-item-->

                                
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <div class="listing-counter"><span></span> akv</div>
                                            <img  src="images/city/call.jpg"   alt="City">
                                            <div class="listing-item-cat">
                                                <h3><a href="/subcategory/"></a></h3>
                                                <div class="weather-grid"   data-grcity="Rome"></div>
                                                <div class="clearfix"></div>
                                                <p>Have you got any Requirement? Don't worry make call us now.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- gallery-item end-->

 <!-- gallery-item-->
                                    
                                <div class="gallery-item gallery-item-second">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <img  src="images/bg/insurance.jpg"   alt="insurance">
                                             <div class="listing-counter"><span></span>  </div>
                                            <div class="listing-item-cat">
                                           <h3><a href="/subcategory/"></a></h3>
                                                <div class="weather-grid"   data-grcity="Paris"></div>
                                                <div class="clearfix"></div>
                                                <p>There are many Insurance service providers in your City.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                                  
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <div class="listing-counter"><span></span>  </div>
                                            <img  src="images/city/property.jpg"   alt="city">
                                            <div class="listing-item-cat">
                                                <h3><a href="/subcategory/"></a></h3>
                                                <div class="weather-grid"   data-grcity="Rome"></div>
                                                <div class="clearfix"></div>
                                                <p>Best way to find and Sell property, good location office as well.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                            
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <div class="listing-counter"><span></span>  </div>
                                            <img  src="images/bg/book.jpg"   alt="book">
                                            <div class="listing-item-cat">
                                                <h3><a href="/subcategory/"></a></h3>
                                                <div class="weather-grid"   data-grcity="Rome"></div>
                                                <div class="clearfix"></div>
                                                <p>Book all type of booking and get discount, appointment as well.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                <!-- gallery-item end-->
                                <!-- gallery-item-->
                                                
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
                                            <div class="listing-counter"><span></span>  </div>
                                            <img  src="images/city/education.jpg"   alt="City">
                                            <div class="listing-item-cat">
                                                <h3><a href="/subcategory/"></a></h3>
                                                <div class="weather-grid"   data-grcity="Rome"></div>
                                                <div class="clearfix"></div>
                                                <p>You will get every type of Educational Solution Here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            
                                <!-- gallery-item end-->
                            </div>
                            <!-- portfolio end -->
 
 <a href="all-listing.php" class="btn color-bg">Explore All Business<i class="fas fa-caret-right"></i></a>


</section>
<!-- section end -->
<!-- section-->
<section class="grey-blue-bg">
    <!-- container-->
    <div class="container">
    <div class="section-title">
 <div class="section-title-separator"><span></span></div>
 <h2>Recently Added Business</h2>
 <span class="section-separator"></span>
 <p>There are mulitpal listings which are going to be the best part of martwalk.we are waiting for your step.</p>
</div>
    </div>
    <!-- container end-->
 <!-- carousel -->
 <div class="list-carousel fl-wrap card-listing ">
                  <!--listing-carousel-->
                  <div class="listing-carousel  fl-wrap ">
                   
                     <!--slick-slide-item-->
                     @foreach($user as $list)
                     <div class="slick-slide-item">
                        <!-- listing-item  -->
                        <div class="listing-item ">
                           <article class="geodir-category-listing fl-wrap">
                              <div class="geodir-category-img">
                                 <a href="/detail/"><img src="images/gal/4.jpg" style="height: 200px;" alt="Gate"></a>
                                 <div class="listing-avatar"><a href="#"><img src="images/avatar/3.jpg" alt="Avtar"></a>
                                    <span class="avatar-tooltip">Added By <strong>{{$list->name}}</strong></span>
                                 </div>
                              
                                 <div class="sale-window">Open</div>

                              
                                
                                 <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="8"></div>
                                    <div class="rate-class-name">
                                       <div class="score">
                                       <strong> Pleasent</strong>
                                         6 Review
                                             
                                       </div>
                                       <span>9</span>
                                    </div>
                                 </div>
                                 
                                
                                
                              </div>
                              <div class="geodir-category-content fl-wrap" style="height: 300px;">
                                 <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                       <h3 class="title-sin_map" style="text-transform: capitalize; "><a href="{{route('detail',['id'=>$list->user_id])}}">{{$list->bussiness_name}}</a></h3>
                                       <div class="geodir-category-location fl-wrap" style="display: inline-block;
                                          width: 200px;
                                          white-space: nowrap;
                                          overflow: hidden !important;
                                          text-overflow: ellipsis;color: grey;"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> {{$list->address}}, {{$list->city}},  {{$list->country}}</a></div>
                                    </div>
                                 </div>
                                 <p> {{$list->about}}</p>
                                                <ul class="facilities-list fl-wrap">
                                                @if($list->wifi)
                                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>                                                   
                                                    @endif
                                                    @if($list->parking)
                                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                    @endif
                                                    @if($list->air)
                                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                    @endif
                                                    @if($list->power)
                                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                    @endif
                                                </ul>
                               
                              </div>
                           </article>
                        </div>
                        <!-- listing-item end -->
                     </div>
                    @endforeach
                  </div>
                  <!--listing-carousel end-->
                  <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                  <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
               </div>
                        <!--  carousel end-->
                    </section>
                    <!-- section end -->


                    <!--section start-->



                    <section class="parallax-section" data-scrollax-parent="true">
               <div class="bg" data-bg="images/bg/2.jpg" data-scrollax="properties: { translateY: '100px' }"></div>
               <div class="overlay op7"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="colomn-text fl-wrap pad-top-column-text_small">
                           <div class="colomn-text-title">
                              <h3>Most Popular Business</h3>
                              <p>These are our verified business, you may deal and if you want to get more knowledge about them so you may click here or make call anytime.</p>
                              <a href="all-listing.php" class="btn  color2-bg float-btn">View All Business<i class="fas fa-caret-right"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <!--light-carousel-wrap-->
                        <div class="light-carousel-wrap fl-wrap">
                           <!--light-carousel-->
                           <div class="light-carousel">
                              <!--slick-slide-item-->
                            
                              <div class="slick-slide-item">
                                 <div class="hotel-card fl-wrap title-sin_item">
                                    <div class="geodir-category-img card-post">
                                       <a href="detail/slug"><img src="images/gal/3.jpg" style="height: 200px;" alt="Chair"></a>
                                       <div class="listing-avatar" style="width: 100px;"><img src="sub-img/wh.png" alt="whats app" style="height: 20px; width: 20px;"> <strong style="color:white;background-color:#18458B; "></strong></div>
                                       <div class="sale-window">Verified</div>
                                       <div class="geodir-category-opt">
                                          
                                          <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                             <h4 class="title-sin_map" style="text-transform: capitalize;color: white;"> <a href="detail/">akv4ever</a></h3>
                                          </h4>
                                          <div class="geodir-category-location" style="display: inline-block;
                                             width: 200px;
                                             white-space: nowrap;
                                             overflow: hidden !important;
                                             text-overflow: ellipsis;color: white;"><a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i>
                                            address,state ,city ,pin ,country </a>
                                          </div>
                                          <div class="rate-class-name">
                                             <div class="score">
                                                <strong> Pleasent</strong>

                                                     
                                                   5 Review
                                                   
                                             </div>
                                             <span>4</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                              <!--slick-slide-item end-->
                              <!--slick-slide-item-->
                              <!--slick-slide-item end-->
                           </div>
                           <!--light-carousel end-->
                           <div class="fc-cont  lc-prev"><i class="fal fa-angle-left"></i></div>
                           <div class="fc-cont  lc-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                        <!--light-carousel-wrap end-->
                     </div>
                  </div>
               </div>
            </section>
                    <!-- section end -->
                    <!--section -->
                   <section>
               <div class="container">
                  <div class="section-title">
                     <div class="section-title-separator"><span></span></div>
                     <h2>Why Choose Us</h2>
                     <span class="section-separator"></span>
                     <p>B'coz we know the importance of your time and we are trying our best to save your time & needs.</p>
                  </div>
                  <!-- -->
                  <div class="row">
                     <div class="col-md-4">
                        <!-- process-item-->
                        <div class="process-item big-pad-pr-item">
                           <span class="process-count"> </span>
                           <div class="time-line-icon"><i class="fal fa-headset"></i></div>
                           <h4><a href="#"> Best service guarantee</a></h4>
                           <p>Risk free guarantee work best with high cost  services, we know the importance of costumer if you have any suggestion kindly mail us.</p>
                        </div>
                        <!-- process-item end -->
                     </div>
                     <div class="col-md-4">
                        <!-- process-item-->
                        <div class="process-item big-pad-pr-item">
                           <span class="process-count"> </span>
                           <div class="time-line-icon"><i class="fal fa-gift"></i></div>
                           <h4> <a href="#">Exclusive gifts</a></h4>
                           <p>We make it easy to give gifts you'll never forget. We have announced for giving best service provider  award for most visited business.</p>
                        </div>
                        <!-- process-item end -->
                     </div>
                     <div class="col-md-4">
                        <!-- process-item-->
                        <div class="process-item big-pad-pr-item nodecpre">
                           <span class="process-count"> </span>
                           <div class="time-line-icon"><i class="fal fa-credit-card"></i></div>
                           <h4><a href="#"> Get more from your card</a></h4>
                           <p>We are also providing highly profile Paid business listing. you most know about it as well as Mart Walk Verified Business stamp so visit
and make call.</p>
                        </div>
                        <!-- process-item end -->
                     </div>
                  </div>
                  <!--process-wrap   end-->
                  <div class=" single-facts fl-wrap mar-top">
                     <!-- inline-facts -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-users"></i>
                           <div class="milestone-counter">
                              <div class="stats animaper">

                                 <div class="num" data-content="0" data-num="4">154</div>
                              </div>
                           </div>
                           <h6>New Listing</h6>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts  -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-thumbs-up"></i>
                           <div class="milestone-counter">
                              <div class="stats animaper">

                               
                                 <div class="num" data-content="0" data-num="5">12168</div>
                              </div>
                           </div>
                           <h6>Booking</h6>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts  -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-award"></i>
                           <div class="milestone-counter">
                              <div class="stats animaper">

                                                    
                                 <div class="num" data-content="0" data-num="4">172</div>
                              </div>
                           </div>
                           <h6>Verified User</h6>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                     <!-- inline-facts  -->
                     <div class="inline-facts-wrap">
                        <div class="inline-facts">
                           <i class="fal fa-hotel"></i>
                           <div class="milestone-counter">
                              <div class="stats animaper">

                               
                                 <div class="num" data-content="0" data-num="5">732</div>
                              </div>
                           </div>
                           <h6>Happy Coustumer</h6>
                        </div>
                     </div>
                     <!-- inline-facts end -->
                  </div>
               </div>
            </section>
            <section class="color-bg hidden-section">
               <div class="wave-bg wave-bg2"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <!-- -->
                        <div class="colomn-text  pad-top-column-text fl-wrap">
                           <div class="colomn-text-title">
                              <h3>Our App Available Now</h3>
                              <p>We are glad to announce that the official app of MartWalk is available on App store as well as on Google Play. You may explore your Requierments and make it easy with us on your Mobile.</p>
                              <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i> Download for iPhone</a>
                              <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i> Download for Android</a>
                           </div>
                        </div>
                        <!--process-wrap   end-->
                     </div>
                     <div class="col-md-6">
                        <div class="collage-image">
                           <img src="images/api.png" class="main-collage-image" alt="Map">
                           <div class="images-collage-title color3-bg">Mart<span>walk</span></div>
                           <div class="collage-image-min cim_1"><img src="images/api/1.jpg" alt="Room"></div>
                           <div class="collage-image-min cim_2"><img src="images/api/2.jpg" alt="gate"></div>
                           <div class="collage-image-min cim_3"><img src="images/api/3.jpg" alt="Bed"></div>
                           <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                           <div class="collage-image-btn color2-bg">Booking now</div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
                    <!-- section end -->
                    <!--section -->
                    <section>
                       <div class="container">
                          <div class="section-title">
                             <div class="section-title-separator"><span></span></div>
                             <h2>Testimonials</h2>
                             <span class="section-separator"></span>
                             <p>If you want to say something about Martwalk so you may also share your opinion in our Testimonial area.</p>
                          </div>
                       </div>
                       <div class="clearfix"></div>
                       <!--slider-carousel-wrap -->
                       <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                          <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                          <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                          <div class="text-carousel single-carousel fl-wrap">
                             <!--slick-item -->
                             <div class="slick-item">
                                <div class="text-carousel-item">
                                   <div class="popup-avatar"><img src="images/sahil.jpg" alt="sahil"></div>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="review-owner fl-wrap">Sahil - <span>Happy Client</span></div>
                                   <p> "It is a great website to promote a business and improve visibility of a website. It?s easy to use feature also makes it popular website.i surprised after visiting this website coz it has got different look and best service.I would like to be part of this.
                                      Thanks a lot.
                                      "
                                   </p>
                                   <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                             </div>
                             <!--slick-item end -->
                             <!--slick-item -->
                             <div class="slick-item">
                                <div class="text-carousel-item">
                                   <div class="popup-avatar"><img src="images/avatar/Rajkumar.jpg" alt="Raj Kumar"></div>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                   <div class="review-owner fl-wrap">Raj Kumar - <span>Happy Client</span></div>
                                   <p> "Mart Walk for providing unique directory submission services. Each listing includes an exclusive business listing page with comprehensive business information such as URL, Title, Description, Logo, Physical Address, Location map, Products, Services, Work progress , etc.
                                      Thanks a lot
                                      "
                                   </p>
                                   <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                             </div>
                             <!--slick-item end -->
                             <!--slick-item -->
                             <div class="slick-item">
                                <div class="text-carousel-item">
                                   <div class="popup-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="review-owner fl-wrap">
                                      Deepak Chauhan
                                      - <span>Happy Client</span>
                                   </div>
                                   <p> "Lets face it, most Business Directories are often bland soulless places that become simple repositories for people to leave their details. It?s so refreshing to have come across Business Directory and to find such a great following with lots of interaction.
                                      Keep up the good work !
                                      "
                                   </p>
                                   <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                             </div>
                             <!--slick-item end -->
                             <!--slick-item -->
                             <div class="slick-item">
                                <div class="text-carousel-item">
                                   <div class="popup-avatar"><img src="images/monti.jpg" alt="monti"></div>
                                   <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                   <div class="review-owner fl-wrap">Monti - <span>Happy Client</span></div>
                                   <p> "I would just like to say as a very new small business with a limited budget , one of the hardest tasks is getting enough market exposure. Your Business Directory is a fantastic platform and will hit my target market. I will pass on your fantastic website to my fellow entrepreneurs."</p>
                                   <a href="#" class="testim-link">Via Facebook</a>
                                </div>
                             </div>
                             <!--slick-item end -->
                          </div>
                       </div>
                       <!--slider-carousel-wrap end-->
                    </section>
                    <!-- section end-->
                    <section class="parallax-section" data-scrollax-parent="true">
                       <div class="bg" data-bg="images/bg/14.jpg" data-scrollax="properties: { translateY: '100px' }"></div>
                       <div class="overlay"></div>
                       <!--container-->
                       <div class="container">
                          <div class="row">
                             <div class="col-md-8">
                                <!-- column text-->
                                <div class="colomn-text fl-wrap">
                                   <div class="colomn-text-title">
                                      <h3>Are you owner of the business ?</h3>
                                      <p>It will be right step of your destination</p>
                                    
                                      <a class="btn  color-bg float-btn  modal-open ">Add your Business<i class="fal fa-plus"></i></a>
                                  
                                   </div>
                                </div>
                                <!--column text   end-->
                             </div>
                          </div>
                       </div>
                    </section>
                    <!--section end-->
                    <!--section -->
            <section class=" middle-padding">
               <div class="container">
                  <div class="section-title">
                     <div class="section-title-separator"><span></span></div>
                     <h2>Find Best Services Provider Worker By Rating in your locality.</h2>
                     <span class="section-separator"></span>
                     <p>Browse the latest articles from our blog.</p>
                  </div>
                  <div class="row home-posts">
                     <div class="col-md-4">
                        <article class="card-post">
                           <div class="card-post-img fl-wrap">
                              <a href="#"><img src="images/mart1.jpg" alt="boy with laptop"></a>
                           </div>
                           <div class="card-post-content fl-wrap">
                              <h3><a href="#">Best Plumber of Your Locality .</a></h3>
                              <p>We provide home repair and maintenance services at your doorstep in Delhi-NCR, Chennai, Kolkata, Ahmedabad, Mumbai, Bangalore, Pune and all over India. </p>
                              <div class="post-author"><a href="#"><img src="images/team/Ravi.jpg" alt="Ravi Chauhan"><span>By , Mr. Ravi Chauhan</span></a></div>
                              <div class="post-opt">
                                 <ul>
                                    <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                    <li><i class="fal fa-eye"></i> <span>264</span></li>
                                    <li><i class="fal fa-tags"></i> <a href="#">Design</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4">
                        <article class="card-post">
                           <div class="card-post-img fl-wrap">
                              <div class="list-single-main-media fl-wrap">
                                 <div class="single-slider-wrapper fl-wrap">
                                    <div class="single-slider fl-wrap">
                                       <div class="slick-slide-item"><img src="images/mart3.jpg" alt="Staff"></div>
                                       <div class="slick-slide-item"><img src="images/mart4.jpg" alt="Professional"></div>
                                       <div class="slick-slide-item"><img src="images/mart5.jpg" alt="Hot girl"></div>
                                    </div>
                                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-post-content fl-wrap">
                              <h3><a href="#">Best Painter of Your Locality.</a></h3>
                              <p>Best home painting services by verified professional, on time services for to streamline processes and empower individual painters and service providers in all over India. </p>
                              <div class="post-author"><a href="#"><img src="images/team/Ravi.jpg" alt="Ravi Chauhan"><span>By , Mr. Ravi Chauhan</span></a></div>
                              <div class="post-opt">
                                 <ul>
                                    <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                    <li><i class="fal fa-eye"></i> <span>264</span></li>
                                    <li><i class="fal fa-tags"></i> <a href="#">Design</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-md-4">
                        <article class="card-post">
                           <div class="card-post-img fl-wrap">
                              <a href="#"><img src="images/mart2.jpg" alt="camera"></a>
                           </div>
                           <div class="card-post-content fl-wrap">
                              <h3><a href="#">Best Electrician of Your Locality.</a></h3>
                              <p>Service Provider of Electrician Services for Repair & Maintenance - Electrician Services, Shopping Malls Electricians Services, Electrician in all over India. </p>
                              <div class="post-author"><a href="#"><img src="images/team/Ravi.jpg" alt="Ravi Chauhan"><span>By , Mr. Ravi Chauhan</span></a></div>
                              <div class="post-opt">
                                 <ul>
                                    <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                    <li><i class="fal fa-eye"></i> <span>264</span></li>
                                    <li><i class="fal fa-tags"></i> <a href="#">Design</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
                  <a href="#" class="btn    color-bg ">Read All News<i class="fas fa-caret-right"></i></a>
               </div>
               <div class="section-decor"></div>
            </section>
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->




@endsection