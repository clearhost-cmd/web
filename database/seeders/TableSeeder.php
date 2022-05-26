<?php

namespace Database\Seeders;

use App\Models\Pivot\AuctionUser;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AuctionUser::factory()->times(50)->create();
    }
}
