<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Pacijent;
use App\Models\Racun;
use Database\Seeders\PacijentSeeder;
use Database\Seeders\LekSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $pacijent = new PacijentSeeder;
        $pacijent->run();
        $lek = new LekSeeder;
        $lek->run();
        Racun::factory(10)->create();
    }
}
