<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{

    public function definition(): array
    {
        return [
            'Name' => $this->faker->name,
            'Email' => $this->faker->email,
            'GitHub' => $this->faker->username,
        ];
    }
}
