<?php

namespace App\Http\Livewire;
use App\Models\bookings;
use Livewire\Component;

class FrontBooking extends Component
{

public $name,$phone,$msg;
public $b_id;

public function mount($b_id)
{
    $this->b_id=$b_id;

}


public function store()
{
  
    $validatedDate = $this->validate([

        'name' => 'required',
     'msg' =>'required' 
     ,'phone' => 'required'
    
    ]);

 
 bookings::create([
'bussiness_id'=>$this->b_id,
        'name' => $this->name,
        'phone'=>$this->phone,
        'msg'=>$this->msg
     ]);

     session()->flash('message', 'Request Updated Successfully.');
     }

    public function render()
    {
        return view('livewire.front-booking');



    }
}
