<?php

namespace Database\Factories;


use App\Models\Check;
use Illuminate\Database\Eloquent\Factories\Factory;


class CheckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Check::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public
    function definition()
    {
        $checked = $this->faker->boolean(50);
        $uuid = $this->faker->uuid();
        
        return [
            'name' => $this->faker->name(),
            'image' => 'https://avatars2.githubusercontent.com/u/' . $this->faker->randomNumber(3, false) . '?s=360',
            'check' => $uuid,
            'checked' => $checked,
            'lat' => $checked ? $this->faker->latitude() : 0,
            'long' => $checked ? $this->faker->longitude() : 0,
            'pdf' => 'http://sostenible.palencia.uva.es/sites/default/files/page/attach/lorem_ipsum_definicion.pdf'
        ];
    }
}
