<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::count() ? $this->faker->numberBetween(1,  User::count()) : User::factory(),
            'uuid' => $this->faker->uuid,
            'title' => $this->faker->title,
            'description' => $this->faker->text,
        ];
    }
}
