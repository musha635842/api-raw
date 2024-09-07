<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entry;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */         

    public function run(): void
    {
        $entries = [
            ['name' => 'Объявление 1', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления'],
            ['name' => 'Объявление 2', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления'],
            ['name' => 'Объявление 3', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления'],
            ['name' => 'Объявление 4', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления'],
            ['name' => 'Объявление 5', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления'],
            ['name' => 'Объявление 6', 'price' => '123 руб.', 'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo2_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'photo3_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg', 'description' => 'Текст описания объявления']
        ];

        foreach ($entries as $entry) { 
            Entry::create($entry);
    };
    }
}
