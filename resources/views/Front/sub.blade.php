@extends('layouts.layout_home')
@section('content')
<div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="{{asset('/')}}images/bg/23.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="section-title-separator"><span></span></div>
                                <h2>
                                    
                                    <span>xx</span>
                                    
                                  </h2>
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
                                                        <option>Pilkhuwa</option>
                                                        <option>Ghaziabad</option>
                                                        <option>Hapur</option>
                                                        
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
                                                <button class="header-search-button" onclick="window.location.href='#'">Search <i class="far fa-search"></i></button>
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
                                                    <span class="price-opt-title">All subcategories</span>
                                                  
                                                </div>
                                                <!-- price-opt end-->
                                                <!-- price-opt-->
                                                <div class="grid-opt">
                                                   
                                                </div>
                                                <!-- price-opt end-->                               
                                            </div>
                                            <!-- list-main-wrap-opt end-->
                                            <!-- listing-item-container -->
                                            <div class="listing-item-container init-grid-items fl-wrap">
                                                <!-- listing-item  -->
                                             
                                              
                                                                        @foreach ($sub as $item)
                                                                                                 
                                                                                             
                                                <div class="listing-item has_one_column "style="max-height:120px; margin-bottom:20px;">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="listing-single.html">
                                                         <img src="{{asset('/')}}images/favicon.ico" style="max-height: 120px; width:120px;"  alt=""></a>
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">

                                                                    <form method="GET" action="{{url('sub_listing ')}}">
                                                                        <input type="hidden" name="sub" value="{{$item->id}}">
                                                                        <button class="main-search-button color2-bg" style="   height: 40px;" type="submit" >{{$item->subcategory}} </button>

                                                            
                                                                    </form>
                                                                  
                                                                </div>
                                                            </div>
                                                            <p>#</p>
                                                           
                                                        </div>
                                                    </article>
                                                </div>
                                               
                                                @endforeach  
                               
                                                <!-- listing-item end -->
                                               
                                                <!-- listing-item end -->                                                        
                                            </div>
                                            <!-- listing-item-container end-->
                                          
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