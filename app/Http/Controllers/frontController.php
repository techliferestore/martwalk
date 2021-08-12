<?php

namespace App\Http\Controllers;
use App\Models\bussinesses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{

    
   Public function home()
{  
$user=DB::table('users')
->join('bussinesses','users.id',"=",'bussinesses.user_id')
->get();
//dd($user);

return view('welcome')->with('user',$user);

}

Public function listing()
{  


return view('listing');

}

Public function sub()
{  


return view('sub');

}

Public function detail($id)
{  

  //$post=$id;
   
   //bussinesses::where('user_id','=',$id)->get();

  //dd($post);
  $post=User::find($id)->bussiness;
  
//dd($post);
return view('detail')->with('post',$post);

}


}
