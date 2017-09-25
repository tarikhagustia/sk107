<div class="lightbox-block" id="custom-content">
		<div>
			<div class="modal-header">
				<div class="pull-left" style="font-size:11px;font-weight:700;">
					<p>Formulir Nomor : 107.PBK.02.1</p>
				</div>
				<div class="pull-right" style="font-size:11px;text-align:right;">
					Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
				</div>
			</div>
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="example-wrap">
							<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN TELAH MELAKUKAN SIMULASI PERDAGANGAN BERJANGKA KOMODITI</h4>
							<hr>
							<br>
							<br>
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
			<hr>
<<<<<<< HEAD
			<br>
			<div class="form-group form-material" style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, Saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada {{config('settings.company_name')}}, dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.
			</div>
			<br>
			<br>
				<div class="form-group form-material" style="text-align:justified;">
					Pernyataan menerima    <span style="display:inline-block;margin-left:35px;vertical-align:middle;"><img src="img/admin/ya.jpg" style="height:18;width:18;"> Ya</span>     <span style="display:inline-block;margin-left:20px;vertical-align:middle;"><img src="img/admin/tidak.jpg" style="height:18;width:18;"> Tidak</span>
				</div>
				<div class="form-group form-material" style="text-align:justified;">
					Menyatakan pada Tanggal {{$data->today->formatLocalized('%d %B %Y')}}
				</div>
=======
			<div class="modal-footer">
				<div class="form-group form-material" style="text-align:center;">
					Saya menyatakan bahwa saya telah melakukan simulasi bertransaksi di bidang Perdagangan Berjangka Komoditi pada {{config('settings.company_name')}}, dan telah memahami tentang tata cara bertransaksi di bidang Perdagangan Berjangka Komoditi.
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
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		</div>
</div>