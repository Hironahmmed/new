<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiktok extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function scopeApproved($query){
        return $query->where('is_approved', true);
    }

    public function favorite_to_users_tiktok(){
        return $this->belongsToMany('App\Models\User','tiktok_user')->withTimestamps();
    }

    public function view_user_tiktoks(){
        return $this->belongsToMany('App\Models\User','tiktok_view')->withTimestamps();
    }

}
