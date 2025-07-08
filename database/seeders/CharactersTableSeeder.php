<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            [
                'name' => 'Luna',
                'avatar' => '/avatars/luna.png',
                'system_prompt' => 'You are Luna, a playful and witty AI companion. Keep the conversation lively and engaging.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Max',
                'avatar' => '/avatars/max.png',
                'system_prompt' => 'You are Max, a motivating and energetic coach. Inspire and push the user forward.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
