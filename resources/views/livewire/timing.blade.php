<div>



<div class="box-widget-item-header mat-top">

    <h3>Your  Bussiness Timing</h3>

</div>


<div class="custom-form">
    <table class="table">
       
        <tbody>
        <tr>
        <td> <div class="col-md-6">
        <label>Opening Timing </label>

        <input type="text" wire:model="open" placeholder="opening time" />
        @error('yt')<span class="error">{{$message}}</span>@enderror
        </div></td>

        <td> <div class="col-md-6">
        <label>Closing Timing </label>

        <input type="text" wire:model="close"  placeholder="closing time" />
        @error('yt')<span class="error">{{$message}}</span>@enderror
        </div></td>
        </tr>
        

            <tr>
                
                <td><div class="col-sm-12">
        <label for="airconditioner"> Monday </label>


       
</div></td>
                <td> <input type="checkbox" wire:model="mon"  name="wifi" value="1"></td>
             
            </tr>
            <tr>
               
                <td><div class="col-sm-12">

<div class="checkbox checkbox-inline">


    <label for="airconditioner"> Tuesday </label>

</div>

</div></td>
                <td>
    <input type="checkbox" wire:model="tue"  name="wifi" value="1"></td>
              
            </tr>
            <tr>
            
                <td><div class="col-sm-12">

<div class="checkbox checkbox-inline">

     <label for="airconditioner"> Wednesday </label>

</div>

</div></td>
                <td>   <input type="checkbox" wire:model="wed"  name="wifi" value="1"></td>
             
            </tr>   
            <tr>
<td>  <div class="col-sm-12">

<div class="checkbox checkbox-inline">

      <label for="airconditioner"> Thursday </label>

</div>

</div>  </td>
<td>   <input type="checkbox" wire:model="thu"  name="wifi" value="1">
   </td>
            </tr> 


               <tr>
<td>  <div class="col-sm-12">

<div class="checkbox checkbox-inline">

     <label for="airconditioner"> Friday </label>

</div>

</div>  </td>
<td>     <input type="checkbox" wire:model="fri"  name="wifi" value="1">  </td>
            </tr> 

               <tr>
<td>  <div class="col-sm-12">

<div class="checkbox checkbox-inline">

       <label for="airconditioner"> Saturday </label>

</div>

</div>  </td>
<td>   <input type="checkbox" wire:model="sat"  name="wifi" value="1">
  </td>
            </tr> 

               <tr>
<td>  <div class="col-sm-12">

<div class="checkbox checkbox-inline">

       <label for="airconditioner"> Sunday </label>

</div>

</div>
</td>
<td>   <input type="checkbox" wire:model="sun"  name="wifi" value="1">
  </td>
            </tr> 
      
        </tbody>
    </table>
</div>













<!-- profile-edit-container-->






        


<div class="col-md-6">

<button class="btn  color2-bg  float-btn "  wire:click.prevent="time_create()" name="list3" >Next<i class="fal fa-paper-plane"></i></button></div>
</div>
</div>
</form>
@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif


</section>

