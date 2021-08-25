@extends('layouts.layout_home')
@section('content')
<div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/26.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2><span>New York Hotels</span></h2>
                                <span class="section-separator"></span>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="breadcrumbs-fs fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listing </a><span>Fullwidth Map</span></div>
                        </div>
                    </div>
                    <!--  section-->
                    <section class="grey-blue-bg small-padding" id="sec1">
                        <div class="container">
                            <div class="row">
                                <!--filter sidebar -->
                                <div class="col-md-4">
                                    <div class="mobile-list-controls fl-wrap">
                                        <div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter</div>
                                    </div>
                                    <div class="fl-wrap filter-sidebar_item fixed-bar">
                                        <div class="filter-sidebar fl-wrap lws_mobile">
                                            <!--col-list-search-input-item -->
                                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                                <label>City/Category</label>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City" class="chosen-select" >
                                                        <option>All Cities</option>
                                                        <option>New York</option>
                                                        <option>London</option>
                                                        <option>Paris</option>
                                                        <option>Kiev</option>
                                                        <option>Moscow</option>
                                                        <option>Dubai</option>
                                                        <option>Rome</option>
                                                        <option>Beijing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--col-list-search-input-item end-->                      
                                            <!--col-list-search-input-item -->
                                           
                                            <!--col-list-search-input-item end-->
                                            <!--col-list-search-input-item -->
                                           
                                            <!--col-list-search-input-item end-->
                                            <!--col-list-search-input-item -->
                                          
                                            <!--col-list-search-input-item end-->
                                            <!--col-list-search-input-item -->                                            
                                           
                                            <!--col-list-search-input-item end-->                                        
                                            <!--col-list-search-input-item -->
                                           
                                            <!--col-list-search-input-item end--> 
                                            <!--col-list-search-input-item -->
                                          
                                            <!--col-list-search-input-item end-->  
                                            <!--col-list-search-input-item  -->                                         
                                            <div class="col-list-search-input-item fl-wrap">
                                                <button class="header-search-button" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                            </div>
                                            <!--col-list-search-input-item end--> 
                                        </div>
                                    </div>
                                </div>
                                <!--filter sidebar end-->
                                <!--listing -->
                                <div class="col-md-8">
                                    <!--col-list-wrap -->
                                    <div class="col-list-wrap fw-col-list-wrap post-container">
                                        <!-- list-main-wrap-->
                                        <div class="list-main-wrap fl-wrap card-listing">
                                            <!-- list-main-wrap-opt-->
                                            <div class="list-main-wrap-opt fl-wrap">
                                                <div class="list-main-wrap-title fl-wrap col-title">
                                                    <h2> <span></span></h2>
                                                </div>
                                                <!-- price-opt-->
                                                
                                                <div class="price-opt">
                                                    <span class="price-opt-title">Sort results by:</span>
                                                    <div class="listsearch-input-item">
                                                        <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                            <option>Popularity</option>
                                                            <option>Average rating</option>
                                                            <option>Price: low to high</option>
                                                            <option>Price: high to low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- price-opt end-->
                                                <!-- price-opt-->
                                                <div class="grid-opt">
                                                    <ul>
                                                        <li><span class="two-col-grid "><i class="fas fa-th-large"></i></span></li>
                                                        <li><span class="one-col-grid act-grid-opt"><i class="fas fa-bars"></i></span></li>
                                                    </ul>
                                                </div>
                                                <!-- price-opt end-->                               
                                            </div>
                                            <!-- list-main-wrap-opt end-->
                                            <!-- listing-item-container -->
                                            <div class="listing-item-container init-grid-items fl-wrap">
                                                <!-- listing-item  -->
                                              @if ($data)
                                             NO Listing Found 
                                                @else
                                                
                                            
                                                @foreach ((array)$data as $item)
                                              
                                                                                               
                                                <div class="listing-item has_one_column">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html"><img src="{{asset('/')}}images/gal/8.jpg" alt=""></a>
                                                            <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                                <span class="avatar-tooltip">Added By  <strong>@if(isset($item->user->name)){{$item->user->name}}@endif</strong></span>
                                                            </div>
                                                            <div class="sale-window">Open</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Very Good</strong>27 Reviews </div>
                                                                    <span>5.0</span>                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"  style="text-transform: capitalize;" ><a href="@if(isset($item->slug)){{$item->slug}}@endif/@if(isset($item->City->name)){{$item->City->name}}@endif/@if(isset($item->user_id)){{$item->user_id}}@endif">{{$item->bussiness_name}}</a></h3>
                                                                    <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                                </div>
                                                            </div>
                                                            <p>#</p>
                                                            <ul class="facilities-list fl-wrap">
                                                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                            </ul>
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-category-price">Awg/Night <span>$ 320</span></div>
                                                                <div class="geodir-opt-list">
                                                                    <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>

                                                @endforeach
                                                @endif
                                                
                                                <!-- listing-item end -->
                                               
                                                <!-- listing-item end -->                                                        
                                            </div>
                                            <!-- listing-item-container end-->
                                            <a class="load-more-button" href="#">Load more <i class="fal fa-spinner"></i> </a>
                                        </div>
                                        <!-- list-main-wrap end-->
                                    </div>
                                    <!--col-list-wrap end -->
                                </div>
                                <!--listing  end-->
                            </div>
                            <!--row end-->
                        </div>
                        <div class="limit-box fl-wrap"></div>
                    </section>
                </div>
                <!-- content end-->
           

            @endsection