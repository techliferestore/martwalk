<?php

namespace App\Http\Livewire;
use App\Models\cities;
use App\Models\categories;
use App\Models\subcategories;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{

  
    public function render()

    {
       
        $this->cities=cities::all();
       
        $sub=DB::table('categories')
        ->join('subcategories','categories.id',"=",'subcategories.category_id')
        ->get();
        
   

        return view('livewire.search');
    }
}
