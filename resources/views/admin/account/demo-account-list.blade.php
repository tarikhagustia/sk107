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
                        <th>Request Time</th>
						<th>Login</th>
						<th>Password</th>
						<th>Status</th>
						<th>Approved</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($demos as $key => $demo)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$demo->name}}</td>
                        <td>{{$demo->email}}</td>
<<<<<<< HEAD
                        <td>{{Carbon::parse($demo->created_at)->format('d-m-Y H:i:s')}}</td>
=======
                        <td>{{$demo->created_at}}</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						<td>{{$demo->login}}</td>
						<td>{{$demo->password}}</td>
						<td>
						@if($demo->is_active == 'yes')
							<span class="label label-success">Active</span>
						@else
							<span class="label label-danger">Not Active</span>
						@endif
						</td>
						<td>
						@if($demo->is_approved == 'yes')
							<span class="label label-success">Yes</span>
						@else
							<span class="label label-danger">No</span>
						@endif
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