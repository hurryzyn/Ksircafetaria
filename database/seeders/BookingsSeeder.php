<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'event_id' => 1,
                'user_id' => 1,
                'ticket_id' => 1,
                'unique_code' => 'ABC123',
                'status' => 'not attended',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data bookings lainnya sesuai kebutuhan proyek Anda
        ]);
    }
}