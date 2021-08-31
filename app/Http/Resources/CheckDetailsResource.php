<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheckDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
// hola
        $comments = $this->comments()->get();
        $commentsResource = [];
        foreach ($comments as $comment) {
            array_push($commentsResource, new CommentResource($comment));
        }

        return [
            'id' => $this->id,
            'image' => $this->image,
            'name' => $this->name,
            'check' => $this->check,
            'checked' => $this->checked,
            'checked_date' => $this->checked_date,
            'lat' => $this->lat,
            'long' => $this->long,
            'pdf' => $this->pdf,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'comments' => $commentsResource
        ];
    }
}
