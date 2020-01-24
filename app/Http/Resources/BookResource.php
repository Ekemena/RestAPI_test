<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'isbn' => $this->isbn,
            'authors' => $this->authors,
            'country' => $this->country,
            'number_of_pages' => $this->number_of_pages,
            'publisher' => $this->publisher,
            'average_rating' => $this->ratings->avg('rating'),
            'release_date' => $this->release_date,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user' => $this->user,
          ];
          
    }
}


