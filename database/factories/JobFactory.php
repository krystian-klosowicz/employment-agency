<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'company' => $this->faker->company(),
            'description' => $this->faker->text(60),
            'location' => 'Poland',
            'tel' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'salary' => random_int(1000, 4000),
            'job_category_id' => rand(1, 10),
        ];
    }
}
