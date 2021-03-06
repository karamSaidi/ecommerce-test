<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Brand extends Model
{
    use HasFactory, Translatable;

    protected $table = 'brands';
    protected $fillable = [
        'status',
        'image',
    ];

    public $translatedAttributes = ['name'];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $apend = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('upload/brands/' . $this->image) : null;
    } // ./getImageUrlAttribute


    /***************************** Relation */
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
    /***************************** ./Relation */

    /***************************** Scope */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    /***************************** ./Scope */

} // ./Brand



class BrandTranslation extends Model
{
    protected $table = 'brand_translations';
    public $timestamps = false;
    protected $fillable = ['name'];
}// ./CategoryTranslation
