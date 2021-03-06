<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'quiz_id' => rand(1,10),
            'question' => $this->faker->sentence(rand(2,5)),
            'answer1' => $this->faker->sentence(rand(1,3)),
            'answer2' => $this->faker->sentence(rand(1,3)),
            'answer3' => $this->faker->sentence(rand(1,3)),
            'answer4' => $this->faker->sentence(rand(1,3)),
            'correct_answer' => 'answer'.rand(1,4)
        ];
    }
}
