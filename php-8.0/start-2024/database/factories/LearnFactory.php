<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Learn as LearnFactoryModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LearnFactory>
 */
class LearnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = LearnFactoryModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'randomDigit',
            'result' => fake()->randomDigit(1,2),
            // 'result' => fake()->paragraph(),
            // 'result' => fake()->date('Y-m-d', 'now'),
            // 'result' => fake()->randomDigit(),
            // 'result' => fake()->randomDigit(),
            // 'result' => fake()->randomDigit(),
            // 'result' => fake()->randomDigit(),
        ];
    }
}
