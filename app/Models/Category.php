<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
  use HasFactory;

  protected $fillable = [
    'name',
    'slug',
    'image',
  ];

  public function tournaments() {
    return $this->hasMany(Tournament::class);
  }

  static function getNextTournamentTimeInCategory($categories) {
    $time = [];
    foreach ($categories as $category) {
      if($category->tournaments->count() > 0) {
        $tournament = $category->tournaments->first();
        $individualTime = getTimeOfDateTime($tournament->date);
      }
      if($category->tournaments->count() <= 0) {
        $individualTime = "";
      }
      array_push($time, $individualTime);
    }
    return $time;
  }
}
