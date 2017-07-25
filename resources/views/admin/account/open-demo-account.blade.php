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
					@foreach($logins as $key => $login)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$login->login}}</td>
                        <td>{{$login->password}}</td>
                        <td>{{$login->created_at}}</td>
						@if($login->is_active == 'yes')
							  <td>{{$login->updated_at}}</td>
					      @else
							  <td></td>
						  @endif

						<td>
						  @if($login->is_active == 'yes')
							  <span class="label label-success">Active</span>
					      @else
							  <span class="label label-danger">Not Active</span>
						  @endif
						</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                </div>
				<div class="col-md-12">
					@if( ! empty($err))
                    <span class="help-block" style="color:black;">
                        <strong>{{ $err }}</strong>
                    </span>
					@endif
				</div>
				@if( $create != 'true' )
				<p>*) Maksimal demo account adalah 1 untuk setiap user <br>*) Silahkan contact support kami untuk menambah balance demo account anda</p>
				@else
					@if(config('settings.demo_manual') == 0)
						<div class="col-md-3">
							<a href="{{ url('admin/account/create-demo') }}" class="btn btn-primary btn-block" >Request New Account</a>
						</div>
					@else
						<div class="col-md-3">
							<form class="" action="{{route('create.account.demo.manual')}}" method="post">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-primary btn-block"  name="button">Request New Account</button>
							</form>
						</div>
					@endif
				@endif

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
