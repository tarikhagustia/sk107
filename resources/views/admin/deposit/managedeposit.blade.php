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
                <h4 class="example-title">Request Deposit Nasabah</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
						<th>Email</th>
                        <th>Login</th>
						<th>Currency</th>
                        <th>Amount</th>
            			<th>Status</th>
            			<th>Created At</th>
						<th>Bukti Transfer</th>
            			<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
											<?php  $no = 1?>
													@foreach ($deposit as $row)
                      <tr>
					    <form class="form-horizontal" id="" method="post" action="{{ url('admin/submanagedeposit') }}">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $row->id }}" name="id">
						<input type="hidden" value="{{ $row->name }}" name="name">
						<input type="hidden" value="{{ $row->email }}" name="email">
						<input type="hidden" value="{{ $row->account_id }}" name="account_id">
						<input type="hidden" value="{{ $row->currency }}" name="currency">
						<input type="hidden" value="{{ $row->amount }}" name="amount">
                        <td>{{ $no++ }}</td>
						<td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->account_id }}</td>
						<td>{{ $row->currency }}</td>
                        <td>{{ $row->amount }}</td>
            		    <td>{{ $row->status }}</td>
            			<td>{{ $row->created_at }}</td>
						<td>
            				<a class="btn btn-primary btn-block" href="{{asset($row->bukti)}}" target="_blank">View</button>
            			</td>
            						<td>
            							<button type="submit" class="btn btn-primary btn-block">Approve</button>
            						</td>
						</form>
                      </tr>
											@endforeach
                    </tbody>
                  </table>
                </div>
				<div class="col-md-12">
                    <span class="help-block" style="color:red;">
                        <strong></strong>
                    </span>
				</div>
								<br>
				<br>
				<h4 class="example-title">History Deposit Nasabah</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
						<th>Email</th>
                        <th>Login</th>
						<th>Currency</th>
                        <th>Amount</th>
            			<th>Status</th>
            			<th>Created At</th>
            			<th>Updated At</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php  $noo = 1?>
					 @foreach ($history as $row)
                      <tr>
						<input type="hidden" value="{{ $row->id }}" name="id">
						<input type="hidden" value="{{ $row->name }}" name="name">
						<input type="hidden" value="{{ $row->email }}" name="email">
						<input type="hidden" value="{{ $row->account_id }}" name="account_id">
						<input type="hidden" value="{{ $row->currency }}" name="currency">
						<input type="hidden" value="{{ $row->amount }}" name="amount">
                        <td>{{ $noo++ }}</td>
						<td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->account_id }}</td>
						<td>{{ $row->currency }}</td>
                        <td>{{ $row->amount }}</td>
            		    <td>{{ $row->status }}</td>
            			<td>{{ $row->created_at }}</td>
						<td>{{ $row->updated_at }}</td>
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

        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
@endsection
