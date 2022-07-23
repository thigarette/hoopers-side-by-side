<?php

namespace Database\Seeders;

use App\Models\Draft;
use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Draft::factory()
            // ->has(Player::factory()->count(60))
            ->create();
    }
}
