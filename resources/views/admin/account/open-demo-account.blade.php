@extends('admin.layouts.main')


@section('content')
<!-- Page -->
<div class="page">
	<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
		  @if($errors->any())
		  <div class="alert alert-warning">
			<p>{{$errors->first()}}</p>
		  </div>
		  @endif
<<<<<<< HEAD
		  @if($approved != 'true')
		  <div class="alert alert-danger">
        	    <p><span>*) Harap lakukan simulasi trading</span></p>
      		  </div>
		  @endif
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
						<th>Approved</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($logins as $key => $login)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$login->login}}</td>
                        <td>{{$login->password}}</td>
<<<<<<< HEAD
                        <td>{{Carbon::parse($login->created_at)->format('d-m-Y H:i:s')}}</td>
						@if($login->is_active == 'yes')
							  <td>{{Carbon::parse($login->updated_at)->format('d-m-Y H:i:s')}}</td>
=======
                        <td>{{$login->created_at}}</td>
						@if($login->is_active == 'yes')
							  <td>{{$login->updated_at}}</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
					      @else
							  <td></td>
						  @endif

						<td>
						  @if($login->is_active == 'yes')
							  <span class="label label-success">Active</span>
					      @else
							  <span class="label label-danger">Not Active</span>
<<<<<<< HEAD
						  @endif
						</td>
						<td>
						  @if($login->is_approved == 'yes')
							  <span class="label label-success">Yes</span>
					      @else
							  <span class="label label-danger">No</span>
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						  @endif
						</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
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
<<<<<<< HEAD
							<form class="" id="demo-form" action="{{route('create.account.demo.manual')}}" method="post">
								{{ csrf_field() }}
								<button type="button" class="btn btn-primary btn-block" id="formSave" name="button" onclick="disable()">Request New Account</button>
=======
							<form class="" action="{{route('create.account.demo.manual')}}" method="post">
								{{ csrf_field() }}
								<button type="submit" class="btn btn-primary btn-block"  name="button">Request New Account</button>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD

        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <script>
function disable(){
	$('#demo-form').submit();
  document.getElementById('formSave').setAttribute("disabled", "disabled"); 
}
  </script>
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
@endsection
