<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\OrderFactory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)
            ->create();
    }
}
