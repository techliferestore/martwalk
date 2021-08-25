<div>
   
<div class="dashboard-content fl-wrap">







         <div class="box-widget-item-header mat-top">

                     <h3>Our Services 1</h3>

                 </div>

                 <!-- profile-edit-container-->

                 <div class="profile-edit-container">

                     <div class="custom-form">

                         <div class="room-add-item">

                             <label>Title <i class="fal fa-warehouse-alt"></i></label>

                             <input type="text" name="i_person" wire:model="service_name" placeholder="Enter Service Name" maxlength="20" value=""/>

                             <div class="row">

                                 <div class="col-md-6">

                                     <label>Price<i class="fal fa-dollar-sign"></i> </label>

                                     <input type="text" wire:model="service_price"  name="i_price" placeholder="INR " value=""/>

                                 </div>

                                 <div class="col-md-6">

                                     <label>Item  </label>

                                     <input type="text" wire:model="service"  name="i_guest" placeholder=" Numder of guests" value=""/>

                                 </div>

                             </div>

                             <label>Details</label>

                             <textarea cols="40" rows="3" wire:model="service_details" name="i_detail" maxlength="367" placeholder="Datails"></textarea>

                             <div class="profile-edit-container" style="margin-top:30px">

                                 <div class="row">

                                     <div class="col-md-4">

                                         <label>Gallery-3</label>



                                 <input type="file" wire:model="img_5" name="i_gallery" class="upload">

                                 <div class="col-md-6">

                                    <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_5}}" style="max-height: 200px; max-width: 100px;" alt="">
                                    
                                            
                                    </div>

                                     </div>

<div class="col-md-4">



<img src="addlist/" style="height:200px;">

</div>







                                 </div>

                             </div>

                         </div>



                     </div>



                 </div>











                 </div>



                    <div class="box-widget-item-header mat-top">



         <div class="box-widget-item-header mat-top">

                     <h3>Our Services 2</h3>

                 </div>

                 <!-- profile-edit-container-->

                 <div class="profile-edit-container">

                     <div class="custom-form">

                         <div class="room-add-item">

                             <label>Title <i class="fal fa-warehouse-alt"></i></label>

                             <input type="text" wire:model="service_name2"  name="i_title" placeholder="Service  "  maxlength="20" value=""/>

                             <div class="row">

                                 <div class="col-md-6">

                                     <label>Price<i class="fal fa-dollar-sign"></i> </label>

                                     <input type="text"  wire:model="service_price2" name="i_text" placeholder="INR " maxlength="367" value=""/>

                                 </div>

                                 <div class="col-md-6">

                                     <label>Item  </label>

                                     <input type="text" wire:model="service2" name="i_name" placeholder=" Item Name" value=""/>

                                 </div>

                             </div>

                             <label>Details</label>

                             <textarea cols="40" rows="3"  wire:model="service_details2" name="sb_b"  maxlength="367" placeholder="Datails"></textarea>

                             <div class="profile-edit-container" style="margin-top:30px">

                                 <div class="row">

                                     <div class="col-md-4">

                                         <label>Gallery-3</label>



                                 <input type="file" wire:model="img_6" name="sb_discount" class="upload">
                                 <div class="col-md-6">

                                    <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_6}}" style="max-height: 200px; max-width: 100px;" alt="">
                                    
                                            
                                    </div>
                                     </div>



                                     <div class="col-md-4">



<img src="addlist/" style="height:200px;">

</div>





                                 </div>

                             </div>

                         </div>



                     </div>



                 </div>











                 </div>



     <!-- profile-edit-container end-->





                 <!-- profile-edit-container end-->



             <!-- dashboard-list-box end-->



         <!-- dasboard-wrap end-->

          <div class="col-md-6">

         <!-- <button class="btn  color2-bg  float-btn " type="reset" >Reset<i class="fal fa-paper-plane"></i>
         </button -->

         </div>



         <div class="col-md-6">

         <button class="btn  color2-bg  float-btn " wire:click.prevent="serviceUpdate()" name="list5" >Next<i class="fal fa-paper-plane"></i></button></div>

 </form>

</div>
@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
</section>




</div>
