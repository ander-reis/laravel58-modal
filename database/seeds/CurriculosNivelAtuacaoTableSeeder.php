<?php

use Illuminate\Database\Seeder;

class CurriculosNivelAtuacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Educação Infantil']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Ensino Médio']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Pós-Graduação']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Pré-Vestibular']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Ensino Superior']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Supletivos']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Técnico e Profissionalizante']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Ensino Fundamental - 1ª a 5ª']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Ensino Fundamental - 6ª a 9ª']);
        factory(\App\CurriculosNivelAtuacao::class)->create(['ds_nivel_atuacao' => 'Ensino à Distância']);
    }
}
