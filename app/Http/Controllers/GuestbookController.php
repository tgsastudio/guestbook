<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    //
    public function postList()
    {
        $topics = Post::all();

        return view('postList', compact('topics'));
    }
}
