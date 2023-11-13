<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CommentRequest;
use App\Models\Comment;
use App\Services\WebServices\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;

    }

    public function store(CommentRequest $request)
    {
        $this->commentService->store($request);
        return redirect()->back()->with('success_message', 'The comment has been added successfully');

    }
}
