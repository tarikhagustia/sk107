<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="javascript:void(0)">x</a>
			<br><br>
			<div class="pull-left" style="font-size:11px;font-weight:700;">
				<p>Formulir Nomor : 107.PBK.01</p>
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
													<td>: Tarikh</td>
												</tr>
												<tr>
													<td>Tempat/Tanggal Lahir</td>
													<td>: sukabumi, 1 Januari 1996</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>: sukabumi 0</td>
												</tr>
												<tr>
													<td>No KTP</td>
													<td>: 10191291201201</td>
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
									</div>
								</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<p style="text-align:center;">
				Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.
			</p>
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
			<form class="form-horizontal" method="POST" action="{{ url('admin/account/real-account/form/107-PBK-07-check') }}">
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
			</form>
		</div>
	</div>
</div>

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