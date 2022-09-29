<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->query('search');
        $posts = Post::query()
            ->when($search, fn ($query, $search) => $query->where('title', 'like', "%$search%"))
            ->orderByDesc('created_at')
            ->paginate(10);
        return view('home', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', ['post' => $post]);
    }
}
