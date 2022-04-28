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
    // Category::factory(5)->create();
    Category::factory()->create([
      'name' => 'Fortnite',
      'slug' => 'fortnite',
      'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.g_KzK3f4gW8dxxvE3sjG8wHaEK%26pid%3DApi&f=1',
    ]);
    Category::factory()->create([
      'name' => 'League of Legends',
      'slug' => 'league-of-legends',
      'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.SHMXEhGJpQehBrklAIoKFAHaEo%26pid%3DApi&f=1',
    ]);
    Category::factory()->create([
      'name' => 'Valorant',
      'slug' => 'valorant',
      'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.RT5o8PGMui1OSx8BJd3YgwHaEK%26pid%3DApi&f=1',
    ]);
    Category::factory()->create([
      'name' => 'Chess',
      'slug' => 'chess',
      'image' => 'https://www.mpl.live/blog/wp-content/uploads/2020/12/shutterstock_9077197-2048x1360.jpg',
    ]);
    Category::factory()->create([
      'name' => 'MarioKart',
      'slug' => 'mariokart',
      'image' => 'https://static.businessinsider.com/image/5d8e3a1a2e22af1d165c179c.jpg',
    ]);
    Tournament::factory(10)->has(User::factory(12))->create();
    User::factory()->create(['name'=>'user1','email'=>'user1@gmail.com']);
    User::factory()->create(['name'=>'admin1','email'=>'admin1@gmail.com', 'isAdmin'=>true]);
  }
}
