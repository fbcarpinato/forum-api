<?php

namespace RESTfullServiceTest\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class PostsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'  => PostResource::collection($this->collection),
            'meta' => [
                'status_code'   => Response::HTTP_OK
            ]
        ];
    }
}
