<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Rating;
use App\Http\Resources\RatingResource;

public function store(Request $request, Book $book)
{
  $rating = Rating::firstOrCreate(
    [
      'user_id' => $request->user()->id,
      'book_id' => $book->id,
    ],
    ['rating' => $request->rating]
  );

  return new RatingResource($rating);
}

class RatingController extends Controller
{
    //
}
