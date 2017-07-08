@extends('admin.layouts.main')


@section('content')
<!-- Page -->
<div class="page">
	<div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-6">
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
                        <th>Request Date</th>
                        <th>Activated Date</th>
						<th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Teagan</td>
                        <td>Prohaska</td>
                        <td>@Elijah</td>
                        <td>
                          <span class="label label-danger">admin</span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Andy</td>
                        <td>Gaylord</td>
                        <td>@Ramiro</td>
                        <td>
                          <span class="label label-info">member</span>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Veronica</td>
                        <td>Gusikowski</td>
                        <td>@Maxime</td>
                        <td>
                          <span class="label label-warning">developer</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Bruce</td>
                        <td>Rogahn</td>
                        <td>@Maggio</td>
                        <td>
                          <span class="label label-success">supporter</span>
                        </td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Carolina</td>
                        <td>Hickle</td>
                        <td>@Hammes</td>
                        <td>
                          <span class="label label-info">member</span>
                        </td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Madaline</td>
                        <td>Eichmann</td>
                        <td>@Amaya</td>
                        <td>
                          <span class="label label-success">supporter</span>
                        </td>
                      </tr>
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
  
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection
