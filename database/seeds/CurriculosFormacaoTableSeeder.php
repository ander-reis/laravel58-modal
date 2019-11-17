<?php

use Illuminate\Database\Seeder;

class CurriculosFormacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Especialização']);
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Mestrando']);
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Mestre']);
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Doutorando']);
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Doutor']);
        factory(\App\CurriculosFormacao::class)->create(['ds_formacao' => 'Graduação']);
    }
}
