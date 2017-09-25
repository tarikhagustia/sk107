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
												<label class="col-sm-5 control-label">Nomor {{$datas->tipe_id}}: </label>
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
<<<<<<< HEAD
				<p class="text-justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka {{$datas->perusahaan}}, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka.</p>
                 <p class="text-justify">Demikian Peryataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.</p>

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
								</div>

							</div>
				@if($datas->status == 'approved')
				
				@else
				<div class="form-group form-material" style="text-align:center;">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary" disabled>Submit </button>
=======
				<div class="form-group form-material" style="text-align:center;">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" @if($task->status == 'active')checked @endif /> Saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka {{config('settings.company_name')}}, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka. <br>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
						</label>
					</div>
				</div>
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
