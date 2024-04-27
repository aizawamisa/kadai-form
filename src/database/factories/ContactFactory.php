<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->numerify('##########'), // 10桁のランダムな数字
            'address' => $this->faker->address,
            'building' => $this->faker->buildingNumber,
            'detail' => $this->faker->text,
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
