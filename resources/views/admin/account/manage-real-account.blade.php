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
                <h4 class="example-title">Permintaan pembukaan akun real</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nomor Order</th>
                        <th>Tanggal Order</th>
                        <th>Nama</th>
                        <th>Status</th>
						<th></th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($accounts as $key => $demo)
                      <tr>
                        <td>{{$demo->order_number}}</td>
                        <td>{{Carbon::parse($demo->updated_at)->format('d-m-Y H:i:s')}}</td>
                        <td>{{$demo->nama}}</td>
                        <td>

													@if ($demo->status == "approved")
														<span class="label label-success">Diterima</span>
													@elseif ($demo->status == "pending")
														<span class="label label-warning">Pending</span>
													@elseif ($demo->status == "request")
														<span class="label label-default">Belum diproses</span>
													@elseif ($demo->status == "rejected")
														<span class="label label-danger">Ditolak</span>
													@endif
												</td>
												<td>
													<a class="btn btn-primary" href="{{asset($demo->docs)}}" style="text-decoration: none;">Preview</a>
												</td>
												<td>
													@if ($demo->status == "pending")
														<a type="submit" href="{{route('account.real.manage', ['id' => $demo->id])}}" class="btn btn-primary btn-block" style="text-decoration:none">Tampilkan</a>
													@elseif ($demo->status == "request")
														<a type="submit" href="{{route('account.real.manage', ['id' => $demo->id])}}" class="btn btn-primary btn-block" style="text-decoration:none">Tampilkan</a>
													@endif

												</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                </div>
				<div class="col-md-12">
					@if($errors->any())
                    <span class="help-block" style="color:red;">
                        <strong>{{$errors->first()}}</strong>
                    </span>
					@endif
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
