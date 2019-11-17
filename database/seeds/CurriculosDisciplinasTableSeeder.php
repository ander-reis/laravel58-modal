<?php

use Illuminate\Database\Seeder;

class CurriculosDisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Adminitração']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Alfabetização']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Antropologia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Arquitetura']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Biologia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Biblioteconomia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Ciências']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Ciências Jurídicas']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Ciências Médicas']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Ciências Sociais']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Didáticas']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Economia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Educação Artística']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Educação Física']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Educação Musical']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Engenharia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Filosofia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Física']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Geografia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'História']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Língua Estrangeira']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Língua Portuguesa']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Magistério']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Matemática']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Polivalente']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Psicologia']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Publicidade']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Química']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Religião']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Serviço Social']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Técnico']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Informática e Computação']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Comunicação Social']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Ciências Contábeis']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Dança']);
        factory(\App\CurriculosDisciplinas::class)->create(['ds_disciplina' => 'Teatro/Arte']);
    }
}
