<?php

namespace Database\Factories;

use App\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImageFactory extends Factory
{
    /**
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     *
     * @return array
     */
    public function definition()
    {
        $fileName = $this->faker->numberBetween(1, 10) . '.jpg';

        return [
            'path' => "img/products/{$fileName}"
        ];
    }

    public function user()
    {
        $fileName = $this->faker->numberBetween(1, 5) . '.jpg';

        return $this->state([
            'path' => "img/users/{$fileName}"
        ]);
    }
}
