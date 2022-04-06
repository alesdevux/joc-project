<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase {
  /**
   * A basic feature test example.
   *
   * @return void
   */

  use RefreshDatabase;

  public function test_list_categories_appear_in_home() {
    $this->withExceptionHandling();
    Category::all();

    $response = $this->get('/');
    $response->assertStatus(200)->assertViewIs('home');
  }

  public function test_categories_can_be_delete() {
    $this->withExceptionHandling();
    $category = Category::factory()->create();

    $response = $this->delete(route('categories.delete', $category->id));
    $this->assertCount(0, Category::all());
  }

  public function test_category_can_be_update() {
    $this->withExceptionHandling();
    $category = Category::factory()->create([
      'name' => 'test',
    ]);
    
    $this->assertCount(1, Category::all());

    $this->patch(route('categories.update', $category->id), ["name" => "new name"]);

    $this->assertEquals("new name", Category::first()->name);
    $this->assertCount(1, Category::all());
  }

  public function test_view_edit_form() {
    $this->withExceptionHandling();
    $category = Category::factory()->create();

    $response = $this->get(route('categories.edit', $category->id));
    $response->assertStatus(200)->assertViewIs('categories.edit');
  }
}
