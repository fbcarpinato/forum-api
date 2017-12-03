<?php

namespace RESTfullServiceTest\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'body'
    ];
}
