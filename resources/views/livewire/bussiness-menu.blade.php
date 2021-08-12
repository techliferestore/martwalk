<div class="dashboard-header fl-wrap">
                                <h3>My Bussiness</h3>
                            </div>
                            <div class="nav-holder" style="background-color:#18458b; width:100%; ">
                          <nav style="float:left; padding-left:10px;">
                                <ul>
                                    <li>
                                        <a href="#"wire:click.prevent="edit_bussiness()"
                                        
                                        
@if($bussiness)

class="act-link"
@else class=""
@endif>Basic Information<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
</li>
                                                                      <li>
                                          <a href="#"wire:click.prevent="about()" @if($about)

class="act-link"
@else class=""
@endif>About-Business</a>
                                        <!--second level -->

                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#"wire:click.prevent="social()"@if($social)

class="act-link"
@else class=""
@endif>Social-links</a></li>
                                        <!--second level -->

                                        <!--second level end-->

                                    <li>
                                        <a href="#"wire:click.prevent="gallery()" @if($gallery)

class="act-link"
@else class=""
@endif> Gallery </a>
                                        <!--second level -->
                                       </li>
                                    <!-- <li><a href="comingson.php">Shop</a></li> -->

                                    <!-- <li>
                                        <a href="subcategory/insurance">Insurance</a></li> -->
                                         <li>
                                        <a href="#"wire:click.prevent="timing()" @if($timing)

class="act-link"
@else class=""
@endif> Timing </a>
                                        
                                    <li><a href="#"wire:click.prevent="services()"@if($services)

class="act-link"
@else class=""
@endif >Services </a></li>
                                   
                                    
                                    <!--second level end-->

                                </ul>
                            </nav>
                        </div>
                            
                           

<div class="box-widget-item-header" style="
padding: 0 0 20px;
    margin: 0 0 25px;
    float: left;
    width: 100%;
    border-bottom: 1px solid #eee;
    position: relative;
    margin-top:4px;
    ">

    <h3>  </h3>

</div>
