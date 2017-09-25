<link rel="stylesheet" href="{{asset('vendor/formvalidation/formValidation.min.css')}}">
<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
				<a class="popup-modal-dismiss pull-right" href="#">x</a>
				<br><br>
				<div class="pull-left" style="font-size:11px;font-weight:700;">
					<p>Formulir Nomor : 107.PBK.02.1</p>
				</div>
				<div class="pull-right" style="font-size:11px;text-align:right;">
					Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
				</div>
			</div>
			<form class="form-horizontal" id="pbk02Form" method="POST" action="{{ url('admin/account/real-account/form/107-PBK-02-1-check') }}">
			{{ csrf_field() }}
			<div class="modal-body">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="example-wrap">
							<p>Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>
							<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI</h4>
							<hr>
							<div class="example">
								<div data-role="container" class="scrollable-container" style="height: 300px; width: 610px;">
									<div data-role="content" class="scrollable-content" style="width: 593px;">
										Yang mengisi formulir di bawah ini ;
										
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nama: </label>
												<div class="col-sm-7">
													<input maxlength="30" type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Nama Lengkap" value="{{$order->nama}}" @if($order->status == 'approved')disabled @endif />
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Tempat/Tanggal Lahir: </label>
													<div class="col-sm-4">
														<input maxlength="30" type="text" class="form-control" name="place" id="place" placeholder="Tempat Lahir" autocomplete="off" value="{{$order->tempat_lahir}}" @if($order->status == 'approved')disabled @endif />
													</div>
													<div class="col-sm-3">
															<input type="text" class="form-control" name="dob" id="dob" placeholder="dd-mm-yyyy" value="{{$order->dob}}" @if($order->status == 'approved')disabled @endif >
													</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Alamat: </label>
												<div class="col-sm-7">
													<textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" @if($order->status == 'approved')disabled @endif >{{$order->alamat}}</textarea>
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor Identitas: </label>
												<div class="col-sm-3">
													<select class="form-control" name="id" @if($order->status == 'approved')disabled @endif >
														<option value="ktp" @if($order->tipe_id == "KTP") selected @endif >KTP</option>
														<option value="sim" @if($order->tipe_id == "SIM") selected @endif >SIM</option>
														<option value="passport" @if($order->tipe_id == "Passport") selected @endif >Passport</option>
													</select>
												</div>	
												<div class="col-sm-4">
													<input maxlength="20" type="text" class="form-control" name="noid" id="noid" placeholder="Nomor Identitas" autocomplete="off" value="{{$order->no_id}}" @if($order->status == 'approved')disabled @endif />
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor Demo Acccount: </label>
												<div class="col-sm-7">
												{{$demos->login}}
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="text-justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada {{config('settings.company_name')}}, dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.</p>
                <p class="text-justify">Demikian Peryataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.</p>

							<div class="row">
								<div class="col-sm-8 col-sm-offset-4">
									<div class="form-group">
										<label class="col-sm-3 control-label">Peryataan Kebenaran dan tanggung jawab <span class="text-danger">*)</span></label>
										<div class="col-sm-3">

												<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="ya" @if($task->status == 'active')checked @endif @if($order->status == 'approved') disabled @endif>
													<label for="aproval_yes">Ya</label>
												</div>
												<br>
												<br>
												<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="tidak" @if($order->status == 'approved')disabled @endif>
													<label for="aproval_no">Tidak</label>
												</div>
											</div>
									</div>
									<div class="form-group">

										<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
										<div class="col-sm-9">
											<p class="form-control-static pull-left" id="date">{{$order->created_at->formatLocalized('%A %d %B %Y')}}</p>
										</div>
									</div>
								</div>

							</div>
				@if($order->status == 'approved')
				
				@else
				<div class="form-group form-material" style="text-align:center;">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary" disabled>Submit </button>
					</div>
				</div>	
				@endif
			</div>
			  </form>
		</div>
</div>
<script src="{{ asset('vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('vendor/formvalidation/bootstrap.min.js') }}"></script>
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
</script>
<script>
$(document).ready(function() {
    $('#pbk02Form').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
			place: {
                validators: {
                    notEmpty: {
                        message: 'Tempat lahir harus diisi'
                    }
                }
            },
			dob: {
                validators: {
                    notEmpty: {
                        message: 'Tanggal lahir harus diisi'
                    },
                    date: {
                        format: 'DD-MM-YYYY',
                        message: 'Format tanggal lahir salah'
                    }
                }
            },
			alamat: {
                validators: {
                    notEmpty: {
                        message: 'Alamat harus diisi'
                    }
                }
            },
			noid: {
                validators: {
                    notEmpty: {
                        message: 'Nomor Identitas harus diisi'
                    },
					numeric: {
                        message: 'Nomor Identitas harus angka'
                    }
                }
            },
			approval_yes: {
                validators: {
					notEmpty: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas'
                    },
                    stringLength: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas',
                        max: 2
                    }
                }
            }
        }
    });
});

</script>