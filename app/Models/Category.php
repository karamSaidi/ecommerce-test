<?php

namespace App\Models;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Translatable;

    protected $table = 'categories';
    protected $fillable = [
        'parent_id',
        'status',
        'image',
    ];
    // protected $translatedAttributes = ['name'];
    public $translatedAttributes = ['name', 'slug'];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected $apend = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('upload/categories/' . $this->image) : null;
    } // ./getImageUrlAttribute




    /***************************** Relation */
    public function childs()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }
    /***************************** ./Relation */


    /***************************** Scope */
    public function scopeParents($query)
    {
        return $query->whereNull('parent_id');
    }
    public function scopeSub($query)
    {
        return $query->whereNotNull('parent_id');
    }
    /***************************** ./Scope */
} // ./Category


class CategoryTranslation extends Model
{
    use Sluggable;

    protected $table = 'category_translations';
    public $timestamps = false;
    protected $fillable = ['name', 'slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}// ./CategoryTranslation
