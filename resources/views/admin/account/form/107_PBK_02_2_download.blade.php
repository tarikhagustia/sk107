<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
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
							<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI</h4>
							<hr>
							<div class="example" style="margin-left:40px;">
								<table>
									<tbody>
										<tr>
											<td>
												Yang mengisi formulir di bawah ini ;
											</td>
										</tr>
										<tr>
											<td>Nama</td>
											<td>: {{$data->nama}}</td>
										</tr>
										<tr>
											<td>Tempat/Tanggal Lahir</td>
											<td>
												: {{$data->tempat_lahir}},{{$data->dob}}
											</td>
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
											<td>No Demo Account</td>
											<td>: {{$demo->login}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<br>
			<div class="form-group form-material" style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, Saya menyatakan bahwa saya telah memiliki pengalaman yang mencukupi dalam melaksanakan transaksi Perdagangan Berjangka karena pernah bertransaksi pada Perusahaan Pialang Berjangka {{$data->perusahaan}}, dan telah memahami tentang tata cara bertransaksi Perdagangan Berjangka. <br><br>Demikian Pernyataan ini dibuat dengan sebenarnya dalam keadaan sadar, sehat jasmani dan rohani serta tanpa paksaan apapun dari pihak manapun.
			</div>
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

