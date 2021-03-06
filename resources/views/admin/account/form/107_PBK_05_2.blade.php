<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<a class="popup-modal-dismiss pull-right" href="#">x</a>
			<br><br>
			<div class="pull-left" style="font-size:11px;font-weight:700;">
				<p>Formulir Nomor : 107.PBK.05.2</p>
			</div>
			<div class="pull-right" style="font-size:11px;text-align:right;">
				Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
			</div>
		</div>
		<form class="form-horizontal" method="POST" id="pbk05Form" action="{{ url('admin/account/real-account/form/107-PBK-05-2-check') }}">
		{{ csrf_field() }}
		<div class="modal-body">
			<div class="row row-lg">
				<div class="col-sm-12">
					<div class="example-wrap">
						<!--<p style="font-size=11px;">Nasabah wajib mengisi Surat Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka yang dilakukan setelah Nasabah dinyatakan lulus melakukan simulasi Perdagangan Berjangka oleh Pialang Berjangka sebagaimana yang ada di Formulir Nomor : 107.PBK.02.1</p>-->
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERJANJIAN PEMBERIAN AMANAT SECARA ELETRONIK ON-LINE UNTUK TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN ALTERNATIF</h4>
						<hr>
						<div class="example">
							<div class="height-400 scrollable scrollable-shadow is-enabled scrollable-vertical" data-skin="scrollable-shadow" data-plugin="scrollable" style="position: relative;">
								<div data-role="container" class="scrollable-container" style="height: 400px;">
									<div data-role="content" class="scrollable-content" style="height: 400px;">
													<table class="risk" cellspacing="0">
													<tbody>
													<tr>
														<td colspan="2" class="just">
															<input type="text" name="focus" value="" style="width: 1px;height: 1px;position: relative;top: -16px;float: right;">
															Pada hari ini Senin, tanggal 17, bulan Juli, tahun 2017, bertempat di Kantor Pusat atau Kantor Cabang resmi Pialang Berjangka PT. Askap Futures dengan alamat Senayan City, Panin Tower Lt. 22, Jl. Asia Afrika Lot 19, Jakarta. Kami yang bertandatangan di bawah ini :
															<table cellspacing="0" class="inner">
															<tbody>
															<tr>
																<td>1.</td>
																<td>Nama</td>
																<td>&nbsp;: {{$datas->nama}}</td>
															</tr>
															<tr>
																<td></td>
																<td>Pekerjaan / Jabatan</td>
																<td>&nbsp;: {{$datas->pekerjaan}} / {{$datas->jabatan}}</td>
															</tr>
															<tr>
																<td></td>
																<td>Alamat</td>
																<td>&nbsp;: {{$datas->alamat}}</td>
															</tr>
															<tr>
																<td colspan="3" style="padding:5px 0">
																	dalam hal ini bertindak untuk dan atas nama sendiri yang selanjutnya disebut <b>Nasabah</b>,
																</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Nama</td>
																<td>&nbsp;: PT. Askap Futures</td>
															</tr>
															<tr>
																<td></td>
																<td>Alamat</td>
																<td>
																	&nbsp;: Senayan City, Panin Tower Lt. 22, Jl. Asia Afrika Lot 19, Jakarta
																</td>
															</tr>
															</tbody>
															</table>
															<p>
																dalam hal ini bertindak untuk dan atas nama <b>PT. Askap Futures</b> yang selanjutnya disebut <b>Pialang Berjangka</b>.
															</p>
															<p>
																Nasabah dan Pialang Berjangka secara bersama-sama selanjutnya disebut <b>Para Pihak</b>.
															</p>
															<p>
																Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan ketentuan sebagai berikut :
															</p>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check1"></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold">
																<li>
																	<b>Margin dan Pembayaran Lainnya</b>
																	<ol type="a" class="normal">
																		<li>
																			<b>Nasabah menempatkan sejumlah dana</b> (Margin) ke Rekening Terpisah <i>(Segregated Account)</i> Pialang Berjangka sebagai Margin Awal dan wajib mempertahankannya sebagaimana ditetapkan.
																		</li>
																		<li>
																			Membayar biaya-biaya yang diperlukan untuk transaksi yaitu biaya transaksi, pajak, komisi, dan biaya pelayanan, biaya bunga sesuai tingkat yang berlaku, dan biaya lainnya yang dapat dipertanggungjawabkan berkaitan dengan transaksi sesuai amanat Nasabah, maupun biaya rekening Nasabah.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check2" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="2">
																<li>
																	<b>Pelaksanaan Amanat</b>
																	<ol type="a" class="normal">
																		<li>
																			Setiap transaksi Nasabah dilaksanakan secara elektronik on-line oleh Nasabah yang bersangkutan.
																		</li>
																		<li>
																			Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan transaksi tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.
																		</li>
																		<li>
																			Setiap transaksi Nasabah secara bilateral dilawankan dengan Penyelenggara Sistem Perdagangan Alternatif PT. Sentra Arta Maxima yang bekerjasama dengan Pialang Berjangka.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check3" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="3">
																<li>
																	<b>Kewajiban Memelihara Margin</b>
																	<ol type="a" class="normal">
																		<li>
																			Nasabah wajib memelihara / memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.
																		</li>
																		<li>
																			Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk menambah Margin segera.
																		</li>
																		<li>
																			Apabila jumlah Margin memerlukan tambahan (<i>Call Margin</i>) maka nasabah wajib melakukan penyerahan <i>Call Margin</i> selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan dengan penyerahan <i>Call Margin</i> tidak terbatas pada jumlah Margin Awal.
																		</li>
																		<li>
																			Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru dari Nasabah sebelum <i>Call Margin</i> dipenuhi;
																		</li>
																		<li>
																			Untuk memenuhi kewajiban <i>Call Margin</i> dan keuangan lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check4" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="4">
																<li>
																	<b>Hak Pialang Berjangka Melikuidasi Posisi Nasabah</b><br>
																	<span class="normal">Nasabah bertanggung jawab memantau / mengetahui posisi terbukanya secara terus-menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, atau tindakan lain untuk melindungi dini dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check5" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="5">
																<li>
																	<b>Penggantian Kerugian Tidak Adanya Penutupan Posisi</b><br>
																	<span class="normal">Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi di Bursa. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check6" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="6">
																<li>
																	<b>Pialang Berjangka Dapat Membatasi Posisi</b><br>
																	<span class="normal">Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak Berjangka Nasabah dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check7" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="7">
																<li>
																	<b>Tidak Ada Jaminan atas Informasi atau Rekomendasi</b><br>
																	<span class="normal">Nasabah mengakui bahwa :</span>
																	<ol type="a" class="normal">
																		<li>
																			Informasi dan rekomendasi yang diberikan oleh Pialang Berjangka kepada Nasabah tidak selalu lengkap dan perlu diverifikasi.
																		</li>
																		<li>
																			Pialang Berjangka tidak menjamin bahwa informasi dan rekomendasi yang diberikan merupakan informasi yang akurat dan lengkap.
																		</li>
																		<li>
																			Informasi dan rekomendasi yang diberikan oleh wakil Pialang Berjangka yang satu dengan yang lain mungkin berbeda karena perbedaan analisis fundamental atau teknikal. Nasabah menyadari bahwa ada kemungkinan Pialang Berjangka dan pihak terafiliasinya memiliki posisi di pasar dan memberikan rekomendasi tidak konsisten kepada Nasabah.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check8" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="8">
																<li>
																	<b>Pembatasan Tanggung Jawab Pialang Berjangka.</b>
																	<ol type="a" class="normal">
																		<li>
																			Pialang Berjangka tidak bertanggung jawab untuk memberikan penilaian kepada Nasabah mengenai iklim, pasar, keadaan politik dan ekonomi nasional dan internasional, nilai kontrak berjangka, kolateral, atau memberikan nasihat mengenai keadaan pasar. Pialang Berjangka hanya memberikan pelayanan untuk melakukan transaksi secara jujur serta memberikan laporan atas transaksi tersebut.
																		</li>
																		<li>
																			Perdagangan sewaktu-waktu dapat dihentikan oleh pihak yang memiliki otoritas (Bappebti / Bursa Berjangka) tanpa pemberitahuan terlebih dahulu kepada Nasabah. Atas posisi terbuka yang masih dimiliki oleh Nasabah pada saat perdagangan tersebut dihentikan, maka akan diselesaikan (likuidasi) berdasarkan pada peraturan / ketentuan yang dikeluarkan dan ditetapkan oleh pihak otoritas tersebut, dan semua kerugian serta biaya yang timbul sebagai akibat dihentikannya transaksi oleh pihak otoritas perdagangan tersebut, menjadi beban dan tanggung jawab Nasabah sepenuhnya.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check9" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="9">
																<li>
																	<b>Transaksi Harus Mematuhi Peraturan Yang Berlaku</b><br>
																	<span class="normal">Semua transaksi baik yang dilakukan sendiri oleh Nasabah maupun melalui Pialang Berjangka wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check10" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="10">
																<li>
																	<b>Pialang Berjangka tidak Bertanggung jawab atas Kegagalan Komunikasi</b><br>
																	<span class="normal">Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check11" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="11">
																<li>
																	<b>Konfirmasi</b>
																	<ol type="a" class="normal">
																		<li>
																			Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, secara tertulis ataupun rekaman suara.
																		</li>
																		<li>
																			Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan Call Margin, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat Nasabah sesuai dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima konfirmasi tertulis, Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.
																		</li>
																		<li>
																			Jika dalam waktu 2 x 24 jam sejak tanggal penerimaan konfirmasi tertulis tersebut tidak ada sanggahan dari Nasabah maka konfirmasi Pialang Berjangka dianggap benar dan sah.
																		</li>
																		<li>
																			Kekeliruan atas konfirmasi yang diterbitkan Pialang Berjangka akan diperbaiki oleh Pialang Berjangka sesuai keadaan yang sebenarnya dan demi hukum konfirmasi yang lama batal.
																		</li>
																		<li>
																			Nasabah tidak bertanggung jawab atas transaksi yang dilaksanakan atas rekeningnya apabila konfirmasi tersebut tidak disampaikan secara benar dan akurat.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check12" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="12">
																<li>
																	<b>Kebenaran informasi Nasabah</b><br>
																	<span class="normal">Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check13" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="13">
																<li>
																	<b>Komisi Transaksi</b><br>
																	<span class="normal">Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. Perubahan beban <i>(fees)</i> dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check14" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="14">
																<li>
																	<b>Pemberian Kuasa</b><br>
																	<span class="normal">Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan. </span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check15" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="15">
																<li>
																	<b>Pemindahan Dana</b><br>
																	<span class="normal">Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi, kliring, dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check16" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="16">
																<li>
																	<b>Pemberitahuan</b><br>
																	<ol type="a" class="normal">
																		<li>
																			Semua komunikasi, uang, surat berharga, dan kekayaan lainnya harus dikirimkan langsung ke alamat Nasabah seperti tertera dalam rekeningnya atau alamat lain yang ditetapkan / diberitahukan secara tertulis oleh Nasabah.
																		</li>
																		<li>
																			Semua uang, harus disetor atau ditransfer langsung oleh Nasabah ke Rekening Terpisah <i>(Segregated Account)</i> Pialang Berjangka :
																			<table cellspacing="0" class="inner">
																			<tbody>
																			<tr>
																				<td>Nama</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>PT. Askap Futures</td>
																			</tr>
																			<tr>
																				<td>Alamat</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					 Senayan City, Panin Tower Lt. 22, Jl. Asia Afrika Lot 19, Jakarta
																				</td>
																			</tr>
																			<tr>
																				<td>Bank</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					<b>Bank CIMB Niaga Gajah Mada – Jakarta</b>
																				</td>
																			</tr>
																			<tr>
																				<td>No. Rekening Terpisah</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>001-01-89256-00-2 (IDR)</td>
																			</tr>
																			<tr>
																				<td></td>
																				<td></td>
																				<td>022-02-13036-00-0 (USD)</td>
																			</tr>
																			<tr>
																				<td>Bank</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					<b>Bank Central Asia (BCA) Sudirman - Jakarta</b>
																				</td>
																			</tr>
																			<tr>
																				<td>No. Rekening Terpisah</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>035-311-656-5 (Rupiah)</td>
																			</tr>
																			<tr>
																				<td></td>
																				<td></td>
																				<td>035-313-797-0 (USD)</td>
																			</tr>
																			<tr>
																				<td>Bank</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					<b>Bank Negara Indonesia (BNI) Fatmawati - Jakarta</b>
																				</td>
																			</tr>
																			<tr>
																				<td>No. Rekening Terpisah</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>780-980-9999 (Rupiah)</td>
																			</tr>
																			<tr>
																				<td></td>
																				<td></td>
																				<td>780-980-9988 (USD)</td>
																			</tr>
																			<tr>
																				<td>Bank</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					<b>Bank Mandiri Cabang Imam Bonjol - Jakarta</b>
																				</td>
																			</tr>
																			<tr>
																				<td>No. Rekening Terpisah</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>122-000-666-0594 (Rupiah)</td>
																			</tr>
																			<tr>
																				<td></td>
																				<td></td>
																				<td>122-000-666-0685 (USD)</td>
																			</tr>
																			</tbody>
																			</table>
																			 dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda terima bukti setor atau transfer dari pegawai Pialang Berjangka.
																		</li>
																		<li>
																			Semua surat berharga, kekayaan lainnya, atau komunikasi harus dikirim kepada Pialang Berjangka :
																			<table cellspacing="0" class="inner">
																			<tbody>
																			<tr>
																				<td style="width:123px">Nama</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>PT. Askap Futures</td>
																			</tr>
																			<tr>
																				<td>Alamat</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					 Senayan City, Panin Tower Lt. 22, Jl. Asia Afrika Lot 19, Jakarta
																				</td>
																			</tr>
																			<tr>
																				<td>Telepon</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>021 - 72781710 (Hunting)</td>
																			</tr>
																			<tr>
																				<td>Faksimile</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>021 - 72781721</td>
																			</tr>
																			<tr>
																				<td>E-mail</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>customercare@askapfutures.co.id</td>
																			</tr>
																			</tbody>
																			</table>
																			 dan dianggap sudah diterima oleh Pialang Berjangka apabila sudah ada tanda bukti penerimaan dari pegawai Pialang Berjangka.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check16" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="17">
																<li>
																	<b>Dokumen Pemberitahuan Adanya Resiko</b><br>
																	<span class="normal">Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Resiko.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check17" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="18">
																<li>
																	<b>Jangka Waktu Perjanjian dan Pengakhiran</b>
																	<ol type="a" class="normal">
																		<li>
																			Perjanjian ini mulai berlaku terhitung sejak tanggal ditandatanganinya sampai disampaikannya pemberitahuan pengakhiran secara tertulis oleh Nasabah atau Pialang Berjangka.
																		</li>
																		<li>
																			Nasabah dapat mengakhiri Perjanjian ini hanya jika Nasabah sudah tidak lagi memiliki posisi terbuka dan tidak ada kewajiban Nasabah yang diemban oleh atau terhutang kepada Pialang Berjangka.
																		</li>
																		<li>
																			Pengakhiran tidak membebaskan salah satu Pihak dari tanggung jawab atau kewajiban yang terjadi sebelum pemberitahuan tersebut.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check18" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="19">
																<li>
																	<b>Berakhirnya Perjanjian</b><br>
																	<span class="normal">Perjanjian dapat berakhir dalam hal Nasabah :</span>
																	<ol type="a" class="normal">
																		<li>
																			dinyatakan pailit, memiliki hutang yang sangat besar, dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;
																		</li>
																		<li>
																			tidak dapat memenuhi atau mematuhi perjanjian ini dan / atau melakukan pelanggaran terhadapnya;
																		</li>
																		<li>
																			berkaitan dengan angka (1) dan (2) tersebut diatas, Pialang Berjangka dapat :
																			<ol type="i" class="normal">
																				<li>
																					meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur ; dan
																				</li>
																				<li>menolak perintah dari Nasabah atau kuasanya.</li>
																			</ol>
																		</li>
																		<li>
																			Pengakhiran Perjanjian sebagaimana dimaksud dengan poin a dan b tersebut diatas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check19" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="20">
																<li>
																	<b>Force Majeur</b><br>
																	<span class="normal">Tidak ada satupun pihak di dalam perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (<i>force majeur</i>), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan <i>force majeur</i> dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check20" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="21">
																<li>
																	<b>Perubahan Atas lsian dalam Perjanjian Pemberian Amanat</b><br>
																	<span class="normal">Perubahan atas isian dalam Perjanjian pemberian ini hanya dapat dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check21" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="22">
																<li>
																	<b>Penyelesaian Perselisihan</b>
																	<ol type="a" class="normal">
																		<li>
																			Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan perjanjian ini wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.
																		</li>
																		<li>
																			Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.
																		</li>
																		<li>
																			Apabila Perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui :
																			<div id="selisih">
																				<!--
					<input id="musyawarah" type="radio" name="selisih" checked="1" value="0"/><label for="musyawarah"> Secara musyawarah untuk mencapai mufakat antara Para Pihak ;</label><br/>
					<input id="jfx" type="radio" name="selisih" value="2"/><label for="jfx"> Memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka (JFX) ;</label><br/>
					-->
																				<input id="bakti" type="radio" name="selisih" checked="1" value="0"><label for="bakti"> Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur BAKTI ;</label><br>
																				<input id="pn" type="radio" name="selisih" value="1"><label for="pn">Pengadilan Negeri</label>
																				<input type="text" value="" maxlength="30" name="pengadilan" style="width: 450px; height: 18px; box-shadow: rgba(255, 0, 0, 0.2) 0px 0px 5px inset, rgba(255, 0, 0, 0.3) 0px 0px 10px inset; display: none;"></div>
																		</li>
																		<li>
																			Kantor atau kantor cabang Pialang Berjangka terdekat dengan domisili Nasabah tempat penyelesaian dalam hal terjadi perselisihan.<br>
																			<b>Daftar Kantor (Pilih salah satu) :</b><br>
																			<input id="pusat" type="radio" name="kantor" value="0" checked="checked"><label for="pusat"> Pusat : Senayan City, Panin Tower Lt. 22 Jl. Asia Afrika Lot 19 Jakarta</label><br>
																			<!--<input id="cabang1" type="radio" name="kantor" value="1"/><label for="cabang1"> Cabang : Gedung Graha HSBC Jl. Basuki Rachmat No. 58-60 Surabaya</label><br/>-->
																			<input id="cabang2" type="radio" name="kantor" value="2"><label for="cabang2"> Cabang : Jl. Budi Karya Komplek Villa Gamma Blok D/27 Pontianak</label><br>
																			<input id="cabang3" type="radio" name="kantor" value="3"><label for="cabang3"> Cabang : Menara Imperium Lt. 17 Jl. HR. Rasuna Said Kav.1 Kuningan-Jakarta 12980</label>
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check22" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop">
															<ol class="bold" start="23">
																<li>
																	<b>Bahasa</b><br>
																	<span class="normal">Perjanjian ini dibuat dalam Bahasa Indonesia.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check23" disabled></td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:center">
															<span class="normal">Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. </span>
															<br>
															<br>
															<b>“ Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini ”.</b>
														</td>
													</tr>
													<tr>
														<td class="right">
															<div style="color:black;padding-right:5px;" class="pull-right">Saya sudah membaca dan memahami <span style="color:red;font-size:11px">*)</span></div></td>
														</td>
														<td>
															<input type="checkbox" class="tick" name="check24" disabled></td>
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
				<div class="form-group form-material" style="text-align:center;">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="agree" value="agree" @if($task->status == 'active')checked @endif /> saya menyatakan bahwa saya telah menerima, <b>“PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN ALTERNATIF”, </b> mengerti dan menyetujui isinya.
						</label>
					</div>
				</div>
				<div class="form-group form-material" style="text-align:center;">	
					Menyatakan pada Tanggal <span id="date"></span>
				</div>
				<div class="form-group form-material" style="text-align:center;">	
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Submit </button>
					</div>
				</div>
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

$(".tick").change(function(){
		var index = $( ".tick" ).index( this );
		var index2 = $( ".tick" ).index( this ) + 1;
		$(".tick:eq("+ index +")").attr("disabled", true);
		$(".tick:eq("+ index2 +")").attr("disabled", false);
	});
</script>
<script>
$(document).ready(function() {
    $('#pbk05Form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			check1: {
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
			check16: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 16' 
                    }
                }
            },
			check17: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 17'
                    }
                }
            },
			check18: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 18'
                    }
                }
            },
			check19: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 19'
                    }
                }
            },
			check20: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 20'
                    }
                }
            },
			check21: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 21'
                    }
                }
            },
			check22: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 22'
                    }
                }
            },
			check23: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 23'
                    }
                }
            },
			check24: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan 24'
                    }
                }
            },
			agree: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus menyetujui pernyataan pada form ini'
                    }
                }
            }
        }
    });
});
</script>