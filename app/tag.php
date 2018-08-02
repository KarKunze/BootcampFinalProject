<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

  public function posts()
  {
    return $this->belongsToMany(Post::class);
  }

  public function getTagName()
  {
    return 'name';
  }

}
