<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_items()
    {
        $category = Category::create([
            'name' => 'Elektronik'
        ]);

        Item::create([
            'name' => 'Laptop',
            'category_id' => $category->id,
            'quantity' => 10,
            'price' => 7000000
        ]);

        $response = $this->getJson('/api/v1/items');

        $response->assertStatus(200);
    }

    public function test_can_create_item()
    {
        $category = Category::create([
            'name' => 'Elektronik'
        ]);

        $data = [
            'name' => 'Laptop Asus',
            'category_id' => $category->id,
            'quantity' => 10,
            'price' => 7000000
        ];

        $response = $this->postJson('/api/v1/items', $data);

        $response->assertStatus(201);
    }

    public function test_can_update_item()
    {
        $category = Category::create([
            'name' => 'Elektronik'
        ]);

        $item = Item::create([
            'name' => 'Laptop',
            'category_id' => $category->id,
            'quantity' => 10,
            'price' => 7000000
        ]);

        $response = $this->putJson(
            "/api/v1/items/{$item->id}",
            [
                'name' => 'Laptop Gaming',
                'category_id' => $category->id,
                'quantity' => 15,
                'price' => 9000000
            ]
        );

        $response->assertStatus(200);
    }

    public function test_can_delete_item()
    {
        $category = Category::create([
            'name' => 'Elektronik'
        ]);

        $item = Item::create([
            'name' => 'Laptop',
            'category_id' => $category->id,
            'quantity' => 10,
            'price' => 7000000
        ]);

        $response = $this->deleteJson(
            "/api/v1/items/{$item->id}"
        );

        $response->assertStatus(200);
    }
}