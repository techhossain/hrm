<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_name', 'country_code', 'flag_image'];

    public static function getAllCountries()
    {

        $countries = json_decode(file_get_contents(public_path() . "/countries.json"), true);

        $common = [];

        foreach ($countries as $contry) {
            array_push($common, $contry['name']['common']);
        }

        return $common;
    }


    public static function getCountries()
    {

        $countries = file_get_contents(public_path() . '/countries2.json');
        $countries_array = json_decode($countries, true);

        $countries_name = array_column($countries_array, 'name');
        $countries_code = array_column($countries_array, 'code');

        // return [$countries_name, $countries_code];
        return $countries_name;
    }
}
