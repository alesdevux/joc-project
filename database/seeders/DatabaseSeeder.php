<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    Category::factory(5)->create();
    Tournament::factory(10)->create();
    User::factory()->create(['name'=>'user1','email'=>'user1@gmail.com']);
    User::factory()->create(['name'=>'admin1','email'=>'admin1@gmail.com', 'isAdmin'=>true]);
  }
}
