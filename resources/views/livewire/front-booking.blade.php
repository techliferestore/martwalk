@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
<form name="bookFormCalc"   class="book-form custom-form">
    <fieldset>
        <div class="cal-item">
            <div class="listsearch-input-item">
                <label>Name</label>
                <input type="text"  wire:model.lazy="name"  placeholder="Name" name="name"   value=""/>
                @error('name') <span style="color: red;">{{ $message }}</span>@enderror

                <!--data-formula -->                                                                   
            </div> 
        </div>
        <div class="cal-item">
            <div class="listsearch-input-item">
                <label> Contact No. </label>
                <input type="text"  wire:model.lazy="phone"  placeholder="Contact No"    value=""/>
                @error('phone') <span style="color: red;">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="cal-item">
            <label> Query</label>
             
            <textarea cols="40" rows="3" wire:model.lazy="msg"  placeholder="Your Query:"></textarea>
            @error('msg') <span style="color: red;">{{ $message }}</span>@enderror

        </div>
    </fieldset>

   
    <button  wire:click.prevent="store()"  class="btnaplly color2-bg">Book Now<i class="fal fa-paper-plane"></i></button>
</form>

@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif