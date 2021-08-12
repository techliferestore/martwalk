<div>
<ul class="tabs-menu">

@if($registerForm) <li>
    @else
    <li  class="current">
        @endif

      
                                
                            <a href="" wire:click.prevent="register" ><i class="fal fa-sign-in-alt" ></i> Login</a></li>
                            @if($registerForm)
<li  class="current">
    @else
    <li > 
    @endif      
        <a href="" wire:click.prevent="register" ><i class="fal fa-user-plus" ></i> Register</a></li>
                        </ul>
    <div class="row">

        <div class="col-md-12">

            @if (session()->has('message'))

                <div class="alert alert-success">

                    {{ session('message') }}

                </div>

            @endif

            @if (session()->has('error'))

                <div class="alert alert-danger">

                    {{ session('error') }}

                </div>

            @endif

        </div>

    </div>

    @if($registerForm)



       
        <div class="tab">
                                    <div class="container">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                        <form method="POST" >
                                          
                                                <label >Full Name <span>*</span> </label>
                                                <input  type="text"  name="name" wire:model="name">
                                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                                                <label>Email Address <span>*</span></label>
                                                <input  type="text"   name="email"  wire:model="email" >
                                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                
                                                <label >Password <span>*</span></label>
                                                <input  type="password"     wire:model="password"   name="password"  value="" >
                                                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
              
                                            

                              
                                                <button   wire:click.prevent="registerStore" class="log-submit-btn color-bg"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        

                                <form>

    @else

       
    <div class="tab">
                                <!--tab -->
                                <div  class="container">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form  >
                                            <label>Username or Email Address <span>*</span> </label>
                                           <input name="email" type="text"     wire:model="email"  value="">
                                           @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                           <label >Password <span>*</span> </label>
                                            <input name="password"     wire:model="password" type="password"   onClick="this.select()" value="" >
                                            @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                                            <button type="submit" wire:click.prevent="login" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input  type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>




               

    @endif

</div>