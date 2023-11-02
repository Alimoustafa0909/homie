<?php

namespace App\Services\WebServices;
use App\Models\Comment;
use App\Models\Contact;

class CommentService
{

    public function store($request)
    {
        $attributes =  $request->validated();
        if ( $request->file('image') )
            $attributes['image'] = uploadImage($request->file('image'),'comments');
        Comment::create($attributes);
    }
}
