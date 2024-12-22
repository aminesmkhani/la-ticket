<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ticket;
use App\Models\User;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(4),
            'text' => $this->faker->text(),
            'priority' => $this->faker->numberBetween(-8, 8),
            'status' => $this->faker->numberBetween(-8, 8),
            'file_path' => $this->faker->word(),
            'department' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
