<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;
    public function definition(): array
    {
            return[
                'nip'=>$this->faker->numerify('##########'),
                'nama'=>$this->faker->name(),
                'email'=>$this->faker->unique()->safeEmail,
                'matakuliah'=>$this->faker->sentence(2),
                'gender'=>$this->faker->randomElement(['Male','Female'])
        ];
    }
}