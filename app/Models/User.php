<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function aliexpresses(){
        return $this->hasMany('App\Models\Aliexpress');
    }

    public function amazons(){
        return $this->hasMany('App\Models\Amazon');
    }

    public function shopifies(){
        return $this->hasMany('App\Models\Shopify');
    }

    public function facebooks(){
        return $this->hasMany('App\Models\Facebook');
    }

    public function tiktoks(){
        return $this->hasMany('App\Models\Tiktok');
    }

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function favorite_facebooks(){
        return $this->belongsToMany('App\Models\Facebook','facebook_user')->withTimestamps();
    }

    public function favorite_tiktoks(){
        return $this->belongsToMany('App\Models\Tiktok','tiktok_user')->withTimestamps();
    }

    public function view_facebooks(){
        return $this->belongsToMany('App\Models\Facebook','facebook_view')->withTimestamps();
    }

    public function view_tiktoks(){
        return $this->belongsToMany('App\Models\Tiktok','tiktok_view')->withTimestamps();
    }

    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    
}
