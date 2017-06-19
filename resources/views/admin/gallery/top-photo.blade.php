@extends('admin.layouts.main')

@section('content')
<div class="page">
    <div class="page-header">
      <h1 class="page-title">Top Gallery</h1>
    </div>
    <div class="page-content container-fluid">
      <!-- Panel Options -->
      <div id="main-gallery">
        <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">
            Manage Your TOP Photo
          </div>
        </div>
        <div class="panel-body">
          <button type="button" id="btnAdd" class="btn btn-primary" name="button">Add Photo</button>
          <div class="margin-top-10" id="photo-list">
            <div class="form-group row dash">
              <div class="col-sm-4">
                <label for="">Select Image</label>
                <div class="input-group">
                  <span class="input-group-btn">
                    <a data-input="thumbnail" data-preview="holder" class="btn btn-primary filemanager">
                      <i class="fa fa-picture-o"></i> Choose
                    </a>
                  </span>
                  <input id="thumbnail" class="form-control" type="text" name="filepath">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">
              </div>
              <div class="col-sm-8">
                <label for="">Select Title</label>
                <input type="text" class="form-control" name="" value="">
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <button type="submit" name="button" class="btn btn-success ">Save to gallery</button>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/ladda.min.css') }}">
<style media="screen">
  .dash {
    box-sizing: border-box;
    border: solid 1px;
    border-color: rgb(164, 164, 164);
    padding : 5px;
    border-style: dashed;
  }
</style>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.7.0/ckeditor.js" charset="utf-8"></script>
<script src="{{ asset('js/admin/spin.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda.min.js') }}"></script>
<script src="{{ asset('js/admin/buttons.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda-bootstrap.min.js') }}"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<script src="{{ asset('js/admin/button.min.js') }}"></script>
<script src="{{mix('js/gallery.js')}}" charset="utf-8"></script>

<script>
    $('.filemanager').filemanager('image');
</script>
@endsection
