<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    //


 function dashboard()
{

return view('dashboard.dashboard');

}

function bussiness()
{

return view('dashboard.bussiness');

}


}
