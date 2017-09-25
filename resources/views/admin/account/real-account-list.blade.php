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
                <h4 class="example-title">Real Account List</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Request Time</th>
						<th>Login</th>
						<th>Status</th>
						<th>Agreement</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($reals as $key => $real)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$real->name}}</td>
                        <td>{{$real->email}}</td>
                        <td>{{Carbon::parse($real->created_at)->format('d-m-Y H:i:s')}}</td>
						<td>{{$real->login}}</td>
						<td>
						@if($real->is_active == 'yes')
							<span class="label label-success">Active</span>
						@else
							<span class="label label-danger">Suspend</span>
						@endif
						</td>
						<td>
							<a class="btn btn-primary" href="{{asset($real->docs)}}" style="text-decoration: none;">Download</a>
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