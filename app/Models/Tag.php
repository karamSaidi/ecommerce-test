<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use HasFactory, Translatable;

    protected $table = 'tags';
    protected $fillable = [
        'status',
    ];
    // protected $translatedAttributes = ['name'];
    public $translatedAttributes = ['name', 'slug'];

    protected $casts = [
        'status' => 'boolean',
    ];



    /***************************** Relation */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tags', 'tag_id', 'product_id');
    }
    /***************************** ./Relation */

    /***************************** Scope */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    /***************************** ./Scope */
} // ./Tag


class TagTranslation extends Model
{
    use Sluggable;

    protected $table = 'tag_translations';
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
}// ./TagTranslation
