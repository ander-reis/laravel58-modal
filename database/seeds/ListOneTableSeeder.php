<?php

use Illuminate\Database\Seeder;

class ListOneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ListOneModal::class, 10)->create();
    }
}
