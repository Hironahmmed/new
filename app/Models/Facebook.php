<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facebook extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function scopeApproved($query){
        return $query->where('is_approved', true);
    }

    public function favorite_to_users_facebook(){
        return $this->belongsToMany('App\Models\User','facebook_user')->withTimestamps();
    }

    public function view_user_facebooks(){
        return $this->belongsToMany('App\Models\User','facebook_view')->withTimestamps();
    }
}
