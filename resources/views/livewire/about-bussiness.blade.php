<div>
<div class="box-widget-item-header">

<br>

<h3> About Bussiness</h3>

</div>
</div>
<div class="profile-edit-container">

<div class="custom-form">

    <label>Some information about business</label>

    <input type="text" wire:model="intro" maxlength="150" value="Address"/>
@error('intro')<span class="error">{{$message}}</span>@enderror
</div>

</div>

<div class="custom-form">

    <label>What's App No</label>

    <input type="text" wire:model="whatsapp" />
@error('whatsapp')<span class="error">{{$message}}</span>@enderror
</div>

<!-- profile-edit-container end-->

<!-- profile-edit-container end-->

<div class="box-widget-item-header mat-top">

<h3>Location  </h3>

</div>

<div class="col-md-12">
<div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
<label> Address   </label>

<input type="text" wire:model="address" maxlength="80" value="Address"/>
@error('address')<span class="error">{{$message}}</span>@enderror
</div>

</div>

<div class="col-md-12">

<div class="col-list-search-input-item ">

<label>Country</label>

<div class="frmSearch">

<select  wire:model="selectedCountry" class="form-control">

<option value="" selected>Choose Country</option>

@foreach($countries as $country)

    <option value="{{$country->id}}">{{$country->country_name}}</option>


@endforeach
</select>



</div>

</div>

</div>
@if (!is_null($selectedCountry))
<div class="col-md-12">

 <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">

      <label>State</label>
    <div class="frmSearch">
     
<select  wire:model="selectedState" class="form-control">

<option value="" selected>Choose State</option>


@foreach($states as $state)

    <option value="{{$state->id}}">{{$state->name}}</option>

    @endforeach

</select>



     </div>  
 </div>
</div>  
@endif

@if (!is_null($selectedState))
<div class="col-md-12">

 <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">

      <label>City</label>
    <div class="frmSearch">
     
<select wire:model="selectedCity"class="form-control">

<option value="" selected>Choose City</option>


@foreach($cities as $city)

    <option value="{{$city->stateID}}">{{$city->name}}</option>
@endforeach


</select>


     </div>  
 </div>
</div>  
@endif
<div class="col-md-12">

 <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">

      <label>Pin</label>
    <div class="frmSearch">
      <input type="text" wire:model="pin" id="search-state" name="state"   placeholder="Enter PIN Code" />
        @error('pin')<span class="error">{{$message}}</span>@enderror
       <div id="suggesstion-state"></div>

     </div>  
 </div>
</div>  
  



      

</div>



<div class="box-widget-item-header mat-top">

<h3>Header Image </h3>

</div>
<div class="row">

<!--col -->

<div class="col-md-6">

    


            <input type="file" wire:model.lazy="header_image"  name="bg_image" class="upload">

            @error('header_image')<span class="error">{{$message}}</span>@enderror



</div>

<div class="col-md-6">

<img src="{{asset('/')}}storage/{{Auth::user()->bussiness->header_image}}" style="max-height: 200px; max-width: 100px;" alt="">

        
</div>

</div>


<div class="box-widget-item-header mat-top">

<h3>Facilities</h3>

</div>



<!-- profile-edit-container-->

<div class="profile-edit-container">

<div class="custom-form">

    <!-- Checkboxes -->

    <div class="col-sm-3">

        <div class="checkbox checkbox-inline">

            <input type="checkbox" wire:model="wifi"  name="wifi" value="1">

            <label for="airconditioner"> Free Wifi </label>

        </div>

    </div>

    <div class="col-sm-3">

        <div class="checkbox checkbox-inline">

            <input type="checkbox" wire:model="parking"   name="parking" value="1">

            <label for="powerdoorlocks"> Free Parking </label>

        </div></div>

    <div class="col-sm-3">

        <div class="checkbox checkbox-inline">

            <input type="checkbox" wire:model="air"  name="air" value="1">

            <label for="antilockbrakingsys"> Air Conditioning </label>

        </div></div>



    <div class="col-sm-3">

        <div class="checkbox checkbox-inline">

            <input type="checkbox" wire:model="power" id="antilockbrakingsys" name="power" value="1">

            <label for="antilockbrakingsys"> Power BackUp </label>

        </div></div>



    <!-- Checkboxes end -->

</div>

</div>

<div class="row">



<div class="custom-form">

<div class="col-md-12">

    <label>Detail</label>

    <input type="text" wire:model="detail_1" placeholder="Title" name="f_title" value=""/>

</div>

<div class="col-md-12">

    <label>Detail</label>

    <input type="text" wire:model="detail_2" placeholder="text" name="f_text" value=""/>

</div>

<div class="col-md-12">

    <label>Detail</label>

    <input type="text" wire:model="detail_3" placeholder="text" name="f_name" value=""/>

</div>

</div>

</div>

<!-- profile-edit-container end-->





        <!-- profile-edit-container end-->



    <!-- dashboard-list-box end-->

</div>

<!-- dasboard-wrap end-->

 <div class="col-md-6">

<!-- <button class="btn  color2-bg  float-btn " name="add_business" >Reset<i class="fal fa-paper-plane"></i></button> -->

</div>



<div class="col-md-6">

<button class="btn  color2-bg  float-btn " wire:click.prevent="update_about()" name="list3" >Next<i class="fal fa-paper-plane"></i></button></div>

</form>
@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
</div>

</section>

