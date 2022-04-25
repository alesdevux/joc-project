<?php

namespace Tests\Feature\Tournaments;

use App\Models\Category;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase {
  use RefreshDatabase;

  public function test_list_tournament_appear_in_categories() {
    $this->withExceptionHandling();
    Tournament::all();

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->get(route('categories.show', $category->id));
    $response->assertStatus(200)->assertViewIs('categories.show')->assertSee($tournament->title);
  }

  public function test_admin_can_be_delete_tournament() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->delete(route('tournaments.delete', $tournament->id));
    $this->assertCount(0, Tournament::all());
  }

  public function test_user_can_not_be_delete_tournament() {
    $this->withExceptionHandling();

    $user1 = User::factory()->create();
    $this->actingAs($user1);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->delete(route('tournaments.delete', $tournament->id));
    $this->assertCount(1, Tournament::all());
  }

  public function test_tournament_can_be_update() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->patch(route('tournaments.update', $tournament->id), [
      'title' => 'new title',
      'description' => 'new description',
      'award' => 'new award',
      'date' => '2020-04-01',
      'plataform' => 'new plataform',
    ]);

    $this->assertEquals('new title', Tournament::first()->title);
    $this->assertCount(1, Tournament::all());
  }

  public function test_view_edit_form() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->get(route('tournaments.edit', $tournament->id));
    $response->assertStatus(200)->assertViewIs('tournaments.edit');
  }

  public function test_view_create_form() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'category_id' => $category->id,
    ]);

    $response = $this->get(route('tournaments.create', $tournament->id));
    $response->assertStatus(200)->assertViewIs('tournaments.create');
  }

  public function test_create_tournament() {
    $this->withExceptionHandling();

    $userAdmin = User::factory()->create(['isAdmin' => true]);
    $this->actingAs($userAdmin);

    $category = Category::factory()->create();
    $tournament = Tournament::factory()->create([
      'title' => 'Hola',
      'description' => 'tikiti',
      'award' => 'tukutu',
      'date' => '2030-04-01',
      'plataform' => 'new platsdaaform',
      'category_id' => $category->id,
    ]);

    $response = $this->post(route('tournaments.store', $tournament));

    $this->assertCount(1, Tournament::all());
    $this->assertDatabaseHas('tournaments', [
      'title' => 'Hola',
      'description' => 'holiiis',
      'award' => 'sasasa',
      'date' => '2030-04-01',
      'plataform' => 'new platsdaaform',
      'category_id' => $category->id,
    ]);
  }
}
