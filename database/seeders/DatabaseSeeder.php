<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AdminsSeeder::class,
//            UserTableSeeder::class,
            DistrictsSeeder::class,
            AgentSeeder::class,
            ClientSeeder::class,
        ]);
    }
}
