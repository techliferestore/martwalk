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
    public $profile_id;
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
       $cat= $this->categories = categories::all();
       $this->subcategories = collect();
//dd($cat);
       
$this->countries = countries::all();
$this->states = collect();
$this->cities = collect();



    }

  
public function time_create()
{

   
    $bd= bussinesses::find('1');
  $cat=$bd->user_id;

 //dd($cat);
     b_times::create([
     
        'open'=>$this->open,   
        'close' => $this->close,
       'mon'=>$this->mon,            
        'tue'=>$this->tue,
        'wed'=>$this->wed,
        'thu'=>$this->thu,
        'fri'=>$this->fri,
        'sat'=>$this->sat,
        'sun'=>$this->sun ,
          'b_id'=>$bd->user_id

    
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
 
       
        
      
        $post=bussinesses::updateOrCreate(['user_id'=>$this->userId],[
         
            'keywords'=>$this->tag,   
            'bussiness_name' => $this->bussiness_name,
           'category'=>$this->selectedCategory,            
            'subcategory'=>$this->selectedSubcategory,
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
       'whatsapp'=>'required|unique:bussinesses|max:10',
       'address'=>'required',
       'header_image'=>'image|max:1024',//1mb
       //'selectedCountry'=>'required'
        
        ]);
 
    
  
        $post = bussinesses::find($this->profile_id);
   
      
        $post->update([
         
           'header_image'=> $this->header_image->store('headerImage'),
                 'about'=>$this->intro,
                 'whatsapp'=>$this->whatsapp,               
                  'address'=>$this->address,
                  'pin'=>$this->pin,
'country'=>$this->selectedCountry,
'state'=>$this->selectedState,
'city'=>$this->selectedCity,
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
        $post = bussinesses::find(1);
        if($this->img1){
            $post = bussinesses::find(1);
            //$pos=$post->img_1;
            //dd($pos);
            Storage::delete('$post->img_1');
 
     
        
            
        }
      
        $post->update([
        'img_1'=> $this->img1->store('gallery'),
        'img_2'=> $this->img2->store('gallery'),
        'img_3'=> $this->img3->store('gallery'),
        'img_4'=> $this->img4->store('gallery')
        ]);
        


        session()->flash('message', 'Post Updated Successfully.');
     }

     public function social_links()

     {
        $validatedDate = $this->validate([
 
         
           'fb'=>'required',
           'tw'=>'required',
           'yt'=>'required',
           'ins'=>'required',
           'website'=>'required'
             ]);

           
        $post = bussinesses::find(1);
   
      
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

           
        $post = bussinesses::find(1);
   
      
        $post->update([       
           
'service_name'=>$this->service_name,
'service_price'=>$this->service_price,
'service'=>$this->service,
'service_details'=>$this->service_details,
'service_name2'=>$this->service_name2,
'service_price2'=>$this->service_price2,
'service2'=>$this->service2,
'service_details2'=>$this->service_details2,
'img_5'=> $this->img_5->store('services'),
'img_6'=> $this->img_6->store('services'),
        ]);
   
  
 
        session()->flash('message', 'Post Updated Successfully.');  
      


     }

       public function edit_bussiness()
    {
       
       
        $post = bussinesses::findOrFail($this->profile_id);
        //dd($post);
          
            
                $this->bussiness_name=$post->bussiness_name;
             $this->tag=$post->keywords;
            $this->selectedCategory=$post->category;
            $this->selectedSubcategory=$post->subcategory;
       

        $this->about=false;
        $this->social=false;
        $this->services=false; 
        $this->gallery=false;
        $this->timing=false; 
        $this->bussiness=true;  

       
    }

    public function about()
    {

        $post = bussinesses::findOrFail($this->profile_id);
        //dd($post);
          
            
                $this->intro=$post->about;
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
$this->whatsapp=$post->phone;
             

        $this->bussiness = false;
        $this->about=true;
        $this->social=false;
        $this->services=false; 
        $this->gallery=false;
        $this->timing=false; 
         
       
    }
    
    public function social()
    {
       
        $post = bussinesses::findOrFail(1);
        //dd($post);
          
            
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
