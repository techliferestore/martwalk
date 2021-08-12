


<div class="box-widget-item-header">

<br>

<h3> Basic Informations</h3>

</div>

<form  enctype="multipart/form-data">

<!-- profile-edit-container-->

<div class="profile-edit-container">

   <div class="custom-form">

<div >
      <label> <span style="color: #ff3528; size: 90px;">Required*</span> <i class="fal fa-briefcase"></i></label>

      <input type="text" placeholder="Name of your Bussiness" wire:model.lazy="bussiness_name" 
      name="title"  value="" required />
     
       @error('bussiness_name')<span class="error">{{$message}}</span>@enderror   
      
    </div>

<div >

<label >Categories</label>

<div class="col-md-6">

    <select wire:model="selectedCategory" class="form-control">

        <option value="" selected>Choose category</option>

        @foreach($categories as $category)

            <option value="{{ $category->id }}">{{ $category->category }}</option>

        @endforeach

    </select>

</div>

</div>



@if (!is_null($selectedCategory))

<div >

    <label  >subcategory</label>



    <div class="col-md-6">


        <select  wire:model="selectedSubcategory"  class="form-control">
     

            <option value="" selected>Choose subcategory</option>

            @foreach($subcategories as $subcategory)

                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory }}</option>

            @endforeach

        </select>

    </div>

</div>

@endif

       
     
     
      
      <div class="col-md-12">

         <label>Tag <i class="fa fa-key"></i></label>
         
    <input type="text" placeholder="tag" wire:model="tag" 
      name="tag"  value=""  />
         @error('tag')<span class="error">{{$message}}</span>@enderror   

      </div>

     
      <input type="hidden" wire:model="user_id"   value="3487">
      @error('user_id')<span class="error">{{$message}}</span>@enderror 
   </div>

</div>

</div>

<!-- profile-edit-container end-->

<!-- profile-edit-container end-->

<!-- dashboard-list-box end-->

</div>



<!-- dasboard-wrap end-->


<div class="col-md-6">

<button class="btn  color2-bg  float-btn " wire:click.prevent="update_basic({{Auth::user()->id}})" name="add_business">Next<i class="fal fa-paper-plane"></i></button></div>

</form>

@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
</div>
