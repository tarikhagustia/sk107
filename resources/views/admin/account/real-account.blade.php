@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/formvalidation/formValidation.min.css')}}">
@endsection

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
                <h4 class="example-title">Real Account</h4>
                <div class="example table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Request Time</th>
						<th>Login</th>
						<th>Password</th>
						<th>Status</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($reals as $key => $real)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$real->nama}}</td>
                        <td>{{$email}}</td>
                        <td>{{$real->created_at}}</td>
						<td>{{$real->account_number}}</td>
						<td>
						@if($real->agreement == 'ya')
							{{$real->account_password}}
						@else
							************
						@endif
						</td>
						<td>
						@if($real->status == 'approved')
							<span class="label label-success">Active</span>
						@elseif($real->status == 'rejected')
							<span class="label label-danger">Rejected</span>
						@elseif($real->status == 'pending')
							<span class="label label-default">Pending</span>
						@elseif($real->status == 'filling' || $real->status == 'request')
							<span class="label label-primary">On Process</span>								
						@endif
						</td>
						<td><div class="btn btn-primary btn-block buttons" data-toggle="modal" data-name="{{$real->nama}}" data-tempat="{{$real->tempat_lahir}}" data-dob="{{$real->dob}}" data-alamat="{{$real->alamat}}" data-tipe_id="{{$real->tipe_id}}" data-no_id="{{$real->no_id}}" data-account="{{$real->account_number}}" data-target="#agreement">Persetujuan</div></td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
				  <br>
				  <p>*) Silahkan klik tombol persetujuan untuk menampilkan password</p>
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
			<div id="agreement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog" style="width:80%;">
								<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
												<br><br>
												<div class="pull-left" style="font-size:11px;font-weight:700;">
													<p>Formulir Nomor : 107.PBK.07</p>
												</div>
												<div class="pull-right" style="font-size:11px;text-align:right;">
													Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
												</div>
											</div>
											<div class="modal-body">
												<div class="row row-lg">
													<div class="col-sm-12">
														<div class="example-wrap">
															<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
															<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN BERTANGGUNGJAWAB ATAS KODE AKSES TRANSAKSI NASABAH (Personal Access Password)</h4>
															<hr>
															<div class="example">
																	<div data-role="container" class="scrollable-container" style="height: 100px;">
																		<div data-role="content" class="scrollable-content" style="height: 100px;">
																			Yang mengisi formulir di bawah ini ;<br>
																			<br>
																			<table>
																				<tbody>
																					<tr>
																						<td>Nama</td>
																						<td>: <span id="nama"></span></td>
																					</tr>
																					<tr>
																						<td>Tempat/Tanggal Lahir</td>
																						<td>: <span id="tempat"></span>,<span id="tgl"></span></td>
																					</tr>
																					<tr>
																						<td>Alamat</td>
																						<td>: <span id="alamat"></span></td>
																					</tr>
																					<tr>
																						<td>No <span id="tipe"></span></td>
																						<td>: <span id="no"></span></td>
																					</tr>
																					<tr>
																						<td>No Account</td>
																						<td>
																							 : <span id="login"></span>
																						</td>
																					</tr>
																					<!--
																					<tr>
																						<td>No Demo Account</td>
																						<td> :
																						<em>&laquo; No Account Demo &raquo;</em>		</td>
																					</tr>
																					-->
																				</tbody>
																			</table>
																		</div>
																	</div>
															</div>	
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<div class="alert dark alert-primary alert-dismissible text-center" role="alert">
																	<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													  </button> -->
																	 PERINGATAN !!!<br>
																	 Pialang Berjangka, Wakil Pialang Berjangka,pegawai Pialang Berjangka, atau pihak yang memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah (Personal Access Password).
																</div>
																<p class="text-center">
																	<b>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.</b>
																</p>
												<form class="form-horizontal" method="POST" id="agreementForm" action="{{ url('admin/account/real-account-user') }}">
												{{ csrf_field() }}
													<div class="form-group form-material">
														<div class="checkbox">
															<label>
																<input type="checkbox" name="agree" value="agree" /> Saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.
															</label>
														</div>
													</div>
													<div class="form-group form-material">	
														Menyatakan pada Tanggal <span id="date"></span>
													</div>
													<div class="form-group form-material">	
														<div class="col-sm-9 col-sm-offset-3">
															<button type="submit" class="btn btn-primary">Submit </button>
														</div>
													</div>
												</form>
											</div>
								</div>
							</div>
						</div>  					
@endsection

@section('js')
<script src="{{ asset('vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('vendor/formvalidation/bootstrap.min.js') }}"></script>
<script>
	$(document).on("click", ".buttons", function () {		
		var name = $(this).data('name');
		var tempat = $(this).data('tempat');
		var dob = $(this).data('dob');
		var alamat = $(this).data('alamat');
		var tipe_id = $(this).data('tipe_id');
		var no_id = $(this).data('no_id');
		var account = $(this).data('account');
		$("#nama").html(name);
		$("#tempat").html(tempat);
		$("#tgl").html(dob);
		$("#alamat").html(alamat);
		$("#tipe").html(tipe_id);
		$("#no").html(no_id);
		$("#login").html(account);
	});
	
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = dd + '/' + mm + '/' + yyyy;
document.getElementById("date").innerHTML = today;

$(document).ready(function() {
    $('#agreementForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			agree: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan pada form ini'
                    }
                }
            }
        }
    });
});
</script>
@endsection