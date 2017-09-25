<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
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
						<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN BERTANGGUNG JAWAB ATAS KODE AKSES TRANSAKSI NASABAH <i>(Personal Access Password)</i></h4>
						<hr>
						<div class="example">
								<div data-role="container" class="scrollable-container" style="height: 200px;">
									<div data-role="content" class="scrollable-content" style="height: 200px;">
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
													<td>Kode pos</td>
													<td>: {{$data->kode_pos}}</td>
												</tr>
												<tr>
													<td>No {{$data->tipe_id}}</td>
													<td>: {{$data->no_id}}</td>
												</tr>
												<tr>
													<td>No Account</td>
													<td>
														 : {{$data->account_number}}
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
			<p align="justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya bertanggung jawab sepenuhnya terhadap kode akses transaksi Nasabah <i>(Personal Access Password)</i> dan tidak menyerahkan kode akses transaksi Nasabah <i>(Personal Access Password)</i> ke pihak lain, terutama kepada pegawai Pialang Berjangka atau pihak yang memiliki kepentingan dengan Pialang Berjangka.</p>
			<div style="border:solid black 1px">
			<table>
				<tr>
					<td align="center">
						<b>PERINGATAN !!!</b>
					</td>
				</tr>
				<tr>
					<td align="center">
						<b>Pialang Berjangka, Wakil Pialang Berjangka,pegawai Pialang Berjangka, atau pihak yang memiliki kepentingan dengan Pialang Berjangka dilarang menerima kode akses transaksi Nasabah <i>(Personal Access Password)</i>.</b>
					</td>
				</tr>
			</table>
			</div>
							<p class="text-center">
								Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
							</p>
				<br>
				<br>
								<div class="form-group form-material" style="text-align:justified;">
					Pernyataan menerima    <span style="display:inline-block;margin-left:35px;vertical-align:middle;"><img src="img/admin/ya.jpg" style="height:18;width:18;"> Ya</span>     <span style="display:inline-block;margin-left:20px;vertical-align:middle;"><img src="img/admin/tidak.jpg" style="height:18;width:18;"> Tidak</span>
				</div>
				<div class="form-group form-material" style="text-align:justified;">
					Menyatakan pada Tanggal {{$data->today->formatLocalized('%d %B %Y')}}
				</div>
		</div>
	</div>
</div>