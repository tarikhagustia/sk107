<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
class HomeController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('created_at', 'ASC')->paginate(5);
      $story = Category::where('slug', 'cerita-liburan')->firstOrFail();

      return view('website.index', ['posts' => $posts, 'stories' => $story]);
    }
}
