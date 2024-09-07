<?php

namespace Tests\Feature;

use App\Models\Entry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EntryControllerTest extends TestCase
{
    /** @test */
    public function it_can_get_a_single_entry()
    {

        $response = $this->get("api/entries/1");

        $response->assertStatus(200);
        $response->assertJsonFragment(['name' => 'Объявление 1']);
    }

    /** @test */
    public function it_can_add_an_entry()
    {
        $data = [
            'name' => 'Объявление тест',
            'description' => 'Описание',
            'photo1_link' => 'https://img.freepik.com/free-vector/blank-notice-board-with-paper_1308-170765.jpg',
            'price' => 300,
        ];

        $response = $this->post('api/entries/add', $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('entries', ['name' => 'Объявление тест']);
    }

    /** @test */
    public function it_can_show_api_entries()
    {
        $response = $this->get("api/entries/");

        $response->assertStatus(200);
    }
}