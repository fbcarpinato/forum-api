<?php

namespace Forum\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CommentResource extends Resource
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
            'id'        =>  $this->id,
            'post_id'   => $this->post_id,
            'user_id'   => $this->user_id,
            'body'      => $this->body
        ];
    }
}
