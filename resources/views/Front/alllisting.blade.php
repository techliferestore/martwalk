@extends('layouts.layout_home')
@section('content')
<div id="wrapper" >
                <!-- content-->
                <div class="content" style="
    width: 100%;
    position: relative;
    z-index: 4;
    float: left;
    background: #fff;
    overflow: hidden;
    padding-left: 193px;
    padding-bottom: 34px;
">

                     <div class="container" style="    text-align: center;
    padding-bottom: 35px;
    margin-left: -55px;
    padding-top: 34px">
                            <div class="section-title">
                                <div class="section-title-separator"><span></span></div>
                               <h2>Top Categories   <i  class="fa fa-category" style="font-size:20px;font-weight: 300; padding-bottom: 20px; "></i></h2>
                                
                            </div>
                        </div>
                    <!-- Map -->
                    
                    <!-- Map end -->
                   
                    <!--section -->

                        <div class="container">
                            
                           
                                <!--listing -->

                                    
                                    <!--list-wrap-search   -->
                                    
                                    <!--list-wrap-search end -->                    
                                    <!--col-list-wrap -->




                                                <!-- listing-item  -->
                                               
                                                   
                                                @foreach ($cat as $item)                                            

<div class="col-md-3" style="border-style: solid; border-width: 1px; padding: 12px; margin-top: 10px; margin-right: 20px; margin-bottom: 10px;">
   
<div class="row">
   
    <div class="col-md-3 ">
        <a href="#"> <img src="{{asset('/')}}images/favicon.ico"  style="border-radius: 50%;max-height:44px; "  alt="#">
          
        </a></div>
    <div class="col-md-9" style="text-align: left;">
        <a href="listing.php?keyword="> 
    <p>{{$item->category}}</p>
        </a>

    </div>

</div>

</div>
@endforeach












                                          


                                                <!-- listing-item end --> 
                                                <!-- listing-item  -->

                                                <!-- listing-item end -->                         

                                       </div>
                                     
                        <!-- listing-item-container end-->
                                            <!-- pagination-->
  
                                            <!-- pagination end-->

                                        <!-- list-main-wrap end-->

                                    <!--col-list-w:rap end -->
                                <!--listing  end-->
                            
                            <!--row end-->
                        
                </div>
             
                
                <!-- content end-->
            </div>
          
            @endsection