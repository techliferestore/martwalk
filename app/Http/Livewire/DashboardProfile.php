<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;   
use Livewire\Component;
use App\Models\User;


class DashboardProfile extends Component
{


    public $name ,$email ,$password,$password_confirmation,$contactno ;
    public $profile = false;
    public $bussiness = false;
    public $booking = false;
    public $review = false;
   
    

    public $images;
    public $image;
 
    protected $listeners = [
     'fileUpload'     => 'handleFileUpload'
    
 ];
    public function update($id)
 
    {
      //dd($id);
        $validatedDate = $this->validate([
 
            'name' => 'required',
 'email' =>'required' ,'contactno' => 'required'
        
        ]);
 
        $image          = $this->storeImage($id);
        //dd($image);
 
        $post = User::find($id);
 
        $post->update([
 
            'name' => $this->name,
            'email'=>$this->email,
            'profile_image'=> $image,
            'contactno'=>$this->contactno,
 
          
 
        ]);
        //dd($post);
 
       // $this->image      = '';
 
        $this->updateMode = false;
 
  
 
        session()->flash('message', 'Post Updated Successfully.');
 
     }
 
     public function handleFileUpload($imageData)
     {
         $this->image = $imageData;
     }
 
    public function storeImage($id)
     {
         
         
 if($this->image){
     $post = User::find($id);
     //$pos=$post->profile_image;
    // dd($pos);
    
     Storage::delete('public/profile_image/'.$post->profile_image);
 
     
 }
  
 
         $img   = ImageManagerStatic::make($this->image)->encode('jpg');
         $name  = Str::random().'_'.$this->contactno. '.jpg';
 
         Storage::disk('public')->put('profile_image'.'/'.$name, $img, 'public');
         
         return $name;
 
     }



public function edit_profile($id)
{
    // $id=Auth::user()->id;
    $post = User::findOrFail($id);
//dd($post);
  
        $this->name = $post->name;
        $this->email = $post->email;
        $this->contactno = $post->contactno;
    

  $this->profile = true;
  $this->bussiness = false;                                          
  $this->booking = false;
  $this->review = false;
 
}


public function edit_booking()
{
    $this->profile = false;
    $this->bussiness = false;                                          
  $this->booking = true;
  $this->review = false;
   
}

public function edit_review()
{
   
    $this->profile = false;
    $this->bussiness = false;                                          
  $this->booking = false;
  $this->review = true;
   
}




    public function render()
    {
        return view('livewire.dashboard-profile')->extends('layouts.layout_home')
     ->section('content');
    }










}
