<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_name' => $this->user->name,
            'title' => $this->title,
            'path_image' => $this->path_image,
            'category' => $this->category->title,
            'created_at' => $this->created_at->format('Y-m-d H:i')
        ];
    }
}
