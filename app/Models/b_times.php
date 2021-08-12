<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class b_times extends Model
{
    use HasFactory;
    protected $fillable = ['open','close','mon','tue','wed'
    ,'fri','sat','sun'      
           
        ];

public $timestamps=false;

}
