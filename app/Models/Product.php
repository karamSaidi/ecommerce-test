<?php

namespace App\Models;

use App\Http\Requests\Admin\ProductImageRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $table = 'products';
    protected $fillable = [
        'brand_id',
        'price',
        'special_price',
        'special_price_type',
        'special_price_start',
        'special_price_end',
        'selling_price',
        'sku',
        'manage_stock',
        'qty',
        'in_stock',
        'viewed',
        'status',
    ];
    // protected $translatedAttributes = ['name'];
    public $translatedAttributes = ['slug', 'name', 'description', 'short_description'];

    protected $casts = [
        'status' => 'boolean',
        'manage_stock' => 'boolean',
        'in_stock' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'special_price_start' => 'datetime',
        'special_price_end' => 'datetime'

    ];


    protected $apend = [
        // 'image_url',
    ];



    /***************************** Relation */
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id')->withDefault();
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    /***************************** ./Relation */


    /***************************** Scope */

    /***************************** ./Scope */
} // ./Category


class ProductTranslation extends Model
{
    use Sluggable;

    protected $table = 'product_translations';
    public $timestamps = false;
    protected $fillable = ['slug', 'name', 'description', 'short_description'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}// ./CategoryTranslation
