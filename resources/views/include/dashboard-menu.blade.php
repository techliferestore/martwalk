
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!-- section-->
        <section class="flat-header color-bg adm-header">
            <div class="wave-bg wave-bg2"></div>
            <div class="container">
                <div class="dasboard-wrap fl-wrap">
                    <div class="dasboard-sidebar">
    <div class="dasboard-sidebar-content fl-wrap">
        <div class="dasboard-avatar">
        <img src="{{url('/storage/profile_image/'.Auth::user()->profile_image)}}" alt="">                                  </div>
        <div  class="dasboard-sidebar-item fl-wrap">
            <h3>
                <span>Welcome </span>
                @auth
            {{ ucfirst(Auth::user()->name) }}  
            
            @endauth     </h3>
        </div>
        <a   href="{{route('add-bussiness')}}" class="ed-btn">Add Business</a>
        <div class="user-stats fl-wrap">
            <ul>
             
               

    <li>
                    Business
                    <span>1</span>
                </li>                                 

 <li>

Bookings <span>0</span>


           
                    
               

                </li>
                <li>


 Reviews
                    <span>0</span>                   
                </li>
            </ul>
        </div>
        <a href="logout" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
    </div>
</div>                    

<!--dasboard-sidebar end-->

<!-- dasboard-menu-->

<div class="dasboard-menu">

      <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>



    <ul class="dasboard-menu-wrap" >

        

   
        <li class="">
       

            <a href="{{route('dashboard')}}" > <i class="far fa-user"></i>Profile</a>

          

                <ul >

              

                <li>  <a href="#">Change Password</a></li>

            </ul>

        </li>

        
        

       
        <li class="">
       

            <a   href="{{route('add-bussiness')}}">

            <i class="far fa-th-list"></i> My Business  </a>

           

        </li>

       
        <li class="">
       
        <a href="{{route('dashboard')}}"> <i class="far fa-calendar-check"></i>



                   Bookings <span>0</span> </a> </li>






                 
              
        <li class="">
       
        <a href="{{route('dashboard')}}"><i class="far fa-comments">
        </i> Reviews </a></li>

    </ul>

</div>


<!--dasboard-menu end class="user-profile-act"-->

<!--Tariff Plan menu-->

<div   class="tfp-btn"><span>Tariff Plan : </span> <strong>Extended</strong></div>

<div class="tfp-det">

    <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>

    <a href="price" class="tfp-det-btn color2-bg">Details</a>

</div>

<!--Tariff Plan menu end-->

</div>

</div>

</section>

<style>
li.active_class {
    background: #18458b !important;
}
</style>
        <!-- section end-->
        <!-- section-->
        <section class="middle-padding" style="margin-bottom: 170px; margin-top: 0px;">
            <div class="container">
                <!--dasboard-wrap-->
                <div class="dasboard-wrap fl-wrap">
                    <!-- dashboard-content-->
                    <div class="dashboard-content fl-wrap">
                        <div class="dashboard-list-box fl-wrap">
                           
                            <!-- dashboard-list end-->
                            


