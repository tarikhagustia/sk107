<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
  protected $guard    = ['id'];
  protected $fillable = ['category_id', 'title', 'slug', 'raw_content', 'html_content', 'meta_description', 'meta_keywords', 'image'];


  public static function getArticle()
  {
    DB::statement(DB::raw('set @rownum=0'));
    $query = self::select([
      DB::raw('@rownum  := @rownum  + 1 AS rownum'),
      'id',
      'title',
      'category_id',
      'created_at'
    ]);
    return $query;
  }

  public function category()
  {
     return $this->belongsTo('App\Models\Category', 'category_id', 'id');
  }
  public function setSlugAttribute(){
      return $this->attributes['slug'] = str_slug($this->title , "-");
  }
  public static function hit()
  {
    $id = new self;
    dd($id->id);
  }
}
