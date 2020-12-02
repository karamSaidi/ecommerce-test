<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory, Translatable;

    protected $table = 'options';
    protected $fillable = [
        'price',
        'attribute_id',
        'product_id',
    ];

    public $translatedAttributes = ['name'];

    protected $casts = [

    ];

    protected $hidden = ['translations'];




    /***************************** Relation */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id', 'id');
    }
    /***************************** ./Relation */


    /***************************** Scope */

    /***************************** ./Scope */

} // ./Brand



class OptionTranslation extends Model
{
    protected $table = 'option_translations';
    // public $timestamps = false;
    protected $fillable = ['name'];
}// ./CategoryTranslation
