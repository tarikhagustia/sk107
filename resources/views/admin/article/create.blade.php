@extends('admin.layouts.main')

@section('content')
<div class="page">
    <div class="page-header">
      <h1 class="page-title">Create New Article</h1>
    </div>
    <div class="page-content container-fluid">
      <!-- Panel Options -->
      <form enctype="multipart/form-data" action="{{ route('post_create') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-lg-9">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Create Article
                </h3>
              </div>
              <div class="panel-body">
                <div class="form-group @if($errors->has('title')) has-error @endif">
                  <label for="" class="control-label" autofocus="true">Article Title</label>
                  <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                   @if($errors->has('title'))
                     <span class="help-block">{{ $errors->first('title') }}</span>
                   @endif
                </div>
                <div class="form-group @if($errors->has('category_id')) has-error @endif">
                  <label for="" class="control-label">Article Category</label>
                  <select class="form-control" name="category_id">
                    @foreach($categories as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                  </select>
                  @if($errors->has('category_id'))
                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('content')) has-error @endif">
                  <label for="" class="control-label">Article Content</label>
                  <textarea id="editor" class="form-control" name="content">{{old('content')}}</textarea>
                  @if($errors->has('content'))
                    <span class="help-block">{{ $errors->first('content') }}</span>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Publish
                </h3>
              </div>
              <div class="panel-body">
                <button type="submit" class="btn btn-block btn-primary waves-effect waves-light ladda-button" data-style="zoom-in" data-plugin="ladda">Publish</button>
                <button type="button" class="btn btn-block btn-danger waves-effect waves-light ladda-button" data-style="zoom-in" data-plugin="ladda">Cancel</button>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Featured Picture
                </h3>
              </div>
              <div class="panel-body">
                <div class="form-group @if($errors->has('photo')) has-error @endif">
                    <div class="input-group input-group-file">
                      <input type="text" class="form-control" readonly="">
                      <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                          <i class="icon md-upload" aria-hidden="true"></i>
                          <input type="file" id="myInput" name="photo">

                        </span>
                      </span>
                    </div>
                    @if($errors->has('photo'))
                      <span class="help-block">{{ $errors->first('photo') }}</span>
                    @endif
                  </div>
                  <img src="" id="myPreview" class="img-responsive" alt="">
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Meta
                </h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <textarea name="meta_description" class="form-control" placeholder="Meta Description"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="keywords" value="" placeholder="Holidays, Indonesia, Liburan">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/ladda.min.css') }}">
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.7.0/ckeditor.js" charset="utf-8"></script>
<script src="{{ asset('js/admin/spin.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda.min.js') }}"></script>
<script src="{{ asset('js/admin/buttons.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda-bootstrap.min.js') }}"></script>


<script src="{{ asset('js/admin/button.min.js') }}"></script>

<script>
    let options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('editor', options);
    function readURL(input) {

      if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                console.log(e);
                $('#myPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#myInput").change(function(){
        readURL(this);
    });
</script>
@endsection
