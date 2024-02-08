<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $images = [];

        foreach ($this->images as $image) {
            $images[$image->type] = $image->url;

        }
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'slug'         => $this->slug,
            'short_desc'   => $this->short_desc,
            'tags'         => $this->tags,
            'desc'         => $this->desc,
            'status'       => $this->status,
            'meta_title'   => $this->meta_title,
            'meta_keyword' => $this->meta_keyword,
            'meta_desc'    => $this->meta_desc,
            'category'     => $this->category->name,
            'images'       => (object) $images,
            'created_at'   => date_format($this->created_at, "M d, Y"),
            'updated_at'   => date_format($this->updated_at, "M d, Y")
        ];
    }
}
