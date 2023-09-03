<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_name', 'flag_image'];

    public static function getAllCountries()
    {

        $countries = json_decode(file_get_contents(public_path() . "/countries.json"), true);

        $common = [];

        foreach ($countries as $contry) {
            array_push($common, $contry['name']['common']);
        }

        return $common;
    }
}
