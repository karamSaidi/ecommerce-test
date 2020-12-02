<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $table = 'settings';
    public $fillable = ['key', 'is_translatable', 'plain_value', 'status'];
    protected $translatedAttributes = ['value'];

    protected $casts = [
        'is_translatable' => 'boolean',
        'status' => 'boolean',
    ];

    protected $hidden = ['translations'];

    /************************ static function to insert data by key => value ******************* */
    public static function setMany($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 'translatable') {
                self::setTranslatable($value);
            } else {
                if (is_array($value))
                    $value = json_encode($value);
                self::updateOrCreate(['key' => $key], ['plain_value' => $value]);
            }
        }
    } // ./ setMay

    public static function setTranslatable($data)
    {
        foreach ($data as $key => $value) {
            Self::updateOrCreate(['key' => $key], ['is_translatable' => true, 'value' => $value]);
        }
    } // ./setTranslatable


    /************************ ./static function to insert data by key => value ******************* */
} // ./ Setting class


class SettingTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['value'];
}// ./ SettingTranslation class
