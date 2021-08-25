<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\User;
use App\Models\bussinesses;
use App\Models\categories;
use App\Models\subcategories;
use App\Models\countries;
use App\Models\states;
use App\Models\cities;
use App\Models\b_times;
use Illuminate\Support\Str;

use Livewire\WithFileUploads;
class AddBussiness extends Component
{

    use WithFileUploads;
    
    public $bussiness = false;
    public $about=false;
    public $social=false;
    public $services=false; 
    public $gallery=false;
    public $timing=false; 
    public $profile_id,$pid;
    public $bussiness_name ,$categories ,$subcategories,$subcategory,$category;
    public $profile;
    public $booking;
    public $review;
   
    public $selectedCategory = NULL;
    public $selectedSubcategory;
    public $edit_bussiness;
    public $tag,$user_id;
    public $intro,$whatsapp;
    public $cities;
    public $selectedCountry;
    public $selectedState;
    public $countries;
    public $selectedCity;
    public $header_image;
    public $states;
    public $fb,$tw,$ins,$website,$yt;
    public $address,$pin;
    public $wifi,$parking,$power,$air,$detail_1,$detail_2,$detail_3;
    public $open,$close,$mon,$tue,$wed,$thu,$fri,$sat,$sun,$b_id;
    public $img1,$img2,$img3,$img4;
    public $service_name,$service_price,$service,$service_details,$img_5,$service_name2,$service_price2,
$service2,$service_details2,$img_6;



    public function mount($profile_id)

    {
$this->profile_id=$profile_id;

        $this->categories = categories::all();
        $cat= $this->subcategories = collect();
//dd($cat);
       
$this->countries = countries::all();
$this->states = collect();
$this->cities = collect();



    }

  
public function time_create()
{

   $pid=$this->profile_id;
    
    $validatedDate = $this->validate([
 
        'open' => 'required',
        'close' => 'required',
         
    ]);

    $post=b_times::updateOrCreate(['b_id'=>$this->profile_id  ],[
     
     
        'open'=>$this->open,   
        'close' => $this->close,
       'mon'=>$this->mon,            
        'tue'=>$this->tue,
        'wed'=>$this->wed,
        'thu'=>$this->thu,
        'fri'=>$this->fri,
        'sat'=>$this->sat,
        'sun'=>$this->sun ,
          'b_id'=>$this->profile_id,

    
    ]);


    session()->flash('message', 'Post Updated Successfully.');

}
    

    public function render()
    {
        return view('livewire.add-bussiness');
    }

    public function updatedSelectedCountry($country)

    {

        if (!is_null($country)) {

            $this->states = states::where('countryID', $country)->get();

        }

    }

    public function updatedSelectedState($state)

    {

        if (!is_null($state)) {

            $this->cities = cities::where('stateID', $state)->get();

        }

    }
    

    public function updatedSelectedCategory($category)

    {

        if (!is_null($category)) {

            $this->subcategories = subcategories::where('category_id', $category)->get();

        }

    }







    public function update_basic($id)
    {
      
        $this->userId = $id;
       
      
        $validatedDate = $this->validate([
 
            'bussiness_name' => 'required',
            'tag' => 'required',
             
        ]);
 
       
        $slug = Str::of($this->bussiness_name)->slug('-');
     
        $post=bussinesses::updateOrCreate(['user_id'=>$this->userId],[
         
            'keywords'=>$this->tag,   
            'bussiness_name' => $this->bussiness_name,
            'slug'=>$slug,
           'category_id'=>$this->selectedCategory,            
            'subcategory_id'=>$this->selectedSubcategory,
         'user_id'=> $this->userId,
        
        ]);
       //dd($post);


      
 
  
 
        session()->flash('message', 'Post Updated Successfully.');
 
     }


    public function update_about()
    {
 
        //dd($this->intro);
        $validatedDate = $this->validate([
 
         
       'pin'=>'required',
       'about'=>'required',
       'whatsapp'=>'required|max:10',
       'address'=>'required',
       'header_image'=>'image|max:1024',//1mb
       //'selectedCountry'=>'required'
        
        ]);
 
  
  
        $post = bussinesses::where('user_id',$this->profile_id);
      
        
   
        
        $post->update([
         
           'header_image'=> $this->header_image->store('headerImage','public'),
                 'about'=>$this->intro,
                 'whatsapp'=>$this->whatsapp,               
                  'address'=>$this->address,
                  'pin'=>$this->pin,
'country_id'=>$this->selectedCountry,
'state_id'=>$this->selectedState,
'city_id'=>$this->selectedCity,
'wifi'=>$this->wifi,
'parking'=>$this->parking,
'power'=>$this->power,
'air'=>$this->air,
'detail_1'=>$this->detail_1,
'detail_2'=>$this->detail_2,
'detail_3'=>$this->detail_3,


        ]);
       //dd($post);


      
       session()->flash('message', 'Post Updated Successfully.');
  
       
     }

     public function updateGallery()
     {
        $post = bussinesses::where('user_id',$this->profile_id);
      
       
        if($this->img1){
            $post = bussinesses::where('user_id',$this->profile_id);
           
            Storage::delete('$post->img_1');
 
     
        
            
        }
      
        $post->update([
        'img_1'=> $this->img1->store($this->profile_id.'gallery','public'),
        'img_2'=> $this->img2->store($this->profile_id.'gallery','public'),
        'img_3'=> $this->img3->store($this->profile_id.'gallery','public'),
        'img_4'=> $this->img4->store($this->profile_id.'gallery','public')
        ]);
        


        session()->flash('message', 'Post Updated Successfully.');
     }

     public function social_links()

     {
        

           
             $post = bussinesses::where('user_id',$this->profile_id);
   
      
        $post->update([
         
            'fb'=>$this->fb,   
            'tw' => $this->tw,
           'ins'=>$this->ins,            
            'youtube'=>$this->yt,
              'website'=>$this->website    

        ]);
   
  
 
        session()->flash('message', 'Post Updated Successfully.');  
      


     }
     public function serviceUpdate()

     {
        $validatedDate = $this->validate([
 
            'service_name'=>'required'
          
             ]);

           
             $post = bussinesses::where('user_id',$this->profile_id);
   
      
        $post->update([       
           
'service_name'=>$this->service_name,
'service_price'=>$this->service_price,
'service'=>$this->service,
'service_details'=>$this->service_details,
'service_name2'=>$this->service_name2,
'service_price2'=>$this->service_price2,
'service2'=>$this->service2,
'service_details2'=>$this->service_details2,
'img_5'=> $this->img_5->store($this->profile_id.'service','public'),
'img_6'=> $this->img_6->store($this->profile_id.'service','public'),
        ]);
   
  
 
        session()->flash('message', 'Post Updated Successfully.');  
      


     }

     

       public function edit_bussiness()
    {   
      
           
       
    
        $this->about=false;
        $this->social=false;
        $this->services=false; 
        $this->gallery=false;
        $this->timing=false; 
        $this->bussiness=true;  

       
    }

    public function about()
    {

        $posts = bussinesses::where('user_id',$this->profile_id)->get();
        //dd($posts);
          
            foreach ($posts as $post)
                $this->intro=$post->about;
                $this->whatsapp=$post->whatsapp;
             $this->address=$post->address;
             $this->pin=$post->pin;
             $this->country=$post->selectedCountry;
             $this->state=$post->selectedState;
              $this->city=$post->selectedCity;
               $this->wifi=$post->wifi;
               $this->parking=$post->parking;
               $this->power=$post->power;
               $this->air=$post->air;
               $this->detail_1=$post->detail_1;
               $this->detail_2=$post->detail_2;
               $this->detail_3=$post->detail_3;
               $this->header_image=$post->header_image;
               
             

        $this->bussiness = false;
        $this->about=true;
        $this->social=false;
        $this->services=false; 
        $this->gallery=false;
        $this->timing=false; 
         
       
    }
    
    public function social()
    {
       
        $posts = bussinesses::where('user_id',$this->profile_id)->get();
      
        foreach ($posts as $post)
          
            
                $this->fb=$post->fb;
                $this->yt=$post->youtube;
                $this->ins=$post->ins;
                $this->website=$post->website;
                $this->tw=$post->tw;
                

                

        $this-> about=false;
        $this->social=true;
        $this-> services=false; 
        $this-> gallery=false;
        $this-> timing=false; 
        $this->bussiness = false;  
        
       
    }

    public function services()
    {
       
        $this-> about=false;
        $this->social=false;
        $this-> services=true; 
        $this-> gallery=false;
        $this-> timing=false; 
        $this->bussiness = false;  
        
       
    }
    public function gallery()
    {
       
        $this-> about=false;
        $this->social=false;
        $this-> services=false; 
        $this-> gallery=true;
        $this-> timing=false; 
        $this->bussiness = false;  
        
       
    }
    
    public function timing()
    {
       
        $this-> about=false;
        $this->social=false;
        $this-> services=false; 
        $this-> gallery=false;
        $this-> timing=true; 
        $this->bussiness = false;  
        
       
    }
    
  


   
}
