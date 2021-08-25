<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function list_sub()
    {
        return $this->belongsTo('App\Models\subcategories','id','category_id');
    }
  
}
