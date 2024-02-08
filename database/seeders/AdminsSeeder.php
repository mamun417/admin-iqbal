<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name'     => 'admin',
            'email'    => 'admin@server.com',
            'password' => Hash::make('123456'),
            'type'     => 'admin'
        ]);

        $admin->image()->create([
            'url'       => 'default.png',
            'base_path' => 'default.png',
            'type'      => 'default.png'
        ]);

         //Create multiple users
        for ($i = 0; $i < 5; $i++) { // Adjust the loop count as needed
            $staff = Admin::create([
                'name'     => $this->generateRandomName(),
                'email'    => $this->generateRandomEmail(),
                'password' => Hash::make(Str::random(8)), // Generating a random password
                'type'     => 'staff',
            ]);
        }

    }

    /**
     * Generate a random name.
     *
     * @return string
     */
    private function generateRandomName(): string
    {
        $faker = Factory::create();
        return $faker->name;
    }

    /**
     * Generate a random email address.
     *
     * @return string
     */
    private function generateRandomEmail(): string
    {
        $faker = Factory::create();
        return $faker->unique()->safeEmail;
    }
}
