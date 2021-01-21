<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Attribute extends Model
{
    use HasFactory, Translatable;

    protected $table = 'attributes';

    public $translatedAttributes = ['name'];

    protected $hidden = ['translations'];

    /***************************** Relation */
    public function attributes()
    {
        return $this->belongsToMany(Product::class, 'options', 'attribute_id', 'product_id');
    }
    public function options()
    {
        return $this->hasMany(Option::class, 'attribute_id', 'id');
    }
    /***************************** ./Relation */


    /***************************** Scope */

    /***************************** ./Scope */

} // ./Attribute



class AttributeTranslation extends Model
{
    protected $table = 'attribute_translations';
    public $timestamps = false;
    protected $fillable = ['name'];
}// ./CategoryTranslation
