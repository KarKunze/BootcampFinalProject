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

  public function tag()
    {
        return $this->belongsToMany('App\Tag', 'tag');
    }

  public function category_page() {

      switch ($this->category_id) {

        case 1:
          return 'art';

        case 2:
            return 'music';

        case 3:
            return 'places';

        case 4:
            return 'eatdrink';

        case 5:
            return 'local';

        default:
            return 'index';

      }

  }


}
