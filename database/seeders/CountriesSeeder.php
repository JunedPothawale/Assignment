<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/countries.json');
        $countries = json_decode($json, true);
        foreach ($countries as $country) {
            Country::query()->insert([
                'id' => $country['id'],
                'country' => $country['country']
            ]);
        }
    }
}
