<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    // app/Book.php

    public function user()
    {
      return $this->belongsTo(User::class);
    }
  
    public function ratings()
    {
      return $this->hasMany(Rating::class);
    }

       protected $fillable = ['user_id', 'name', 'isbn', 'authors', 'country', 'number_of_pages', 'publisher', 'release_date'];
}
