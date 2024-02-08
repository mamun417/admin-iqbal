<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'district_id' => function () {
                return District::inRandomOrder()->first()->id;
            },
            'agent_id' => function () {
                return Agent::inRandomOrder()->first()->id;
            },
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'passport_no' => $this->faker->optional()->numerify('##########'),
            'nid_no' => $this->faker->optional()->numerify('##########'),
            'address' => $this->faker->address,
            'note' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Processing', 'Success', 'Failed']),
            'contract_price' => $this->faker->numberBetween(1000, 10000),
            'paid' => $this->faker->numberBetween(0, 10000),
            'due' => $this->faker->numberBetween(0, 10000),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}
