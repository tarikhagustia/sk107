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
                      <tr>
                        <td>1</td>
                        <td>1102011022</td>
                        <td>John347</td>
                        <td>Jul 8, 2017, 11:07:24</td>
                        <td>Jul 8, 2017, 11:07:27</td>
						<td>
						  <span class="label label-success">Active</span>
						</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
				<div class="col-md-2">
			      <a href="{{ url('admin/account/create-demo') }}" class="btn btn-primary btn-block">Request New Account</button>
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
