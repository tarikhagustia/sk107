<?php

namespace App\Http\Controllers\Admin\Gallery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function manage_gallery()
    {
      return view('admin.gallery.top-photo');
    }
}
