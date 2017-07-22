<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
				<a class="popup-modal-dismiss pull-right" href="javascript:void(0)">x</a>
				<br><br>
				<div class="pull-left" style="font-size:11px;font-weight:700;">
					<p>Formulir Nomor : 107.PBK.02.1</p>
				</div>
				<div class="pull-right" style="font-size:11px;text-align:right;">
					Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
				</div>
			</div>
			<form class="form-horizontal" method="POST" id="pbk02.1" action="{{ url('admin/account/real-account/form/107-PBK-02-1-check') }}">
			{{ csrf_field() }}
			<div class="modal-body">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="example-wrap">
							<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>
							<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI</h4>
							<hr>
							<div class="example">
								<div data-role="container" class="scrollable-container" style="height: 300px; width: 510px;">
									<div data-role="content" class="scrollable-content" style="width: 493px;">
										Yang mengisi formulir di bawah ini ;
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nama: </label>
												<div class="col-sm-7">
													<input type="text" class="form-control" name="name" autocomplete="off" placeholder="Nama Lengkap" />
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Tempat/Tanggal Lahir: </label>
													<div class="col-sm-4">
														<input type="text" class="form-control" name="place" placeholder="Tempat Lahir" autocomplete="off" />
													</div>
													<div class="col-sm-3">
															<input type="text" class="form-control" name="dob" placeholder="dd-mm-yyyy">
													</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Alamat: </label>
												<div class="col-sm-7">
													<textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
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
													<input type="text" class="form-control" name="noid" placeholder="Nomor Identitas" autocomplete="off" />
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
			<p style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada PT. ASKAP FUTURES, dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.
			</p>	
				<div class="form-group form-material">
					Pernyataan menerima *)
					<div class="radio-custom radio-default radio-inline center">
						<input type="radio" id="inputHorizontalYa" name="inputRadiosPersetujuan" />
						<label for="inputHorizontalMale">Ya</label>
					</div>
					<div class="radio-custom radio-default radio-inline center">
						<input type="radio" id="inputHorizontalTidak" name="inputRadiosPersetujuan" checked />
						<label for="inputHorizontalFemale">Tidak</label>
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
			</div>
			  </form>
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
</script>

<script>
$(document).ready(function() {
    $('#pbk02.1').formValidation({
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Nama harus diisi'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Nama harus minimal 6 karakter dan maksimal 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'Nama hanya boleh diisi dengan huruf dan spasi'
                    }
                }
            },
			place: {
                validators: {
                    notEmpty: {
                        message: 'Pengalaman harus diisi'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Pengalaman harus minimal 6 karakter dan maksimal 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'Nama hanya boleh diisi dengan huruf dan spasi'
                    }
                }
            },
			dob: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The date of birth is not valid'
                    }
                }
            },
            noid: {
                validators: {
                    notEmpty: {
                        message: 'Nomor identitas harus diisi'
                    },
                    numeric: {
                        message: 'Nomor identitas hanya boleh angka'
                    }
                }
            },
			alamat: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            }
        }
    });
});
</script>