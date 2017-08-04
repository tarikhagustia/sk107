@extends('admin.layouts.main')

@section('content')
<!-- Page -->
<div class="page">
	<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-12">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title">Demo Account List</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($demos as $key => $demo)
                      <tr>
					    <form class="form-horizontal" id="requestDemoApproveForm" method="POST" action="{{ url('admin/account/approve-demo-account') }}">
						{{ csrf_field() }}
						<input type="hidden" value="{{$demo->id}}" name="id">
                        <td>{{$key+1}}</td>
                        <td>{{$demo->name}}</td>
                        <td>{{$demo->email}}</td>
						<td>
							<button type="submit" class="btn btn-primary btn-block" style="width:200px;">Approve</button>
						</td>
						</form>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
@endsection