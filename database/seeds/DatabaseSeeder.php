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
        factory(App\Material::class, 100)->create();       
        factory(App\Client::class, 350)->create();       
    }
}
