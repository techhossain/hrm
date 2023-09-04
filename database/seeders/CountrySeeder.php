<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $countries_file = file_get_contents(public_path() . '/data/countries2.json');
        $countries_array = json_decode($countries_file, true);


        foreach ($countries_array as $single_country) {
            $country = new Country;
            $country->country_name = $single_country['name'];
            $country->country_code = $single_country['code'];
            $country->flag_image = strtolower($single_country['code']) . '.png';

            $country->save();
        }
    }
}
