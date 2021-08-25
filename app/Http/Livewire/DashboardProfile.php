<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;   
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class DashboardProfile extends Component
{


    public $name ,$email ,$password,$password_confirmation,$contactno ;
    public $profile = false;
    public $bussiness = false;
    public $booking = false;
    public $review = false;
   public $profile_id;
    
   use WithFileUploads;

 
  
    public $image;
 
    public function mount($profile_id)
    {
        $this->profile_id=$profile_id;

    }

    public function updateProfile()
 
    {
        //dd( $this->profile_id);
        $validatedDate = $this->validate([
 
            'name' => 'required','image'=>'required',
 'email' =>'required' ,'contactno' => 'required'
        
        ]);
 
     
        $post = User::find($this->profile_id);
         $post->update([
 
            'name' => $this->name,
            'email'=>$this->email,
            'profile_image'=> $this->image->store($this->profile_id.'profile_image','public'),
            'contactno'=>$this->contactno,
 
          
 
        ]);
        //dd($post);
 
       // $this->image      = '';
 
        $this->updateMode = false;
 
  
 
        session()->flash('message', 'Post Updated Successfully.');
 
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
