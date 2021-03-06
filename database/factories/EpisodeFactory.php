<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected  $model = Episode::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3, true),
            'video_url' => 'myvideo.com/' . rand(10,255),
            'course_id' => Course::all()->random()->id
        ];
    }
}
