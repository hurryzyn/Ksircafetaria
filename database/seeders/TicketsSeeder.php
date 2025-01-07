<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'event_id' => 1,
                'user_id' => 1,
                'price' => 50.00,
                'status' => 'unpaid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data tickets lainnya sesuai kebutuhan proyek Anda
        ]);
    }
}