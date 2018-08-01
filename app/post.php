<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User', 'creator_id');
  }

  public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

  public function category_name(){
        return $this->category()->get()[0]->name;
  }

  public function user_name(){
        return $this->user()->get()[0]->name;
  }
}
