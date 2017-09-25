<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="#">x</a>
			<br><br>
			<div class="pull-left" style="font-size:11px;font-weight:700;">
				<p>Formulir Nomor : 107.PBK.04.1</p>
			</div>
			<div class="pull-right" style="font-size:11px;text-align:right;">
				Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
			</div>
		</div>
		<form class="form-horizontal" method="POST" id="pbk04Form" action="{{ url('admin/account/real-account/form/107-PBK-04-2-check') }}">
		{{ csrf_field() }}
		<div class="modal-body">
			<div class="row row-lg">
				<div class="col-sm-12">
					<div class="example-wrap">
						<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">DOKUMEN PEMBERITAHUAN ADANYA RISIKO YANG HARUS DISAMPAIKAN OLEH PIALANG BERJANGKA UNTUK TRANSAKSI KONTRAK BERJANGKA</h4>
						<hr>
						<div class="example">
							<div class="height-400 scrollable scrollable-shadow is-enabled scrollable-vertical" data-skin="scrollable-shadow" data-plugin="scrollable" style="position: relative;">
								<div data-role="container" class="scrollable-container" style="height: 400px;">
									<div data-role="content" class="scrollable-content" style="height: 400px;">

										<table class="risk" cellspacing="0">
													<tbody>
													<tr>
														<td colspan="2" class="just" style="text-align:justify;">
															Dokumen Pemberitahuan Adanya Risiko ini disampaikan kepada Anda sesuai dengan Pasal 50 ayat (2) Undang-Undang Nomor 32 Tahun 1997 tentang Perdagangan Berjangka Komoditi sebagaimana telah diubah dengan Undang-Undang Nomor 10 Tahun 2011 tentang Perubahan Atas Undang-Undang Nomor 32 Tahun 1997 Tentang Perdagangan Berjangka Komoditi.
														</td>
													</tr>
													<tr>
<<<<<<< HEAD
														<td colspan="2" class="just notop" style="text-align:justify;">
															Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Berjangka bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.														</td>
=======
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check0"></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															Maksud dokumen ini adalah memberitahukan bahwa kemungkinan kerugian atau keuntungan dalam perdagangan Kontrak Derivatif dalam Sistem Perdagangan Alternatif bisa mencapai jumlah yang sangat besar. Oleh karena itu, Anda harus berhati-hati dalam memutuskan untuk melakukan transaksi, apakah kondisi keuangan Anda mencukupi.
														</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check1" @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check1" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="1">
																<li style="font-weight:700;">
																	<u>Perdagangan  Kontrak  Berjangka  belum  tentu    layak    bagi  semua investor.</u>
																</li>
															</b>	
																<p>
																Anda dapat menderita kerugian dalam jumlah besar dan dalam jangka waktu singkat. Jumlah kerugian uang dimungkinkan dapat melebihi jumlah  uang  yang  pertama  kali  Anda  setor  (Margin  awal)  ke  Pialang Berjangka Anda. 															</p>
															<p>
																Anda  mungkin  menderita  kerugian  seluruh  Margin  dan  Margin  tambahan yang ditempatkan pada Pialang Berjangka untuk mempertahankan posisi Kontrak Berjangka Anda.															</p>
															<p>
																Hal  ini  disebabkan  Perdagangan  Berjangka  sangat  dipengaruhi  oleh mekanisme  <i>leverage</i>,  dimana  dengan  jumlah  investasi  dalam  bentuk yang  relatif  kecil  dapat  digunakan  untuk  membuka  posisi  dengan  aset yang  bernilai  jauh  lebih  tinggi.  Apabila  Anda  tidak  siap  dengan risiko seperti  ini,  sebaiknya  Anda  tidak  melakukan  perdagangan  kontrak Berjangka. 															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check2" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check2" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="2">
																<li style="font-weight:700;">
																	<u>Perdagangan  Kontrak  Berjangka  mempunyai  risiko  dan  mempunyai kemungkinan kerugian yang tidak terbatas yang jauh lebih besar dari jumlah  uang  yang  disetor  (Margin)  ke  Pialang  Berjangka.</u>																</li>
															</b>
															<p>
																Kontrak Berjangka sama dengan produk keuangan lainnya yang mempunyai risiko tinggi,  Anda  sebaiknya  tidak  menaruh  risiko  terhadap  dana  yang  Anda tidak  siap  untuk  menderita  rugi,  seperti  tabungan  pensiun,  dana kesehatan atau dana untuk keadaan darurat, dana yang disediakan untuk pendidikan  atau  kepemilikan  rumah,  dana  yang  diperoleh  dari  pinjaman pendidikan  atau  gadai,  atau  dana  yang  digunakan  untuk  memenuhi kebutuhan sehari-hari.															</p>
															</ol>
															
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check3" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check3" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="3">
																<li style="font-weight:700;">
																	<u>Berhati-hatilah terhadap pernyataan bahwa Anda pasti mendapatkan keuntungan  besar  dari  perdagangan  Kontrak  Berjangka.</u>																</li>
															</b>
															<p>
																Meskipun perdagangan  Kontrak  Berjangka  dapat  memberikan  keuntungan  yang besar  dan  cepat,  namun  hal  tersebut  tidak  pasti,  bahkan  dapat menimbulkan  kerugian  yang  besar  dan  cepat  juga.  Seperti  produk keuangan lainnya, tidak ada yang dinamakan “pasti untung”.															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check4" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check4" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="4">
																<li style="font-weight:700;">
																	<u>Disebabkan  adanya  mekanisme  <i>leverage</i>  dan  sifat  dari  transaksi Kontrak  Berjangka,  Anda  dapat  merasakan  dampak  bahwa  anda menderita  kerugian  dalam  waktu  cepat.</u>																</li>
															</b>
															<p>
																Keuntungan maupun kerugian dalam transaksi Kontrak Berjangka akan langsung dikredit atau didebet ke rekening Anda, paling lambat secara harian. Apabila pergerakan di pasar terhadap Kontrak Berjangka menurunkan nilai posisi Anda dalam Kontrak Berjangka,  Anda  diwajibkan  untuk  menambah  dana  untuk  pemenuhan kewajiban  Margin  ke  Pialang  Berjangka.  Apabila  rekening  Anda  berada dibawah  minimum  Margin  yang  telah  ditetapkan  Lembaga  Kliring Berjangka  atau  Pialang  Berjangka,  maka  posisi  Anda  dapat  dilikuidasi pada  saat  rugi,  dan  Anda  wajib  menyelesaikan  defisit  (jika  ada)  dalam rekening Anda. 															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check5" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check5" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="5">
																<li style="font-weight:700;">
																	<u>Pada  saat  pasar  dalam  keadaan  tertentu,  Anda  mungkin  akan  sulit atau  tidak  mungkin  melikuidasi  posisi.</u>  																</li>
															</b>
															<p>
																Pada  umumnya  Anda  harus melakukan  transaksi  <i>offset</i>  jika  ingin  melikuidasi  posisi  dalam  Kontrak Berjangka. Apabila Anda tidak dapat melikuidasi posisi Kontrak Berjangka, Anda  tidak  dapat  merealisasikan  keuntungan  pada  nilai  posisi  tersebut atau  mencegah  kerugian  yang  lebih  tinggi.  Kemungkinan  tidak  dapat melikuidasi  dapat  terjadi,  antara  lain:  jika  perdagangan  berhenti dikarenakan  aktivitas  perdagangan  yang  tidak  lazim  pada  Kontrak Berjangka  atau  subjek  Kontrak  Berjangka,  terjadi  kerusakan  sistem  pada Bursa Berjangka atau Pialang Berjangka, atau posisi Anda berada dalam pasar  yang  tidak  likuid.  Bahkan  apabila  Anda  dapat  melikuidasi  posisi tersebut,  Anda  mungkin  terpaksa  melakukannya  pada  harga  yang menimbulkan kerugian besar.															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check6" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check6" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="6">
																<li style="font-weight:700;">
																	<u>Pada  saat  pasar  dalam  keadaan  tertentu,  Anda  mungkin  akan  sulit atau  tidak  mungkin  mengelola  risiko  atas  posisi  terbuka  Kontrak Berjangka  dengan  cara  membuka  posisi  dengan  nilai  yang  sama namun  dengan  posisi  yang  berlawanan  dalam  kontrak  bulan  yang berbeda,  dalam  pasar  yang  berbeda  atau  dalam  subjek  Kontrak Berjangka  yang  berbeda.</u>																</li>
															</b>
															<p>
																Kemungkinan  untuk  tidak  dapat  mengambil posisi  dalam  rangka  membatasi  risiko  yang  timbul,  contohnya:  jika perdagangan  dihentikan  pada  pasar  yang  berbeda  disebabkan  aktivitas perdagangan  yang  tidak  lazim  pada  Kontrak  Berjangka  atau  “subjek Kontrak Berjangka”.															</p>
															</ol>
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check7" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check7" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="7">
																<li style="font-weight:700;">
																	<u>Anda  dapat  diwajibkan  untuk  menyelesaikan  Kontrak  Berjangka dengan penyerahan fisik dari “subjek Kontrak Berjangka”.</u> 																</li>
															</b>
															<p>
																Jika Anda mempertahankan  posisi  penyelesaian  fisik  dalam  Kontrak  Berjangka sampai  hari  terakhir  perdagangan  berdasarkan  tanggal  jatuh  tempo Kontrak  berjangka,  Anda  akan  diwajibkan  menyerahkan  atau  menerima penyerahan  subjek  Kontrak  Berjangka  yang  dapat  mengakibatkan adanya  penambahan  biaya.  Pengertian  penyelesaian  dapat  berbeda untuk  suatu  Kontrak  Berjangka  dengan  Kontrak  Berjangka  lainnya  atau  suatu  Bursa  Berjangka  dengan  Bursa  Berjangka  lainnya.  Anda  harus melihat  secara  teliti  mengenai  penyelesaian  dan  kondisi  penyerahan sebelum membeli atau menjual Kontrak Berjangka.															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check8" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check8" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="8">
																<li style="font-weight:700;">
																	<u>Anda  dapat  menderita  kerugian  yang  disebabkan  kegagalan  sistem informasi.</u> 																</li>
															</b>
															<p>
																Sebagaimana  yang  terjadi  pada  setiap  transaksi  keuangan, Anda  dapat  menderita  kerugian  jika  amanat  untuk  melaksanakan transaksi  Kontrak  Berjangka  tidak  dapat  dilakukan  karena  kegagalan sistem  informasi  di  Bursa  Berjangka,  penyelenggara  maupun  sistem informasi  di  Pialang  Berjangka  yang  mengelola  posisi  Anda.  Kerugian Anda  akan  semakin  besar  jika  Pialang  Berjangka  yang  mengelola  posisi Anda tidak memiliki sistem informasi cadangan atau prosedur yang layak.															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check9" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check9" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="9">
																<li style="font-weight:700;">
																	<u>Semua  Kontrak  Berjangka  mempunyai  risiko,  dan  tidak  ada  strategi berdagang  yang  dapat  menjamin  untuk  menghilangkan  risiko tersebut.</u>																</li>
															</b>
															<p>
																Strategi dengan menggunakan kombinasi posisi seperti <i><i>spread</i></i>, dapat  sama  berisiko  seperti  posisi <i><i>long</i></i> atau <i><i>short</i></i>. Melakukan Perdagangan  Berjangka  memerlukan  pengetahuan  mengenai  Kontrak Berjangka dan pasar berjangka.															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check10" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check10" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="10">
																<li style="font-weight:700;">
																	<u>Strategi  perdagangan  harian  dalam  Kontrak  Berjangka  dan  produk lainnya  memiliki  risiko  khusus.</u>																</li>
															</b>
															<p>
																Seperti pada produk keuangan lainnya, pihak  yang  ingin  membeli  atau  menjual  Kontrak  Berjangka  yang  sama dalam  satu  hari  untuk  mendapat  keuntungan  dari  perubahan  harga  pada hari tersebut <i>(“day traders”)</i> akan memiliki beberapa risiko tertentu antara lain  jumlah  komisi  yang  besar,  risiko  terkena  efek  pengungkit  (<i>“exposure to leverage”</i>), dan  persaingan  dengan  pedagang  profesional. Anda  harus mengerti risiko tersebut dan memiliki pengalaman yang memadai sebelum melakukan perdagangan harian (<i>“day trading”</i>).															</p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check11" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check11" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="11">
																<li style="font-weight:700;">
																	<u>Menetapkan amanat bersyarat, seperti Kontrak Berjangka dilikuidasi pada  keadaan  tertentu  untuk  membatasi  rugi  (<i>stop  loss</i>),  mungkin tidak  akan  dapat  membatasi  kerugian  Anda  sampai  jumlah  tertentu saja.</u> 																</li>
															</b>
															<p>
																Amanat bersyarat tersebut mungkin tidak dapat dilaksanakan karena terjadi  kondisi  pasar  yang  tidak  memungkinkan  melikuidasi  Kontrak Berjangka. </p>
															</ol>
															
															
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check12" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check12" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="12">
																<li style="font-weight:700;">
																	<u>Anda  harus  membaca  dengan  seksama  dan  memahami  Perjanjian Pemberian  Amanat  dengan  Pialang  Berjangka  Anda  sebelum melakukan transaksi Kontrak Berjangka.</u>																</li>
															</ol>
															</b>
															<p></p>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check13" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check13" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="13">
																<li style="font-weight:700;">
																	<u>Pernyataan singkat ini tidak dapat memuat secara rinci seluruh risiko atau  aspek  penting  lainnya  tentang  Perdagangan  Berjangka.  Oleh karena itu Anda harus mempelajari kegiatan Perdagangan Berjangka secara cermat sebelum memutuskan melakukan transaksi.</u>																</li>
															</ol>
															</b>
															<p></p>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check14" disabled @if($task->status == 'active')checked @endif></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<b>
															<ol start="14">
																<li style="font-weight:700;">
																	<u>Dokumen Pemberitahuan  Adanya Risiko (<i>Risk Disclosure</i>) ini dibuat dan ditandatangani dalam Bahasa Indonesia.</u> 																</li>
															</ol>
															</b>
															<p></p>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
<<<<<<< HEAD
															<input type="checkbox" class="tick" name="check15" disabled @if($task->status == 'active')checked @endif></td>
=======
															<input type="checkbox" class="tick" name="check14" disabled></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													</tr>
													</tbody>
													</table>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
<<<<<<< HEAD
				<p align="center">Dengan mengisi kolom “YA” di bawah, saya menyatakan bahwa saya telah menerima <b>“DOKUMEN PEMBERITAHUAN ADANYA RISIKO”</b> mengerti dan menyetujui isinya. </p>

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
							<input type="checkbox" name="agree" value="agree" @if($task->status == 'active')checked @endif /> saya menyatakan bahwa saya telah membaca dan menerima informasi <b>ADANYA RISIKO TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN ALTERNATIF, </b> mengerti dan memahami isinya.
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
    e.preventDefault();
    $.magnificPopup.close();
  });
});
<<<<<<< HEAD

=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
$(".tick").change(function(){
		var index = $( ".tick" ).index( this );
		var index2 = $( ".tick" ).index( this ) + 1;
		$(".tick:eq("+ index +")").attr("disabled", true);
		$(".tick:eq("+ index2 +")").attr("disabled", false);
	});
</script>
<script>
$(document).ready(function() {
    $('#pbk04Form').formValidation({
        framework: 'bootstrap',
        fields: {
<<<<<<< HEAD
			check1: {
=======
            check0: {
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 1'
                    }
                }
            },
			check2: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 2'
                    }
                }
            },
			check3: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 3'
                    }
                }
            },
			check4: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 4'
                    }
                }
            },
			check5: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 5'
                    }
                }
            },
			check6: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 6'
                    }
                }
            },
			check7: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 7'
                    }
                }
            },
			check8: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 8'
                    }
                }
            },
			check9: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 9'
                    }
                }
            },
			check10: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 10'
                    }
                }
            },
			check11: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 11'
                    }
                }
            },
			check12: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 12'
                    }
                }
            },
			check13: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 13'
                    }
                }
            },
			check14: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 14'
                    }
                }
            },
	    	check15: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 15'
                    }
                }
            },
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