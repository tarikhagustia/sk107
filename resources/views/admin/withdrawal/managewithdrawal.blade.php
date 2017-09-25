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
                <h4 class="example-title">Request Withdrawal Nasabah</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
<<<<<<< HEAD
						<th>Email</th>
                        <th>Login</th>
						<th>Currency</th>
                        <th>Amount</th>
						<th>Bank</th>
						<th>No Rekening</th>
						<th>Nama Pemegang Rekening</th>
            			<th>Status</th>
            			<th>Created At</th>
            			<th>Action</th>
=======
                        <th>Email</th>
												<th>Mt4 Login</th>
                        <th>Amount</th>
            						<th>Status</th>
            						<th>Created At</th>
            						<th>Action</th>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                      </tr>
                    </thead>
                    <tbody>
											<?php  $no = 1?>
													@foreach ($Withdrawal as $row)
                      <tr>
					    <form class="form-horizontal" id="" method="post" action="{{ url('admin/submanagewithdrawal') }}">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $row->id }}" name="id">
						<input type="hidden" value="{{ $row->name }}" name="name">
						<input type="hidden" value="{{ $row->email }}" name="email">
						<input type="hidden" value="{{ $row->account_id }}" name="account_id">
<<<<<<< HEAD
						<input type="hidden" value="{{ $row->currency }}" name="currency">
						<input type="hidden" value="{{ $row->amount }}" name="amount">
						<input type="hidden" value="{{ $row->bank }}" name="amount">
						<input type="hidden" value="{{ $row->no_rek }}" name="no_rek">
						<input type="hidden" value="{{ $row->nama_rek }}" name="nama_rek">
                        <td>{{ $no++ }}</td>
						<td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->account_id }}</td>
						<td>{{ $row->currency }}</td>
                        <td>{{ $row->amount }}</td>
						<td>{{ $row->bank }}</td>
						<td>{{ $row->no_rek }}</td>
						<td>{{ $row->nama_rek }}</td>
            		    <td>{{ $row->status }}</td>
            			<td>{{ $row->created_at }}</td>
=======
						<input type="hidden" value="{{ $row->amount }}" name="amount">
											<td>{{ $no++ }}</td>
											<td>{{ $row->name }}</td>
											<td>{{ $row->email }}</td>
											<td>{{ $row->account_id }}</td>
											<td>{{ $row->amount }}</td>
											<td>{{ $row->status }}</td>
											<td>{{ $row->created_at }}</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
            						<td>
            							<button type="submit" class="btn btn-primary btn-block">Update</button>
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
<<<<<<< HEAD
				<br>
				<br>
				<h4 class="example-title">History Withdrawal Nasabah</h4>
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
						<th>Bank</th>
						<th>No Rekening</th>
						<th>Nama Pemegang Rekening</th>
            			<th>Status</th>
            			<th>Created At</th>
            			<th>Updated At</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php  $no = 1?>
					 @foreach ($history as $row)
                      <tr>
                        <td>{{ $no++ }}</td>
						<td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->account_id }}</td>
						<td>{{ $row->currency }}</td>
                        <td>{{ $row->amount }}</td>
						<td>{{ $row->bank }}</td>
						<td>{{ $row->no_rek }}</td>
						<td>{{ $row->nama_rek }}</td>
            		    <td>{{ $row->status }}</td>
            			<td>{{ $row->created_at }}</td>
						<td>{{ $row->updated_at }}</td>
                      </tr>
											@endforeach
                    </tbody>
                  </table>
                </div>
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
