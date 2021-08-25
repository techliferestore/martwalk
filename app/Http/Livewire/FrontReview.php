<?php

namespace App\Http\Livewire;
use App\Models\reviews;

use Livewire\Component;

class FrontReview extends Component
{

public $score,$name,$comment,$phone;

public $b_id;

public function mount($b_id)
{
    $this->b_id=$b_id;

}


public function store()
{
  //dd($this->b_id);
    $validatedDate = $this->validate([

        'name' => 'required'

     ,'phone' => 'required'
     ,'comment' => 'required'
    
    ]);

 
 reviews::create([
'b_id'=>$this->b_id,
        'name' => $this->name,
        'phone'=>$this->phone,
        'comment'=>$this->comment,
        'score'=>$this->score,
     ]);

     session()->flash('message', 'Request Updated Successfully.');
     }


    public function render()
    {
        return view('livewire.front-review');
    }
}
