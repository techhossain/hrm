<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $language_file = file_get_contents(public_path() . '/data/language.json');
        $language_array = json_decode($language_file, true);

        foreach ($language_array as $single_country) {

            $country_name = $single_country['country'];
            $country_match = Country::where('country_name', $country_name)->first();

            $country_languages = $single_country['languages'];

            if (isset($country_match->id) && !empty($country_match->id)) {
                foreach ($country_languages as $single_language) {
                    $language = new Language;
                    $language->language_name = $single_language;
                    $language->country_id = $country_match->id;
                    $language->save();
                }
            }
        }
    }
}
