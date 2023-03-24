<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actor;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Actor::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'picture' => $this->faker->imageUrl(640, 480, 'animals', true),
            'imdb_path' => $this->faker->domainName(),
            'date_birthday' => $this->faker->date()
        ];
    }
}
