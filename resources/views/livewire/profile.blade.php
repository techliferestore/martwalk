
<form  wire:submit.prevent="update({{Auth::user()->id}})" >




<div class="profile-edit-container">

    <div class="custom-form" >

  


    <style> 
    .error{
        color:red;
    } </style>  
    <div class="col-md-12">
    

        <label>Your Name <i class="far fa-user"></i></label>
       
     
        <input type="text" wire:model.lazy="name"  />
        @error('name')<span class="error">{{$message}}</span>@enderror
   
      
         </div>

        <div class="col-md-12">

        <label>Email Address<i class="far fa-envelope"></i>  </label>

        <input type="email" wire:model.lazy="email"   />
        @error('email')<span class="error">{{$message}}</span>@enderror
     </div>


        <div class="col-md-12">

        <label>Phone<i class="far fa-phone"></i>  </label>

        <input type="text" wire:model.lazy="contactno" name="mobilenumber"  />
        @error('contactno')<span class="error">{{$message}}</span>@enderror


</div>

       

       <div class="row">


         <div class="col-md-6">

             <label>Change Avatar</label>
              @if($image)
        <img src={{$image}} width="200" />
        @endif
        <img src="   {{url('/storage/profile_image/'.Auth::user()->profile_image)}}" width="200" />
        
       
             </div>

        

             <div class="col-md-6"> 
       
   <br>
        <input type="file" id="image" wire:change="$emit('fileChoosen')">
    </div>      

    </div>         


<script>
    window.livewire.on('fileChoosen', () => {
        let inputField = document.getElementById('image')
        let file = inputField.files[0]
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(file);

    })
</script>

<div class="col-md-12 text-center">
        <button type="submit" class="btn color2-bg  float-btn">Save Changes<i class="fal fa-save"></i></button>

    </div>
</div>

<div class="col-md-12 text-center">

        @if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
    </div>
</form>
