<?php

namespace Zivlify\Zblog\database\factories;

use Zivlify\Zblog\Models\Zblog;
use Illuminate\Database\Eloquent\Factories\Factory;


class ZblogFactory extends Factory
{
    
    protected $model = Zblog::class;

    
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'meta_keywords' => $this->faker->name,
            'meta_description' => $this->faker->name,
            'short_description' => $this->faker->name,
            'body' => $this->faker->name,
            'published_date' => $this->faker->date,
            'display_date' => $this->faker->date,
            'image_url' => $this->faker->url,
            'image_alt' => $this->faker->name,
            'slug' => $this->faker->name,
            'is_active' => rand(0,1),
            'parcel' => $this->faker->uuid,
        ];
    }
}
