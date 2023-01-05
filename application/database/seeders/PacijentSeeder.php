<?php

namespace Database\Seeders;
use App\Models\Pacijent;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacijentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pacijent::factory()->count(20)->create();
    }
}
