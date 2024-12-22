<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Reply;
use App\Models\Ticket;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::factory(),
            'text' => $this->faker->text(),
            'repliable_id' => $this->faker->randomDigitNotNull(),
            'repliable_type' => $this->faker->word(),
        ];
    }
}
