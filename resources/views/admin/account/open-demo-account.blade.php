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
                        <th>Username</th>
                        <th>Password</th>
                        <th>Request Time</th>
                        <th>Activated Time</th>
						<th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($logins as $login)
                      <tr>
                        <td>1</td>
                        <td>{{$login->login}}</td>
                        <td>{{$login->password}}</td>
                        <td>{{$login->created_at}}</td>
                        <td>{{$login->updated_at}}</td>
						<td>
						  @if($login->is_active == 'yes')
							  <span class="label label-success">Active</span>
					      @else
							  <span class="label label-default">Not Active</span>
						  @endif
						</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                </div>
				<div class="col-md-2">
			      <a href="{{ url('admin/account/create-demo') }}" class="btn btn-primary btn-block">Request New Account</a>
			    </div>
              </div>
              <!-- End Example Basic -->
            </div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection
