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


    /***************************** Relation */
    public function options()
    {
        return $this->hasMany(Attribute::class, 'attribute_id', 'id');
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
