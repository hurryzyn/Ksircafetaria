<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Example Event1',
                'description' => 'This is an example event.',
                'date' => now()->addDays(10),
                'location' => 'Example Location',
                'photo' => 'https://example.com/photos/event1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Another Event',
                'description' => 'This is another example event.',
                'date' => now()->addDays(20),
                'location' => 'Another Location',
                'photo' => 'https://example.com/photos/event2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data events lainnya sesuai kebutuhan proyek Anda
        ]);
    }
}