<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
class ArticleController extends Controller
{
    //
    public function post_detail($slug)
    {
      $post = Post::where('slug', $slug)->firstOrFail();
      return view('website.article.post_detail', ['post' => $post]);
    }
}
