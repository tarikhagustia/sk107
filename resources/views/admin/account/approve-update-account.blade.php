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
						<th>Order Number</th>
                        <th>Request Time</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($datas as $key => $data)
					<form action="{{url('admin/account/approve-update-account-detail/'.$data->id)}}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" value="{{$data->id}}" name="id"/>
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->order_number}}</td>
                        <td>{{Carbon::parse($data->created_at)->format('d-m-Y H:i:s')}}</td>
						<td>
							<button class="btn btn-primary btn-block buttons" type="submit">Lihat Data</a>
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