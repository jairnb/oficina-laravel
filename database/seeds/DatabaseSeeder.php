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
        factory(App\Funcionario::class, 120)->create();       
        factory(App\Peca::class, 50)->create();       
        factory(App\User::class)->create();       
    }
}
