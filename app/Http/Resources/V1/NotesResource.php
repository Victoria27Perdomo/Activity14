<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'authorID' => $this->author_id,
            'categoryID' => $this->category_id,
            'title' => $this->title,
            'content' => $this->content,
            'dateTime' => $this->date_time
        ];
    }
}
