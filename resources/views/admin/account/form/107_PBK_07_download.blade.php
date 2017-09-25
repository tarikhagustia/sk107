<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
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
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERNYATAAN PEMBUKAAN REKENING</h4>
						<hr>
						<div class="example">
									<div data-role="container" class="scrollable-container" style="height: 400px;">
									<div data-role="content" class="scrollable-content" style="height: 400px;">
										Yang mengisi formulir di bawah ini;
										<br>
										<br>
										<table>
											<tbody>
												<tr>
													<td>Nama</td>
													<td>: {{$data->nama}}</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>: {{$data->alamat}}</td>
												</tr>
												<tr>
													<td>No {{$data->tipe_id}}</td>
													<td>: {{$data->no_id}}</td>
												</tr>
											</tbody>
										</table>
											<div class="row" style="text-align:justify;">
												<p>Dengan ini menerangkan dan menyatakan dengan sebenar-benarnya bahwa saya telah mendapatkan penjelasan dari {{config('setting.company_name')}} yang berkedudukan di {{config('setting.company_address')}}, melalui Wakil Pialang Berjangka yang bernama @if(!empty($datas->wp)){{$datas->wp}}@else menyusul @endif. mengenai mekanisme transaksi Perdagangan Berjangka yang akan saya lakukan sendiri. Saya juga telah sepenuhnya membaca, mengerti, serta memahami penjelasan mengenai isi dokumen Perjanjian Pemberian Amanat, dokumen Pemberitahuan Adanya Risiko, serta semua ketentuan dan peraturan perdagangan (trading rules).</p>
												<p>Terhadap apa yang saya jalankan dalam  transaksi ini berikut segala risiko yang akan timbul akibat transaksi sepenuhnya akan menjadi tanggung jawab saya.</p>
												<p>Bersama ini saya menyatakan bahwa dana yang saya gunakan untuk bertransaksi di {{config('setting.company_name')}} adalah milik saya pribadi dan bukan dana pihak lain, serta tidak diperoleh dari hasil penipuan, penggelapan, hasil pencucian uang maupun tindak pidana korupsi dan perbuatan melawan hukum lainnya serta tidak dimaksudkan untuk melakukan pencucian uang.</p>
											</div>
									</div>
								</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<br>
			<div class="form-group form-material" style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, Sebagai akhir  proses pembukaan rekening transaksi ini, saya menyatakan setuju untuk membuka  rekening transaksi pada {{config('setting.company_name')}}  dan karenanya saya  melepaskan {{config('setting.company_name')}}  dari segala tuntutan hukum dan  tanggungjawab yang timbul daripadanya.				
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