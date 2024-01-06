<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/states.json');
        $states = json_decode($json, true);
        foreach ($states as $state) {
            State::query()->insert([
                'id' => $state['id'],
                'state' => $state['state'],
                'country_id' => $state['country_id']
            ]);
        }
    }
}
