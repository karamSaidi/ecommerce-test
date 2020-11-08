<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $table = 'categories';
    protected $fillable = [
        'parent_id',
        'slug',
        'status',
        'image',
    ];
    protected $translatedAttributes = ['name'];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $apend = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('upload/main_categories/' . $this->image) : null;
    } // ./getImageUrlAttribute

} // ./Category


class CategoryTranslation extends Model
{
    protected $table = 'category_translations';
    public $timestamps = false;
    protected $fillable = ['name'];
}// ./CategoryTranslation
