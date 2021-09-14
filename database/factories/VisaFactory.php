<?php

namespace Database\Factories;

use App\Models\Visa;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visa::class;

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
            'visa_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'date_start' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'date_expired' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '1 years', $timezone = null),  
            'visa_type' => $this->faker->randomElement(['perpanjangan','kedatangan']),
        ];
    }
}
