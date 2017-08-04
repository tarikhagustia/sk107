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
                <h4 class="example-title">Real Account</h4>
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
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($reals as $key => $real)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$real->nama}}</td>
                        <td>{{$real->email}}</td>
                        <td>{{$real->created_at}}</td>
						<td>{{$real->account_login}}</td>
						<td>{{$real->account_password}}</td>
						<td>
						@if($real->status == 'approved')
							<span class="label label-success">Active</span>
						@elseif($real->status == 'rejected')
							<span class="label label-danger">Rejected</span>
						@elseif($real->status == 'pending')
							<span class="label label-default">Pending</span>
						@elseif($real->status == 'filling' || $real->status == 'request')
							<span class="label label-primary">On Process</span>								
						@endif
						</td>
						<td><button type="button" class="btn btn-primary btn-block">Persetujuan</button></td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
				  <br>
				  <p>*) Silahkan klik tombol persetujuan untuk menampilkan password</p>
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