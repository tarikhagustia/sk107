@extends('admin.layouts.main')

@section('content')
<div class="page">
    <div class="page-header">
      <h1 class="page-title">Article Management</h1>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">
                Article Management
              </div>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table" id="myTable">

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/ladda.min.css') }}">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endsection

@section('js')
<script src="{{ asset('js/admin/spin.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda.min.js') }}"></script>
<script src="{{ asset('js/admin/buttons.min.js') }}"></script>
<script src="{{ asset('js/admin/ladda-bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/button.min.js') }}"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: {
	            url : "{{url('api/article')}}",
	            type : 'get',
	        },
	        columns: [
	            {data: 'rownum', name: 'rownum', title : 'No', searchable: false},
	            {data: 'title', name: 'title', title : 'Title', searchable: true},
              {data: 'category', name: 'category', title : 'Category', searchable: false},
	            {data: 'created_at', name: 'created_at', title : 'Publish Date', searchable: false},
	            {data: 'action', name: 'action', title : 'Action', searchable: false},
	        ]
	    });
} );
</script>
@endsection
