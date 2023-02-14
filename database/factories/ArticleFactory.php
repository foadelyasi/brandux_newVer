<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title(),
            'category_id'=>$this->faker->numberBetween(4,7),
             'slug'=>$this->faker->slug(),
            'description'=>$this->faker->text(850),
            'meta_description'=>$this->faker->text(90),
            'meta_keywords'=>'article',
            'image'=>'image',
            'imagethumb'=>'imagethumb',

        ];
    }
}
