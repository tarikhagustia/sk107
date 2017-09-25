<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="#">x</a>
			<br><br>
			<div class="pull-right" style="font-size:11px;text-align:right;">
				Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
			</div>
		</div>
		<div class="modal-body">
			<div class="row row-lg">
				<div class="col-sm-12">
					<div class="example-wrap">
						<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERATURAN PERDAGANGAN (TRADING RULES)</h4>
						<hr>
						<div class="example">
								<div data-role="container" class="scrollable-container" style="height: 400px;">
									<div data-role="content" class="scrollable-content" style="height: 400px;">
										<div class="row">
											<div class="col-sm-10 col-sm-offset-2">
												<b>TRADING RULES KONTRAK BERJANGKA :</b><br>
												<ul>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/TRADING_RULES.pdf" target="_blank">TRADING RULES DOWNLOAD</a>
													</li>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/CONTRACT_SPECIFICATION.pdf" target="_blank">CONTRACT SPECIFICATION DOWNLOAD</a>
													</li>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/SGX_MSCI_INDONESIA.pdf" target="_blank">SGX MSCI INDONESIA DOWNLOAD</a>
													</li>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/SGX_CHINA_A50.pdf" target="_blank">SGX CHINA A50 DOWNLOAD</a>
													</li>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/SGX_TAIWAN_INDEX.pdf" target="_blank">SGX TAIWAN INDEX RULES DOWNLOAD</a>
													</li>
													<li>
														<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="http://sk107.si.co.id/download/SGX_NIKKEI_255.pdf" target="_blank">SGX NIKKEI 255 RULES DOWNLOAD</a>
													</li>
												</ul>
												<p>*)Perusahaan berhak untuk merubah segala ketentuan/ peraturan yang ada dalam peraturan transaksi ini tanpa pemberitahuan terlebih dahulu</p>
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
			<form class="form-horizontal" method="POST" id="pbk06Form" action="{{ url('admin/account/real-account/form/107-PBK-06-check') }}">
			{{ csrf_field() }}
<<<<<<< HEAD
				<p class="text-justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah membaca tentang <b>PERATURAN PERDAGANGAN (TRADING RULES)</b>, mengerti dan menerima ketentuan dalam bertransaksi.</p>

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
=======
				<div class="form-group form-material" style="text-align:center;">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" @if($task->status == 'active')checked @endif /> Saya menyatakan bahwa saya telah membaca, <b>PERATURAN PERDAGANGAN (TRADING RULES), </b> mengerti dan menerima ketentuan dalam bertransaksi.
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
    $('#pbk06Form').formValidation({
        framework: 'bootstrap',
        fields: {
						approval_yes: {
                validators: {
                    stringLength: {
						notEmpty: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas'
                    },
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas',
                        max: 2,
                    }
                }
            }
        }
    });
	$("input:radio").change(function () {$("#approval_yes").prop("disabled", false);});
});
</script>