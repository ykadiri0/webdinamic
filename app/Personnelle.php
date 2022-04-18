<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;

class Personnelle extends Model
{
    public function scopeCurrentUser($query)
{
   
    if (Auth::user()->role_id == 4){
        return $query->where('user_id','=',Auth::user()->id);
    }
    
}
}
