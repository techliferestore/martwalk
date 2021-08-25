<?php

namespace App\Http\Controllers;
use App\Models\bussinesses;
use App\Models\User;
use App\Models\cities;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class frontController extends Controller
{

    
   Public function home()
{  
$user=bussinesses::get();



$cities=cities::all();


//$user->implode('city', ', ')->city);

       


//dd($sub);
return view('Front.welcome')->with('user',$user)->with('cities',$cities);

}

Public function listing()
{  
$data=session()->get('users');

//dd($data);
return view('Front.listing',compact('data'));

}



Public function search (request $request)
{

  
  $ct=cities::where('name',$request->city)->first();
  
  $users=bussinesses::where('city_id', $ct->id)
    ->orWhere('keywords', 'like', '%' . $request->keywords . '%')->get();


 
  //return $users;
 
  
    //return $users;
   return  redirect()->route('listing',['city'=>$request->city,'keywords'=>$request->keywords])->with('users',$users);
  
}

Public function sub_listing (request $request)
{

  
 // dd($request->sub);
  //$ct=cities::where('name',$request->city)->first();
  
  $users=bussinesses::where('subcategory_id', $request->sub)->get();


 
  //return $users;
 
  
    //return $users;
   return  redirect()->route('listing',['city'=> 'pilkhuwa','keywords'=>$request->sub])->with('users',$users);
  
}


Public function detail($slug,$city,$id)
{  

  //$post=$id;
   
   //bussinesses::where('user_id','=',$id)->get();

  $post=User::find($id)->bussiness;

  //dd($post);


return view('Front.detail')->with('post',$post);

}

Public function alllisting()
{
  $cat=categories::all();

return view('Front.alllisting',compact('cat'));

}

Public function sub($slug)
{

 // dd($slug);

 $cat=categories::firstWhere('slug', $slug);
 //return $cat;
$sub=$cat->list_sub->get();

  return view('Front.sub',compact('sub'));
}

}
