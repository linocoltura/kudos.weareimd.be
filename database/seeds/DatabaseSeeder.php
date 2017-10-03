<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\User::class, 10)->create()->each(function ($u) {

        });

        factory(App\Compliment::class, 10)->create()->each(function ($u) {

        });


    }
}
