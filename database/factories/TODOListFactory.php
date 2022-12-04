<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TODOList>
 */
class TODOListFactory extends Factory
{

    public function definition() : array
    {
        return [
            'content' => $this->faker->sentence,
        ];
    }
}
