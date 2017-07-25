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
													<input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Nama Lengkap" />
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Tempat/Tanggal Lahir: </label>
													<div class="col-sm-4">
														<input type="text" class="form-control" name="place" id="place" placeholder="Tempat Lahir" autocomplete="off" />
													</div>
													<div class="col-sm-3">
															<input type="text" class="form-control" name="dob" id="dob" placeholder="dd-mm-yyyy">
													</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Alamat: </label>
												<div class="col-sm-7">
													<textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat"></textarea>
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor Identitas: </label>
												<div class="col-sm-3">
													<select class="form-control" name="id">
														<option value="ktp">KTP</option>
														<option value="sim">SIM</option>
														<option value="passport">Passport</option>
													</select>
												</div>	
												<div class="col-sm-4">
													<input type="text" class="form-control" name="noid" id="noid" placeholder="Nomor Identitas" autocomplete="off" />
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor Demo Acccount: </label>
												<div class="col-sm-7">
													12321312312
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
				<div class="form-group form-material">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" /> Saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada PT. ASKAP FUTURES, dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.
						</label>
					</div>
				</div>
				<div class="form-group form-material">	
					Menyatakan pada Tanggal <span id="date"></span>
				</div>
				<div class="form-group form-material">	
					<div class="col-sm-9 col-sm-offset-3">
						<button type="submit" class="btn btn-primary" >Submit </button>
					</div>
				</div>
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
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
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
                    }
                }
            },
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