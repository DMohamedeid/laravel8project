<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "body" => $this->faker->safeEmail,
//            "mobile" => $this->faker->phoneNumber,
//            "age" => $this->faker->numberBetween(25, 45),
//            "gender" => $this->faker->randomElement([
//                "male",
//                "female",
//                "others"
//            ]),
//            "address_info" => $this->faker->address
        ];
    }
}
