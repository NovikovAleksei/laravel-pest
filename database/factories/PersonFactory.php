<?php

namespace Database\Factories;

use App\Models\Enums\PersonStatus;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class PersonFactory extends Factory
{
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['m', 'f', 'n']),
            'date' => $this->faker->dateTimeBetween('-35 years'),
            'status' => $this->faker->randomElement([PersonStatus::ACTIVE(), PersonStatus::INACTIVE()]),
        ];
    }
}
