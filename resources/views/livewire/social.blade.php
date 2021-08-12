<div>



<div class="box-widget-item-header mat-top">

    <h3>Your  Socials</h3>

</div>

<!-- profile-edit-container-->

<div class="profile-edit-container">

    <div class="custom-form">
    <div class="col-md-12">

    

        <label>Facebook <i class="fab fa-facebook"></i></label>

        <input type="text" wire:model="fb" name="fb" placeholder="https://www.facebook.com/" value="fb>"/>
        @error('fb')<span class="error">{{$message}}</span>@enderror

        </div>
        <div class="col-md-12">

        <label>Twitter<i class="fab fa-twitter"></i>  </label>

        <input type="text" wire:model="tw" name="tw" placeholder="https://twitter.com/" value="tw>"/>
        @error('tw')<span class="error">{{$message}}</span>@enderror
        </div>
        <div class="col-md-12">
        <label>Youtube Channel<i class="fab fa-youtube"></i>  </label>

        <input type="text" wire:model="yt"  placeholder="https://youtube.com" value="yt>"/>
        @error('yt')<span class="error">{{$message}}</span>@enderror
        </div>
        <div class="col-md-12">

        <label> Instagram <i class="fab fa-instagram"></i>  </label>

        <input type="text" wire:model="ins" name="ins" placeholder="https://www.instagram.com/" value="ins>"/>
        @error('ins')<span class="error">{{$message}}</span>@enderror
        </div>

        <div class="col-md-12">

        <label> Website <i class="fab fa-instagram"></i>  </label>

        <input type="text" wire:model="website" name="ins" placeholder="https://www.instagram.com/" value="ins>"/>
        @error('website')<span class="error">{{$message}}</span>@enderror
</div>



</div>


<div class="col-md-6">

<button class="btn  color2-bg  float-btn " wire:click.prevent="social_links()"  >Next<i class="fal fa-paper-plane"></i></button></div>

</form>
@if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
</div>

</section>

