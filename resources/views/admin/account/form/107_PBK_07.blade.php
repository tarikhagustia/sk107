<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="#">x</a>
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
						<hr>
						<div class="example">
								<div data-role="container" class="scrollable-container" style="height: 400px;">
									<div data-role="content" class="scrollable-content" style="height: 400px;">
										Yang mengisi formulir di bawah ini;
										<div class="row">
										<br>
<<<<<<< HEAD
											<div class="form-group form-material">
												<label class="col-sm-3 control-label">Nama: </label>
												<div class="col-sm-3">
													<input disabled type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Nama Lengkap" value="{{$datas->nama}}" @if($datas->status == 'approved')disabled @endif />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group form-material">
												<label class="col-sm-3 control-label">Alamat: </label>
												<div class="col-sm-3">
													<textarea disabled class="form-control" placeholder="Alamat" name="alamat" id="alamat" @if($datas->status == 'approved')disabled @endif >{{$datas->alamat}}</textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group form-material">
												<label class="col-sm-3 control-label">Nomor Identitas: </label>
												<div class="col-sm-3">
													<select disabled class="form-control" name="id" @if($datas->status == 'approved')disabled @endif >
														<option value="ktp" @if($datas->tipe_id == "KTP") selected @endif >KTP</option>
														<option value="sim" @if($datas->tipe_id == "SIM") selected @endif >SIM</option>
														<option value="passport" @if($datas->tipe_id == "Passport") selected @endif >Passport</option>
													</select>
												</div>	
												<div class="col-sm-3">
													<input disabled type="text" class="form-control" name="noid" id="noid" placeholder="Nomor Identitas" autocomplete="off" value="{{$datas->no_id}}" @if($datas->status == 'approved')disabled @endif />
												</div>
											</div>
										</div>	
										<br>
										<br>
											<div class="row" style="text-align:justify;">
												<p>Dengan ini menerangkan dan menyatakan dengan sebenar-benarnya bahwa saya telah mendapatkan penjelasan dari {{config('setting.company_name')}} yang berkedudukan di {{config('setting.company_address')}}, melalui Wakil Pialang Berjangka yang bernama @if(!empty($datas->wp)){{$datas->wp}}@else menyusul @endif. mengenai mekanisme transaksi Perdagangan Berjangka yang akan saya lakukan sendiri. Saya juga telah sepenuhnya membaca, mengerti, serta memahami penjelasan mengenai isi dokumen Perjanjian Pemberian Amanat, dokumen Pemberitahuan Adanya Risiko, serta semua ketentuan dan peraturan perdagangan (trading rules).</p>
												<p>Terhadap apa yang saya jalankan dalam  transaksi ini berikut segala risiko yang akan timbul akibat transaksi sepenuhnya akan menjadi tanggung jawab saya.</p>
												<p>Bersama ini saya menyatakan bahwa dana yang saya gunakan untuk bertransaksi di {{config('setting.company_name')}} adalah milik saya pribadi dan bukan dana pihak lain, serta tidak diperoleh dari hasil penipuan, penggelapan, hasil pencucian uang maupun tindak pidana korupsi dan perbuatan melawan hukum lainnya serta tidak dimaksudkan untuk melakukan pencucian uang.</p>
											</div>
=======
										<table>
											<tbody>
												<tr>
													<td>Nama</td>
													<td>: {{$datas->nama}}</td>
												</tr>
												<tr>
													<td>Tempat/Tanggal Lahir</td>
													<td>: {{$datas->tempat_lahir}}, {{$datas->dob}}</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>: {{$datas->alamat}}</td>
												</tr>
												<tr>
													<td>No {{$datas->tipe_id}}</td>
													<td>: {{$datas->no_id}}</td>
												</tr>
												<tr>
													<td>No Account</td>
													<td>
														 : <em>« menyusul »</em>
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
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
									</div>
								</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<form class="form-horizontal" method="POST" id="pbk07Form" action="{{ url('admin/account/real-account/form/107-PBK-07-check') }}">
			{{ csrf_field() }}
<<<<<<< HEAD
				<p class="text-justify">Dengan mengisi kolom “YA” di bawah, saya menyatakan setuju untuk membuka rekening transaksi pada {{config('settings.company_name')}}  dan karenanya saya  melepaskan {{config('settings.company_name')}}  dari segala tuntutan hukum dan  tanggungjawab yang timbul daripadanya. </p>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-4">
						<div class="form-group">
							<label class="col-sm-3 control-label">Peryataan Kebenaran dan tanggung jawab <span class="text-danger">*)</span></label>
							<div class="col-sm-3">

								<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="ya" @if($task->status == 'active')checked @endif @if($datas->status == 'approved') disabled @endif>
													<label for="aproval_yes">Ya</label>
												</div>
												<br>
												<br>
												<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="tidak" @if($datas->status == 'approved')disabled @endif>
													<label for="aproval_no">Tidak</label>
												</div>
							</div>
						</div>
						<div class="form-group">

							<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
							<div class="col-sm-9">
								<p class="form-control-static pull-left" id="date">{{$datas->created_at->formatLocalized('%A %d %B %Y')}}</p>
							</div>
						</div>
=======
				<div class="form-group form-material" style="text-align:center;">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" @if($task->status == 'active')checked @endif /> Saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.
						</label>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
					</div>

				</div>
<<<<<<< HEAD
				@if($datas->status == 'approved')
				
				@else
				<div class="form-group form-material" style="text-align:center;">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary" disabled>Submit </button>
=======
				<div class="form-group form-material" style="text-align:center;">	
					Menyatakan pada Tanggal <span id="date"></span>
				</div>
				<div class="form-group form-material" style="text-align:center;">	
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Submit </button>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
					</div>
				</div>	
				@endif
			</form>
		</div>
	</div>
</div>

<script>
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

$(function () {
  $(document).on('click', '.popup-modal-dismiss', function (e) {
		console.log(e);
    e.preventDefault();
    $.magnificPopup.close();
  });
});

$(document).ready(function() {
    $('#pbk07Form').formValidation({
        framework: 'bootstrap',
        fields: {
						approval_yes: {
                validators: {
					notEmpty: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas'
                    },
                    stringLength: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas',
                        max: 2,
                    }
                }
            }
        }
    });
});
</script>