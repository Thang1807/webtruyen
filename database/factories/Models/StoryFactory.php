<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Models\Story;

class StoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Story::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'alias' => $this->faker->word,
            'view' => $this->faker->randomNumber(),
            'status' => $this->faker->randomElement(["COMPLETE","RUNNING"]),
            'image' => $this->faker->word,
            'description' => $this->faker->text,
            'softdeletes' => $this->faker->word,
        ];
    }
}
