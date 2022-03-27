<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopify extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function scopeApproved($query){
        return $query->where('is_approved', true);
    }
    
}
