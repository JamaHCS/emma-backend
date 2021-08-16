<?php

namespace Database\Factories;

use App\Models\Check;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $checks = Check::all();
        $howMuch = count($checks);

        return [
            'comment' => $this->faker->sentence(),
            'check_id' => $this->faker->numberBetween(1, $howMuch)
        ];
    }
}
