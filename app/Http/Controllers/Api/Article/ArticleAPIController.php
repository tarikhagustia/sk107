<?php

namespace App\Http\Controllers\Api\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

use App\Models\Post;
use App\User;
class ArticleAPIController extends Controller
{
    public function list_article()
    {
      // dd(Post::find(2)->categories);
      return DataTables::of(Post::getArticle())
                        ->addColumn('category', function(Post $post) {
                          return $post->category->name;
                        })
                        ->addColumn('action', function($post){
                          $html = '<div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning dropdown-toggle waves-effect waves-light" id="exampleIconDropdown2" data-toggle="dropdown" aria-expanded="false">
                                      Options
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="exampleIconDropdown2" role="menu">
                                      <li role="presentation"><a href=" ' . url('admin/article/edit/'.$post->id) . '" role="menuitem">Edit</a></li>
                                      <li role="presentation"><a href=" ' . url('admin/article/delete/'.$post->id) . '" role="menuitem">Delete</a></li>
                                    </ul>
                                  </div>';
                          return $html;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
    }
}
