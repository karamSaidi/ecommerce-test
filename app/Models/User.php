<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        // 'email',
        'mobile',
        'password',
        'verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'verified_at' => 'datetime',
    ];



    /***************************** Relation */
    public function verificationCode()
    {
        return $this->hasMany(UserVerification::class, 'user_id', 'id');
    }
    public function wishLists()
    {
        return $this->belongsToMany(Product::class, 'wish_lists', 'user_id', 'product_id');
    }
    /***************************** ./Relation */



    public function hasWishList(int $product_id)
    {
        return self::wishLists()->where('product_id', $product_id)->exists();
    }


}
