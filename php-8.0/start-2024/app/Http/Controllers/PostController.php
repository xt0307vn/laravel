<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;

class PostController extends Controller
{

    public function list() {
        $posts = Post::all();
        return view('list.index', compact('posts'));
    }

    public function findId($id) {
        $post = Post::find($id);
        $update_post=false;
        if (Gate::allows('update-post', $post)) {
            $update_post = true;
        }
        return view('list.post', compact(['post', 'update_post']));
    }
}
