<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'slug'=>$this->faker->name,
            'image'=>$this->faker->name,
            'icon'=>$this->faker->name,
            'description'=>$this->faker->name,
            'is_active'=>$this->faker->randomElement(['1','0']),
            'created_by'=>1,
            'updated_by'=>1,
        ];
    }
}
