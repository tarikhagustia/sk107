<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="#">x</a>
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
													<td>: {{$data->nama}}</td>
												</tr>
												<tr>
													<td>Tempat/Tanggal Lahir</td>
													<td>: {{$data->tempat_lahir}}, {{$data->dob}}</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>: {{$data->alamat}}</td>
												</tr>
												<tr>
													<td>No {{$data->tipe_id}}</td>
													<td>: {{$data->no_id}}</td>
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
				<div class="form-group form-material" style="text-align:center;">
					Saya menyatakan bahwa saya bertanggungjawab sepenuhnya terhadap kode akses transaksi Nasabah (Personal Access Password) dan tidak menyerahkan kode akses transaksi Nasabah (Personal Access Password) ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.
				</div>
				<br>
				<br>
				<br>
				<div class="pull-right" style="text-align:right;">
					{{$data->today->formatLocalized('%A %d %B %Y')}}
					<br>
					Menyatakan,
					<br>
					<br>
					<br>
					<br>
					({{$data->nama}})
				</div>
		</div>
	</div>
</div>