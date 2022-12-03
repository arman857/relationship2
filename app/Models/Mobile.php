<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobile extends Model
{
    use HasFactory;
     public function customer(){
        return $this->belongsTo(Customer::class,'Customer_id','id');
     }

    
}
