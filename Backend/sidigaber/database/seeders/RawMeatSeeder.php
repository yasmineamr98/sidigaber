<?php

namespace Database\Seeders;

use App\Models\RawMeat;
use Illuminate\Database\Seeder;

class RawMeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 fake raw meat items
        RawMeat::factory(20)->create();
    }
}
