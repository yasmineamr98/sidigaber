<?php

namespace Database\Seeders;

use App\Models\RawMeat;
use Illuminate\Database\Seeder;

class RawMeatSeeder extends Seeder
{
    public function run(): void
    {
        // Create 50 raw meat items with a mix of qualities and availability
        RawMeat::factory(20)->available()->standard()->create();
        RawMeat::factory(15)->available()->premium()->create();
        RawMeat::factory(10)->available()->economy()->create();
        RawMeat::factory(5)->unavailable()->create();
    }
}
