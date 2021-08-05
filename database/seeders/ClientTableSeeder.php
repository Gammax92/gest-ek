<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::factory(20)->create();
    }
}
