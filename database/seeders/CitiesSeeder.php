<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/cities.json');
        $cities = json_decode($json, true);
        foreach ($cities as $city) {
            Cities::query()->insert([
                'city' => $city['city'],
                'country_id' => $city['country'],
                'state_id' => $city['state_id']
            ]);
        }
    }
}
