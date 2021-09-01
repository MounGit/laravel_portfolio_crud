<?php

namespace Database\Factories;

use App\Models\Indexportfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndexportfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Indexportfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "image"=> "portfolio-1.jpg"
        ];
    }
}
