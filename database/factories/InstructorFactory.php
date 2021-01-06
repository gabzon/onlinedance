<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Instructor;

class InstructorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instructor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'nickname' => $this->faker->word,
            'slug' => $this->faker->slug,
            'bio' => $this->faker->text,
            'img_landscape' => $this->faker->text,
            'img_portrait' => $this->faker->text,
            'video_interview' => $this->faker->text,
            'facebook' => $this->faker->word,
            'instagram' => $this->faker->word,
            'twitter' => $this->faker->word,
            'tiktok' => $this->faker->word,
            'youtube' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
        ];
    }
}
