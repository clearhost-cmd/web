<?php

namespace Database\Factories\Pivot;

use App\Models\Auction;
use App\Models\User;

use App\Models\Pivot\AuctionUser;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AuctionUserFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuctionUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'auction_id' => Auction::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'location' => $this->faker->country(),
        ];
    }
}
