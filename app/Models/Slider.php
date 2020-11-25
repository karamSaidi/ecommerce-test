<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';
    public $fillable = ['image', 'title', 'link', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $apend = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('upload/sliders/' . $this->image) : null;
    } // ./getImageUrlAttribute


    /***************************** Scope */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    /***************************** ./Scope */



}
