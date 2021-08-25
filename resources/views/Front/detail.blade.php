@extends('layouts.layout_home')
@section('title')

@endsection
@section('content')
 <!-- content-->


 <div class="content">
                    <!--  section  -->
                
                        
                 
                    <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem " 
                        
                        @if($post->header_image)
                        data-bg="{{asset('/')}}storage/{{$post->header_image}}"
                        @else
                        data-bg="{{asset('/')}}images/bg/23.jpg"
                        @endif
                        
                        
                        
                        data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="list-single-hero-title fl-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="listing-rating-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        </div>
                                        <h2><span>{{ucfirst($post->bussiness_name)}}</span></h2>
                                        <div class="list-single-header-contacts fl-wrap">
                                            <ul>
                                               
                                                
                                                <li><i class="far fa-phone"></i><a  href="#">{{$post->whatsapp}}</a></li>
                                                <li><i class="far fa-map-marker-alt"></i><a  href="#">{{ucfirst($post->address)}},{{$post->City->name}},{{$post->State->name}},{{$post->Country->country_name}}</a></li>
                                                <li><i class="far fa-envelope"></i><a  href="#">{{$post->user->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <!--  list-single-hero-details-->
                                        <div class="list-single-hero-details fl-wrap">
                                            <!--  list-single-hero-rating-->
                                            <div class="list-single-hero-rating">
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very Good</strong>2 Reviews </div>
                                                    <span>4.5</span>                                             
                                                </div>
                                                <!-- list-single-hero-rating-list-->
                                                <div class="list-single-hero-rating-list">
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                                                        <div class="rate-item-bg" data-percent="100%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">5.0</div>
                                                    </div>
                                                    <!-- rate item end-->                                                        
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                                                        <div class="rate-item-bg" data-percent="80%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.0</div>
                                                    </div>
                                                    <!-- rate item end-->  
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">4.5</div>
                                                    </div>
                                                    <!-- rate item end--> 
                                                </div>
                                                <!-- list-single-hero-rating-list end-->
                                            </div>
                                            <!--  list-single-hero-rating  end-->
                                            <div class="clearfix"></div>
                                            <!-- list-single-hero-links-->
                                            <div class="list-single-hero-links">
                                                <a class="lisd-link" href="booking-single.html"><i class="fal fa-bookmark"></i> Book Now</a>
                                                <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add review</a>
                                            </div>
                                            <!--  list-single-hero-links end-->                                            
                                        </div>
                                        <!--  list-single-hero-details  end-->
                                    </div>
                                </div>
                                <div class="breadcrumbs-hero-buttom fl-wrap">
                                    <div class="breadcrumbs"><a href="{{route('home')}}">Home</a><a href="{{ url()->previous() }}">Listings</a><span>{{ucfirst($post->bussiness_name)}}</span></div>
                                    <div class="list-single-hero-price">TIME<span>9am -9 pm</span></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="grey-blue-bg small-padding scroll-nav-container" id="sec2">
                        <!--  scroll-nav-wrapper  -->
                        <div class="scroll-nav-wrapper fl-wrap">
                            <div class="hidden-map-container fl-wrap">
                                <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container">
                                <nav class="scroll-nav scroll-init">
                                    <ul>
                                        <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                        <li><a href="#sec2">Details</a></li>
                                        <li><a href="#sec3">Facilities</a></li>
                                        <li><a href="#sec4">Services</a></li>
                                        <li><a href="#sec5">Reviews</a></li>
                                    </ul>
                                </nav>
                                <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>
                            </div>
                        </div>
                        <!--  scroll-nav-wrapper end  -->                    
                        <!--   container  -->
                        <div class="container">
                            <!--   row  -->
                            <div class="row">
                                <!--   datails -->
                                <div class="col-md-8">
                                    <div class="list-single-main-container ">
                                        <!-- fixed-scroll-column  -->
                                        <div class="fixed-scroll-column">
                                            <div class="fixed-scroll-column-item fl-wrap">
                                                <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>
                                                <div class="share-holder fixed-scroll-column-share-container">
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a>
                                                <a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>
                                                <a class="fc-button" href="booking-single.html"><i class="far fa-bookmark"></i> <span> Book Now </span></a>
                                            </div>
                                        </div>
                                        <!-- fixed-scroll-column end   -->
                                        <div class="list-single-main-media fl-wrap">
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                <!-- 1 -->
                                                <div class="gallery-item ">
                                                    <div class="grid-item-holder">  
                                                        <div class="box-item">

                                                            @if($post->img_1)
                                                          <img src="{{asset('/')}}storage/{{$post->img_1}}" alt="" style="width:243px; height:161px;" >
                                                          <a href="{{asset('/')}}storage/{{$post->img_1}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                       
                                                            @else 
                                                            
                                                            <img  src="{{asset('/')}}images/gal/9.jpg"   alt="">
                                                            <a href="images/gal/9.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                       
                                                       @endif
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            @if($post->img_2)
                                                            <img src="{{asset('/')}}storage/{{$post->img_2}}" alt="" style="width:243px; height:161px;" >
                                                            <a href="{{asset('/')}}storage/{{$post->img_2}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                         
                                                              @else 
                                                            <img  src="{{asset('/')}}images/gal/7.jpg"   alt="">
                                                            <a href="images/gal/7.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                       @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 2 end -->
                                                <!-- 3 -->
                                                <div class="gallery-item gallery-item-second">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            @if($post->img_3)
                                                            <img src="{{asset('/')}}storage/{{$post->img_3}}" alt="" style="width:490px; height:327px;" >
                                                            <a href="{{asset('/')}}storage/{{$post->img_3}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                         
                                                              @else 
                                                            <img  src="{{asset('/')}}images/gal/3.jpg"   alt="">
                                                            <a href="images/gal/3.jpg" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 3 end -->
                                                <!-- 4 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">

                                                            @if($post->img_4)
                                                            <img src="{{asset('/')}}storage/{{$post->img_4}}" alt="" style="width:243px; height:161px;" >
                                                            <a href="{{asset('/')}}storage/{{$post->img_4}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                         
                                                              @else 

                                                            <img  src="{{asset('/')}}images/gal/4.jpg"   alt="">
                                                            <a href="images/gal/4.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                      
                                                      @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 4 end -->
                                                <!-- 5 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            @if($post->img_5)
                                                            <img src="{{asset('/')}}storage/{{$post->img_5}}" alt="" style="width:243px; height:161px;" >
                                                            <a href="{{asset('/')}}storage/{{$post->img_5}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                         
                                                              @else 
                                                            <img  src="{{asset('/')}}images/gal/5.jpg"   alt="">
                                                            <a href="images/gal/5.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                       @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 5 end -->
                                                <!-- 7 -->
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            @if($post->img_6)
                                                            <img src="{{asset('/')}}storage/{{$post->img_6}}" alt="" style="width:243px; height:161px;" >
                                                            <a href="{{asset('/')}}storage/{{$post->img_6}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                         
                                                              @else 
                                                            <img  src="{{asset('/')}}images/gal/6.jpg"   alt="">
                                                            <div> </div>
                                                        @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div>
                                            <!-- end gallery items -->                                          
                                        </div>
                                        <!-- list-single-header end -->
                                        <div class="list-single-facts fl-wrap">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-hand-holding-usd"></i>
                                                    <h6>Booking</h6><br>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            45
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-users"></i>
                                                    <h6>Customers Visit</h6>
                                                    <br>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            2557
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i  class="fal fa-clock"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            
                                                        </div>
                                                    </div>
                                                    <h6>Open Now</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-share"></i>
                                                    <div class="milestone-counter">
                                                        
                                                    </div>
                                                    <h6>Share</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->                                                                        
                                        </div>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>About Bussiness </h3>
                                            </div>
                                             <p>
                                                {{ substr($post->about, 0, 160) }}                                            
                                                                                                                            
                                            
                                            </p>
                                           
                                        </div>
                                        <!--   list-single-main-item end -->
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Facilities</h3>
                                            </div>
                                            <div class="listing-features fl-wrap">
                                                <ul>
                                                    @if($post->power)
                                                    <li><i class="fal fa-rocket"></i> Elevator in building</li>
                                                    @endif
                                                    @if($post->wifi)
                                                    <li><i class="fal fa-wifi"></i> Free Wi Fi</li>
                                                    @endif
                                                    @if($post->parking)
                                                    <li><i class="fal fa-parking"></i> Free Parking</li>
                                                    @endif
                                                    @if($post->air)
                                                    <li><i class="fal fa-snowflake"></i> Air Conditioned</li>
                                                    @endif
                                                  
                                                 
                                                </ul>
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="list-single-main-item-title no-dec-title fl-wrap">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#"> {{$post->keywords}} </a>
                                                <a href="#">Hostel</a>
                                                                             
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->     
                                        <!-- accordion-->
                                        <div class="accordion mar-top">
                                            <a class="toggle act-accordion" href="#"> Details option   <span></span></a>
                                            <div class="accordion-inner visible">
                                                <p>{{$post->detail_1}}</p>
                                            </div>
                                            <a class="toggle" href="#"> Details option 2  <span></span></a>
                                            <div class="accordion-inner">
                                                <p>{{$post->detail_2}}</p>
                                            </div>
                                            <a class="toggle" href="#"> Details option 3  <span></span></a>
                                            <div class="accordion-inner">
                                                <p>{{$post->detail_3}}</p>
                                            </div>
                                        </div>
                                        <!-- accordion end -->                                                     
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Available Services</h3>
                                            </div>
                                            <!--   rooms-container -->
                                            <div class="rooms-container fl-wrap">
                                                <!--  rooms-item -->
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">

                                                        @if('$post->img_5')

                                                        
                                                        <img src="{{asset('/')}}storage/{{$post->img_5}}" alt=""  >
                                                        @else
                                                        <img src="{{asset('/')}}images/gal/5.jpg" alt="">
      
                                                        @endif
                                                       
                                                    </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <span class="rooms-price">{{$post->service_price}} <strong> / {{$post->service_name}}</strong></span>
                                                            <h3>{{$post->service}}</h3>
                                                           
                                                        </div>
                                                        <p>{{$post->service_details}}</p>
                                                        <div class="facilities-list fl-wrap">
                                                           
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  rooms-item end -->
                                                <!--  rooms-item -->
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">
                                                      
                                                        @if('$post->img_6')

                                                        
                                                        <img src="{{asset('/')}}storage/{{$post->img_6}}" alt=""  >
                                                        @else
                                                        <img src="{{asset('/')}}images/gal/9.jpg" alt="">
      
                                                        @endif
                                                               </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <span class="rooms-price">{{$post->service_price}} <strong> / {{$post->service_name}}</strong></span>
                                                            <h3>{{$post->service2}}</h3>
                                                           
                                                        </div>
                                                        <p>{{$post->service_details2}}</p>
                                                        <div class="facilities-list fl-wrap">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  rooms-item end -->   
                                                <!--  rooms-item -->
                                               
                                                <!--  rooms-item end -->                                                      
                                            </div>
                                            <!--   rooms-container end -->
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->   
                                      
                                        <!-- list-single-main-item end -->   
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec6">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Add Review</h3>
                                            </div>
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
                                                <!-- Review Comment -->
                                               @livewire('front-review',['b_id' =>$post->id])
                                            </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->                                    
                                    </div>
                                </div>
                                <!--   datails end  -->
                                <!--   sidebar  -->
                                <div class="col-md-4">
                                    <!--box-widget-wrap -->  
                                    <div class="box-widget-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Booking /Enquiry</h3>
                                                    </div>
                                                   @livewire('front-booking',['b_id' =>$post->id])
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                      
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget counter-widget" data-countDate="09/12/2019">
                                                <div class="banner-wdget fl-wrap">
                                                    <div class="overlay"></div>
                                                    <div class="bg"  data-bg="{{asset('/')}}images/bg/10.jpg"></div>
                                                    <div class="banner-wdget-content fl-wrap">
                                                        <h4>Get a discount <span>20%</span> when ordering a room from three days.</h4>
                                                        <div class="countdown fl-wrap">
                                                            <div class="countdown-item">
                                                                <span class="days rot">10</span>
                                                                <p>days</p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="hours rot">01</span>
                                                                <p>hours </p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="minutes rot">05</span>
                                                                <p>minutes </p>
                                                            </div>
                                                            <div class="countdown-item">
                                                                <span class="seconds rot">09</span>
                                                                <p>seconds</p>
                                                            </div>
                                                        </div>
                                                        <a href="#">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                     
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Contact Information</h3>
                                                    </div>
                                                    <div class="box-widget-list">
                                                        <ul>
                                                            <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#"> {{ucfirst($post->address)}} ,{{$post->City->name}},{{$post->State->name}},{{$post->Country->country_name}}</a></li>
                                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#"> {{$post->whatsapp}}  </a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#"> {{$post->user->email}}  </a></li>
                                                            <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#"> {{$post->website}}   </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul>
                                                            <li><a href=" {{$post->fb}} " target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href=" {{$post->tw}} " target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="{{$post->youtube}}  " target="_blank" ><i class="fab fa-youtube"></i></a></li>

                                                            <li><a href="{{$post->ins}}  " target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                          
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Price Range </h3>
                                                    </div>
                                                    <div class="claim-price-wdget fl-wrap">
                                                        <div class="claim-price-wdget-content fl-wrap">
                                                            <div class="pricerange fl-wrap"><span>Price : </span> 81$ - 320$ </div>
                                                            <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                             
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div id="weather-widget" class="gradient-bg" data-city="New York" data-country="USA"></div>
                                        </div>
                                        <!--box-widget-item end -->   
                                        <!--box-widget-item end -->   
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget widget-posts">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Recommended Listings</h3>
                                                    </div>
                                                    <!--box-image-widget-->
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src=" {{asset('images/all/4.jpg')}} " alt="">
                                                            <a href="#" class="color2-bg" target="_blank">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            <h4>Times Square <span>2.3 km</span></h4>
                                                            <p>It�s impossible to miss the colossal billboards, glitzy lights and massive crowds that make this intersection the city�s beating heart.</p>
                                                        </div>
                                                    </div>
                                                    <!--box-image-widget end -->
                                                 
                                                    <!--box-image-widget end -->                                                         
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                           
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Hosted By</h3>
                                                    </div>
                                                    <div class="box-widget-author fl-wrap">
                                                        <div class="box-widget-author-title fl-wrap">
                                                            <div class="box-widget-author-title-img">

                                                               @if ($post->user->profile_image)
                                                               <img src=" {{asset('/')}}storage/{{$post->img_5}}" alt=""> 
                                                               @else
                                                               <img src="{{asset('/')}}images/avatar/4.jpg" alt=""> 
                                                               @endif 
                                                               
                                                                
                                                            </div>
                                                            <a href="user-single.html"> {{$post->user->name}}   </a>
                                                         
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                              
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>Similar Listings</h3>
                                                    </div>
                                                    <div class="widget-posts fl-wrap">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <a href="#"  class="widget-posts-img"><img src="{{asset('/')}}images/gal/3.jpg" class="respimg" alt=""></a>
                                                                <div class="widget-posts-descr">
                                                                    <a href="#" title="">Park Central</a>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                                                    <span class="rooms-price">$80 <strong> /  Awg</strong></span>
                                                                </div>
                                                            </li>
                                                            <li class="clearfix">
                                                                <a href="#"  class="widget-posts-img"><img src="images/gal/1.jpg" class="respimg" alt=""></a>
                                                                <div class="widget-posts-descr">
                                                                    <a href="#" title="">Holiday Home</a>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>
                                                                    <span class="rooms-price">$50 <strong> /   Awg</strong></span>
                                                                </div>
                                                            </li>
                                                            <li class="clearfix">
                                                                <a href="#"  class="widget-posts-img"><img src="images/gal/2.jpg" class="respimg" alt=""></a>
                                                                <div class="widget-posts-descr">
                                                                    <a href="#" title="">Moonlight Hotel</a>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>
                                                                    <span class="rooms-price">$105 <strong> /  Awg</strong></span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a class="widget-posts-link" href="#">See All Listing <i class="fal fa-long-arrow-right"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                            
                                    </div>
                                    <!--box-widget-wrap end -->  
                                </div>
                                <!--   sidebar end  -->
                            </div>
                            <!--   row end  -->
                        </div>
                        <!--   container  end  -->
                    </section>
                    <!--  section  end-->
                </div>
                <!-- content end-->
             
                @endsection