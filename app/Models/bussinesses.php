<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bussinesses extends Model
{
    use HasFactory;


   
   
    protected $fillable = [
        'bussiness_name','user_id','slug','keywords','category','subcategory','about','address','country','state','city',
        'pin','phone','header_image','wifi','parking','air','power','detail_1','detail_2','detail_3','youtube','fb',
        'tw','ins','website','img_1','img_2','img_3','img_3','img_4','service_name','service_price','service','service_details','img_5','service_name2','service_price2',
        'service2','service_details2','img_6'
        
       
    ];

    public function City()
  {
    return $this->hasOne('App\Models\cities','id','city_id');
  }

  public function State()
  {
    return $this->hasOne('App\Models\states','id','state_id');
  }
  public function Country()
  {
    return $this->hasOne('App\Models\countries','id','country_id');
  } 
  public function user()
  {
    return $this->hasOne('App\Models\User','id','user_id');
  }
    
  
}
