<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(ListOneTableSeeder::class);
        $this->call(CurriculosDisciplinasTableSeeder::class);
        $this->call(CurriculosFormacaoTableSeeder::class);
        $this->call(CurriculosNivelAtuacaoTableSeeder::class);
        $this->call(CurriculosProfessoresTableSeeder::class);
    }
}
