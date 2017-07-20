<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
				<a class="popup-modal-dismiss pull-right" href="javascript:void(0)">x</a>
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
								<div data-role="container" class="scrollable-container" style="height: 300px; width: 510px;">
									<div data-role="content" class="scrollable-content" style="width: 493px;">
										Yang mengisi formulir di bawah ini ;
										<form class="form-horizontal" method="POST" action="{{ url('admin/account/real-account/form/107-PBK-02-2-check') }}">
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nama: </label>
												<div class="col-sm-7">
													Nama saya
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Tempat/Tanggal Lahir: </label>
													<div class="col-sm-4">
														Tempat Lahir saya
													</div>
													<div class="col-sm-3">
															tanggal lahir saya
													</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Alamat: </label>
												<div class="col-sm-7">
													alamat saya
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor KTP/SIM/Passport: </label>
												<div class="col-sm-7">
													No Identitas Saya
												</div>
											</div>
											<div class="form-group form-material">
												<label class="col-sm-5 control-label">Nomor Demo Acccount: </label>
												<div class="col-sm-7">
													Nomor Demo Account saya
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
				Dengan mengisi kolom "YA" di bawah ini, saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka PT. ASKAP FUTURES, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka. <br>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
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