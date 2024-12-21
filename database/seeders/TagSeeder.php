<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'AI',
            'Web Development',
            'Fitness',
            'Recipes',
            'Productivity',
            'Finance',
            'Movies',
            'Gaming',
            'Self-Improvement',
            'Programming',
            'Nature',
            'Cryptocurrency',
            'Travel Tips',
            'Gadgets',
            'Mindfulness'
        ];

        foreach ($tags as $tag) {
            Tag::create(['title' => $tag])->factory();
        }
    }
}
