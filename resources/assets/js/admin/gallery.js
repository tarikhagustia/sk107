$(function(){
  let html = `
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
  `;
  const GALLERY_CONAINER = $('#main-gallery');
  $("#btnAdd").click(function() {
    $('.panel-body').append(html);
    $('.filemanager').filemanager('image');
  });

})
