<?php

namespace App\Http\Controllers\Admin\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

use Image;

class PostController extends Controller
{

    protected $photo_size;
    public function __construct()
    {
      $this->photo_size = [
                [
                  'size' => [385, 285],
                  'name' => 'small'
                ],
                [
                  'size' => false,
                  'name' => 'original'
                ]
      ];
    }
    public function create()
    {
      $categories = Category::orderBy('name', 'ASC')->get();
      return view('admin.article.create', ['categories' => $categories]);
    }
    public function post_create(Request $request)
    {
        $this->validate($request, [
          'category_id'     => 'required',
          'title'           => 'required|unique:posts,title',
          'content'         => 'required',
          'photo'           => 'required',
        ]);

        if($request->hasFile('photo')) {
          $image = $request->file('photo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $file_manager_path = 'photos/1/';
          foreach($this->photo_size as $row):
            $location = public_path($file_manager_path . $row['name'] . '/' . $filename);
            if($row['size']):
              $cb = Image::make($image)->fit($row['size'][0], $row['size'][1])->save($location);
            else:
              $cb = Image::make($image)->save($location);
            endif;
          endforeach;
        }

        try {
          Post::create([
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'html_content'  => $request->content,
            'meta_description'   => $request->meta_description,
            'meta_keywords'   => $request->keywords,
            'image' => $filename,
            'slug' => ''
          ]);
          return redirect()->back()->with('success', 'Success adding Article');
        } catch (Exception $e) {
          return redirect()->back()->with('error', 'Failed adding article');
        }

    }
    public function post_list()
    {
      return view('admin.article.list');
    }
    public function post_delete($id)
    {
      try {
        $sql = Post::find($id)->delete();
        return redirect()->back()->with('success', 'Success delete Article');
      } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed delete Article');
      }

    }
    public function edit_post($id)
    {
      $categories = Category::orderBy('name', 'ASC')->get();
      $post = Post::find($id);
      return view('admin.article.edit', ['categories' => $categories, 'post' => $post]);
    }
    public function post_edit_post(Request $request, $id)
    {
      $post = Post::find($id);
      $post->category_id = $request->category_id;
      $post->title = $request->title;
      $post->html_content = $request->content;
      $post->meta_description = $request->meta_description;
      $post->meta_keywords = $request->meta_keywords;
      if($request->hasFile('photo')):
        $image = $request->file('photo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $file_manager_path = 'photos/1/';
        foreach($this->photo_size as $row):
          $location = public_path($file_manager_path . $row['name'] . '/' . $filename);
          if($row['size']):
            $cb = Image::make($image)->fit($row['size'][0], $row['size'][1])->save($location);
          else:
            $cb = Image::make($image)->save($location);
          endif;
        endforeach;
        $post->image = $filename;
      endif;
      $post->save();

      return redirect()->back()->with(['success' => 'berhasil update artikel']);
    }
}
