<div>
<div class="box-widget-item-header mat-top">

    <h3>Your  Gallery</h3>

</div>
<div class="profile-edit-container">

<div class="custom-form">

    <div class="row">
    


        <div class="col-md-4">

            <!-- act-widget-->

            <div class="act-widget fl-wrap">

              

                <div class="add-list-media-wrap">





                        <input type="file" wire:model="img1"  name="img1" class="upload">
                        <div class="col-md-6">

                            <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_1}}" style="max-height: 200px; max-width: 100px;" alt="">
                            
                                    
                            </div>


                        <input type="file" wire:model="img2"  name="img2" class="upload">

                        <div class="col-md-6">

                            <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_2}}" style="max-height: 200px; max-width: 100px;" alt="">
                            
                                    
                            </div>

                </div>

            </div>

            <!-- act-widget end-->

        </div>



        <div class="col-md-4">

            <!-- act-widget-->

            <div class="act-widget fl-wrap">

            

                <div class="add-list-media-wrap">



                    <input type="file" wire:model="img3"  name="img3" class="upload">

                    <div class="col-md-6">

                        <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_3}}" style="max-height: 200px; max-width: 100px;" alt="">
                        
                                
                        </div>

                </div>



                    <input type="file" wire:model="img4"  name="img4" class="upload">

                    <div class="col-md-6">

                        <img src="{{asset('/')}}storage/{{Auth::user()->bussiness->img_4}}" style="max-height: 200px; max-width: 100px;" alt="">
                        
                                
                        </div>

            </div>



            <!-- act-widget end-->









        </div>



<!-- profile-edit-container end-->





        <!-- profile-edit-container end-->



    <!-- dashboard-list-box end-->



<!-- dasboard-wrap end-->

 <div class="col-md-6">

<!-- <button class="btn  color2-bg  float-btn " name="add_business" >Reset<i class="fal fa-paper-plane"></i></button> -->
</div>



<div class="col-md-6">

<button class="btn  color2-bg  float-btn " wire:click.prevent="updateGallery()" name="list4" >Next<i class="fal fa-paper-plane"></i></button></div>

</form>

</div>
@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif

</section>





</div>
