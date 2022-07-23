<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conference::create([
            'name' => 'Western'
        ]);
        Conference::create([
            'name' => 'Eastern'
        ]);

    }
}
