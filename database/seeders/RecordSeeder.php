<?php

namespace Database\Seeders;

use App\Models\Auction;
use App\Models\Medical\Prescription;
use App\Models\User;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auction::factory()->times(50)->create();
        User::factory()->times(50)->create();
    }
}
