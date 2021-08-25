

@if (session()->has('message'))
<div style="color:green ;">
    {{ session('message') }}
</div>
@endif
<form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
    <fieldset>
        <div class="review-score-form fl-wrap">
            <div class="review-range-container">
                <!-- review-range-item-->
                <div class="review-range-item">
                    <div class="range-slider-title">Cleanliness</div>
                    <div class="range-slider-wrap ">
                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                    </div>
                </div>
                <!-- review-range-item end --> 
                <!-- review-range-item-->
                <div class="review-range-item">
                    <div class="range-slider-title">Comfort</div>
                    <div class="range-slider-wrap ">
                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                    </div>
                </div>
                <!-- review-range-item end --> 
                <!-- review-range-item-->
                <div class="review-range-item">
                    <div class="range-slider-title">Staf</div>
                    <div class="range-slider-wrap ">
                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                    </div>
                </div>
                <!-- review-range-item end --> 
                <!-- review-range-item-->
                <div class="review-range-item">
                    <div class="range-slider-title">Facilities</div>
                    <div class="range-slider-wrap">
                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                    </div>
                </div>
                <!-- review-range-item end -->                                     
            </div>
            <div class="review-total">
                <span><input type="text"  wire:model.lazy="score" data-form="AVG({rgcl})" value="0"></span>    
                @error('score') <span style="color: red;">{{ $message }}</span>@enderror
                <strong>Your Score</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><i class="fal fa-user"></i></label>
                <input type="text" wire:model.lazy="name" placeholder="Your Name *" value=""/>
                @error('name') <span style="color: red;">{{ $message }}</span>@enderror

            </div>
            <div class="col-md-6">
                <label><i class="fal fa-envelope"></i>  </label>
                <input type="text" wire:model.lazy="phone" placeholder="Phone" value=""/>
                @error('phone') <span style="color: red;">{{ $message }}</span>@enderror

            </div>
        </div>
        <textarea cols="40" rows="3" wire:model.lazy="comment" placeholder="Your Review:"></textarea>
        @error('comment') <span style="color: red;">{{ $message }}</span>@enderror

    </fieldset>
    <button  wire:click.prevent="store()"  class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit Review <i class="fal fa-paper-plane"></i></button>
</form>