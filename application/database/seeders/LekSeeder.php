<?php

namespace Database\Seeders;
use App\Models\Lek;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lek::factory()->count(5)->create();

        /*$l1 = new Lek();
        $l1->JKL = 154684;
        $l1->naziv = "OMEPROL";
        $l1->cena= 150.50;
        $l1->strucni_naziv = "omeprazol";

        $l1 = new Lek();
        $l1->JKL = 854747;
        $l1->naziv = "NOLPAZA";
        $l1->cena= 350.50;
        $l1->strucni_naziv = "pantoprazol";

        $l1 = new Lek();
        $l1->JKL = 432432;
        $l1->naziv = "ONDASAN";
        $l1->cena= 750.50;
        $l1->strucni_naziv = "granisetron";*/
    }
}
