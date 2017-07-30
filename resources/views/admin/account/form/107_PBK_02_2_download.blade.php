<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
				<a class="popup-modal-dismiss pull-right" href="#">x</a>
				</button>
				<br><br>
				<div class="pull-left" style="font-size:11px;font-weight:700;">
					<p>Formulir Nomor : 107.PBK.02.2</p>
				</div>
				<div class="pull-right" style="font-size:11px;text-align:right;">
					Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
				</div>
			</div>
			<div class="modal-body">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="example-wrap">
							<p style="font-size=11px;">Surat Pernyataan Telah Berpengalaman Melaksanakan Transaksi Perdagangan Berjangka Komoditi sebagaimana yang ada di Formulir Nomor : 107.PBK.02.2 hanya dapat diberikan kepada Nasabah yang telah berpengalaman melakukan transaksi Perdagangan Berjangka Komoditi.</p>
							<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI</h4>
							<hr>
							<div class="example">
								<div data-role="container" class="scrollable-container" style="width: 510px;">
									<div data-role="content" class="scrollable-content" style="width: 493px;">
										Yang mengisi formulir di bawah ini ;

											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nama: </label>
												<div class="col-sm-7">
													{{$datas->nama}}
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Tempat/Tanggal Lahir: </label>
													<div class="col-sm-7">
														{{$datas->tempat_lahir}}, {{$datas->dob}}
													</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Alamat: </label>
												<div class="col-sm-7">
													{{$datas->alamat}}
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor {{$datas->tie_id}}: </label>
												<div class="col-sm-7">
													{{$datas->no_id}}
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
				<form class="form-horizontal" method="POST" id="pbk022Form" action="{{ url('admin/account/real-account/form/107-PBK-02-2-check') }}">
				{{ csrf_field() }}
				<div class="form-group form-material">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" /> Saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka PT. ASKAP FUTURES, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka. <br>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
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

$(function () {
  $(document).on('click', '.popup-modal-dismiss', function (e) {
		console.log(e);
    e.preventDefault();
    $.magnificPopup.close();
  });
});

$(document).ready(function() {
    $('#pbk022Form').formValidation({
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
