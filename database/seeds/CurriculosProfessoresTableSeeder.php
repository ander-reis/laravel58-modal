<?php

use Illuminate\Database\Seeder;

class CurriculosProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CurriculosProfessores::class, 20)->create();
    }
}
