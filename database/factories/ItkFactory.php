<?php

namespace Database\Factories;

use App\Models\Itk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Itk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'passport_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'date_start' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'date_expired' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '1 years', $timezone = null),  
        ];
    }
}
