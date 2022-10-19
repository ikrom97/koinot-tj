<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
  use HasFactory;

  protected $guarded = [];

  // public function sluggable()
  // {
  //   return [
  //     'slug' => [
  //       'source' => 'title'
  //     ]
  //   ];
  // }

  public function images()
  {
    return $this->hasMany(Image::class, 'contribution_id');
  }
}