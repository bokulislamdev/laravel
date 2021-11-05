<?php

namespace Database\Factories;

use App\Models\demo2;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class demo2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = demo2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'roll' => $this->faker->randomDigit(1,30),
        ];
    }
}
