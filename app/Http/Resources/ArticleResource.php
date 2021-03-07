<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'published' => $this->created_at->diffForHumans(),
            'subject' => $this->subject,
            'author' => $this->user->name,

        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
