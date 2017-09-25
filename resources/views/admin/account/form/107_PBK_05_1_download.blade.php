<div class="lightbox-block" id="custom-content">
	<div>
		<div class="modal-header">
			<div class="pull-left" style="font-size:11px;font-weight:700;">
				<p>Formulir Nomor : 107.PBK.05.2</p>
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
						<h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">PERJANJIAN PEMBERIAN AMANAT SECARA ELETRONIK ON-LINE UNTUK TRANSAKSI KONTRAK BERJANGKA</h4>
						<hr>
						<div class="example">
													<table class="risk" cellspacing="0">
													<tbody>
													<tr>
														<td colspan="2" class="just">
															<input type="text" name="focus" value="" style="width: 1px;height: 1px;position: relative;top: -16px;float: right;">
															Pada hari ini <span id="hari"></span>, tanggal <span id="tanggal"></span> bulan <span id="bulan"></span> tahun <span id="tahun"></span>, kami yang mengisi perjanjian dibawah ini:
															<table cellspacing="0" class="inner">
															<tbody>
															<tr>
																<td>1.</td>
																<td>Nama</td>
																<td>&nbsp;: {{$data->nama}}</td>
															</tr>
															<tr>
																<td></td>
																<td>Pekerjaan / Jabatan</td>
																<td>&nbsp;: {{$data->pekerjaan}} / {{$data->jabatan}}</td>
															</tr>
															<tr>
																<td></td>
																<td>Alamat</td>
																<td>&nbsp;: {{$data->alamat}}</td>
															</tr>
															<tr>
																<td colspan="3" style="padding:5px 0">
																	dalam hal ini bertindak untuk dan atas nama sendiri yang selanjutnya disebut <span style="font-weight:700;">Nasabah</span>,
																</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Nama</td>
																<td>&nbsp;: @if(!empty($data->wp)){{$data->wp}}@else ..........(diisi oleh Pialang Berjangka) @endif</td>
															</tr>
															<tr>
																<td></td>
																<td>Pekerjaan / Jabatan</td>
																<td>&nbsp;: Wakil Pialang</td>
															</tr>
															<tr>
																<td></td>
																<td>Alamat</td>
																<td>
																	&nbsp;: {{config('settings.company_address')}}
																</td>
															</tr>
															</tbody>
															</table>
															<p>
																dalam hal ini bertindak untuk dan atas nama <span style="font-weight:700;">{{config('settings.company_name')}}</span> yang selanjutnya disebut <span style="font-weight:700;">Pialang Berjangka</span>.
															</p>
															<p>
																Nasabah dan Pialang Berjangka secara bersama-sama selanjutnya disebut <span style="font-weight:700;">Para Pihak</span>.
															</p>
															<p>
																Para Pihak sepakat untuk mengadakan Perjanjian Pemberian Amanat untuk melakukan transaksi penjualan maupun pembelian Kontrak Berjangka dengan ketentuan sebagai berikut:
															</p>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" style="font-weight:700;">
																<li>
																	Margin dan Pembayaran Lainnya
																	<ol type="1" class="custom-counter" style="font-weight:500;">
																		<li>
																			<span style="font-weight:700;">Nasabah menempatkan sejumlah dana</span> (Margin) ke Rekening Terpisah <i>(Segregated Account)</i> Pialang Berjangka sebagai Margin Awal dan wajib mempertahankannya sebagaimana ditetapkan.
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="2" style="font-weight:700;">
																<li>
																	Pelaksanaan Amanat
																	<ol type="1" class="custom-counter" style="font-weight:500;">
																		<li>
																			Setiap amanat yang disampaikan oleh Nasabah atau kuasanya yang ditunjuk secara tertulis oleh Nasabah, dianggap sah apabila diterima oleh Pialang Berjangka sesuai dengan ketentuan yang berlaku, dapat berupa amanat tertulis yang ditandatangani oleh Nasabah atau kuasanya, amanat telepon yang direkam, dan/atau amanat transaksi elektronik lainnya.																		</li>
																		<li>
																			Setiap amanat Nasabah yang diterima dapat langsung dilaksanakan sepanjang nilai Margin yang tersedia pada rekeningnya mencukupi dan eksekusinya tergantung pada kondisi dan sistem transaksi yang berlaku yang mungkin dapat menimbulkan perbedaan waktu terhadap proses pelaksanaan amanat tersebut. Nasabah harus mengetahui posisi Margin dan posisi terbuka sebelum memberikan amanat untuk transaksi berikutnya.																		</li>
																		<li>
																			Amanat Nasabah hanya dapat dibatalkan dan/atau diperbaiki apabila transaksi atas amanat tersebut belum terjadi. Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tidak terlaksananya pembatalan dan/atau perbaikan sepanjang bukan karena kelalaian Pialang Berjangka																		</li>
																		<li>
																			Pialang Berjangka berhak menolak amanat Nasabah apabila harga yang ditawarkan atau diminta tidak wajar.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="3" style="font-weight:700;">
																<li>
																	Antisipasi penyerahan barang
																	<ol type="1" class="custom-counter" style="font-weight:500;">
																		<li>
																			Untuk kontrak-kontrak tertentu penyelesaian transaksi dapat dilakukan dengan penyerahan atau penerimaan barang <i>(delivery)</i> apabila kontrak jatuh tempo. Nasabah menyadari bahwa penyerahan atau penerimaan barang mengandung risiko yang lebih besar daripada melikuidasi posisi dengan <i>offset</i>. Penyerahan fisik barang memiliki konsekuensi kebutuhan dana yang lebih besar serta tambahan biaya pengelolaan barang.																		</li>
																		<li>
																			Pialang Berjangka tidak bertanggung jawab atas klasifikasi mutu <i>(grade)</i>, kualitas atau tingkat toleransi atas komoditi yang diserahkan atau  akan diserahkan.																		</li>
																		<li>
																			Pelaksanaan penyerahan atau penerimaan barang tersebut akan diatur dan dijamin oleh Lembaga Kliring Berjangka.																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="4" style="font-weight:700;">
																<li>
																	Kewajiban Memelihara Margin
																	<ol type="1" class="custom-counter" style="font-weight:500;">
																		<li>
																			Nasabah wajib memelihara / memenuhi tingkat Margin yang harus tersedia di rekening pada Pialang Berjangka sesuai dengan jumlah yang telah ditetapkan baik diminta ataupun tidak oleh Pialang Berjangka.
																		</li>
																		<li>
																			Apabila jumlah Margin memerlukan penambahan maka Pialang Berjangka wajib memberitahukan dan memintakan kepada Nasabah untuk menambah Margin segera.
																		</li>
																		<li>
																			Apabila jumlah Margin memerlukan tambahan (<i><i>Call Margin</i></i>) maka nasabah wajib melakukan penyerahan <i><i>Call Margin</i></i> selambat-lambatnya sebelum dimulai hari perdagangan berikutnya. Kewajiban Nasabah sehubungan dengan penyerahan <i><i>Call Margin</i></i> tidak terbatas pada jumlah Margin Awal.
																		</li>
																		<li>
																			Pialang Berjangka tidak berkewajiban melaksanakan amanat untuk melakukan transaksi yang baru dari Nasabah sebelum <i><i>Call Margin</i></i> dipenuhi;
																		</li>
																		<li>
																			Untuk memenuhi kewajiban <i><i>Call Margin</i></i> dan keuangan lainnya dari Nasabah, Pialang Berjangka dapat mencairkan dana Nasabah yang ada di Pialang Berjangka.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="5" style="font-weight:700;">
																<li>
																	Hak Pialang Berjangka Melikuidasi Posisi Nasabah<br>
																	<span class="normal" style="font-weight:500;">Nasabah bertanggung jawab memantau / mengetahui posisi terbukanya secara terus-menerus dan memenuhi kewajibannya. Apabila dalam jangka waktu tertentu dana pada rekening Nasabah kurang dari yang dipersyaratkan, Pialang Berjangka dapat menutup posisi terbuka Nasabah secara keseluruhan atau sebagian, membatasi transaksi, atau tindakan lain untuk melindungi dini dalam pemenuhan Margin tersebut dengan terlebih dahulu memberitahu atau tanpa memberitahu Nasabah dan Pialang Berjangka tidak bertanggung jawab atas kerugian yang timbul akibat tindakan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="6" style="font-weight:700;">
																<li>
																	Penggantian Kerugian Tidak Menyerahkan Barang<br>
																	<span class="normal" style="font-weight:500;">Apabila Nasabah tidak mampu menyerahkan komoditi atas Kontrak Berjangka yang jatuh tempo, Nasabah memberikan kuasa kepada Pialang 	Berjangka untuk meminjam atau membeli komoditi untuk penyerahan tersebut. Nasabah wajib membayar secepatnya semua biaya, kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka atas tindakan tersebut. Apabila Pialang Berjangka harus menerima penyerahan komoditi atau surat berharga maka Nasabah bertanggung jawab atas penurunan nilai dari komoditi atas surat berharga tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="7" style="font-weight:700;">
																<li>
																	Penggantian Kerugian Tidak Adanya Penutupan Posisi<br>
																	<span class="normal" style="font-weight:500;">Apabila Nasabah tidak mampu melakukan penutupan atas transaksi yang jatuh tempo, Pialang Berjangka dapat melakukan penutupan atas transaksi di Bursa. Nasabah wajib membayar biaya-biaya, termasuk biaya kerugian dan premi yang telah dibayarkan oleh Pialang Berjangka, dan apabila Nasabah lalai untuk membayar biaya-biaya tersebut, Pialang Berjangka berhak untuk mengambil pembayaran dari dana Nasabah.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="8" style="font-weight:700;">
																<li>
																	Pialang Berjangka Dapat Membatasi Posisi<br>
																	<span class="normal" style="font-weight:500;">Nasabah mengakui hak Pialang Berjangka untuk membatasi posisi terbuka Kontrak Berjangka Nasabah dan Nasabah tidak melakukan transaksi melebihi batas yang telah ditetapkan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="9" style="font-weight:700;">
																<li>
																	Tidak Ada Jaminan atas Informasi atau Rekomendasi<br>
																	<span class="normal" style="font-weight:500;">Nasabah mengakui bahwa :</span>
																	<ol type="1" class="custom-counter" style="font-weight:500;">
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="10" style="font-weight:700;">
																<li>
																	Pembatasan Tanggung Jawab Pialang Berjangka.
																	<ol type="1" class="custom-counter" style="font-weight:500;">
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="11" style="font-weight:700;">
																<li>
																	Transaksi Harus Mematuhi Peraturan Yang Berlaku<br>
																	<span class="normal" style="font-weight:500;">Semua transaksi baik yang dilakukan sendiri oleh Nasabah maupun melalui Pialang Berjangka wajib mematuhi peraturan perundang-undangan di bidang Perdagangan Berjangka, kebiasaan dan interpretasi resmi yang ditetapkan oleh Bappebti atau Bursa Berjangka.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="12" style="font-weight:700;">
																<li>
																	Pialang Berjangka tidak Bertanggung jawab atas Kegagalan Komunikasi<br>
																	<span class="normal" style="font-weight:500;">Pialang Berjangka tidak bertanggung jawab atas keterlambatan atau tidak tepat waktunya pengiriman amanat atau informasi lainnya yang disebabkan oleh kerusakan fasilitas komunikasi atau sebab lain diluar kontrol Pialang Berjangka.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="13" style="font-weight:700;">
																<li>
																	Konfirmasi
																	<ol type="1" class="custom-counter" style="font-weight:500;">
																		<li>
																			Konfirmasi dari Nasabah dapat berupa surat, telex, media lain, secara tertulis ataupun rekaman suara.
																		</li>
																		<li>
																			Pialang Berjangka berkewajiban menyampaikan konfirmasi transaksi, laporan rekening, permintaan <i>Call Margin</i>, dan pemberitahuan lainnya kepada Nasabah secara akurat, benar dan secepatnya pada alamat Nasabah sesuai dengan yang tertera dalam rekening Nasabah. Apabila dalam jangka waktu 2 x 24 jam setelah amanat jual atau beli disampaikan, tetapi Nasabah belum menerima konfirmasi tertulis, Nasabah segera memberitahukan hal tersebut kepada Pialang Berjangka melalui telepon dan disusul dengan pemberitahuan tertulis.
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="14" style="font-weight:700;">
																<li>
																	Kebenaran informasi Nasabah<br>
																	<span class="normal" style="font-weight:500;">Nasabah memberikan informasi yang benar dan akurat mengenai data Nasabah yang diminta oleh Pialang Berjangka dan akan memberitahukan paling lambat dalam waktu 3 (tiga) hari kerja setelah terjadi perubahan, termasuk perubahan kemampuan keuangannya untuk terus melaksanakan transaksi.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="15" style="font-weight:700;">
																<li>
																	Komisi Transaksi<br>
																	<span class="normal" style="font-weight:500;">Nasabah mengetahui dan menyetujui bahwa Pialang Berjangka berhak untuk memungut komisi atas transaksi yang telah dilaksanakan, dalam jumlah sebagaimana akan ditetapkan dari waktu ke waktu oleh Pialang Berjangka. Perubahan beban <i>(fees)</i> dan biaya lainnya harus disetujui secara tertulis oleh Para Pihak.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="16" style="font-weight:700;">
																<li>
																	Pemberian Kuasa<br>
																	<span class="normal" style="font-weight:500;">
																			Nasabah memberikan kuasa kepada Pialang Berjangka untuk menghubungi bank, lembaga keuangan, Pialang Berjangka lain, atau institusi lain yang terkait untuk memperoleh keterangan atau verifikasi mengenai informasi yang diterima dari Nasabah. Nasabah mengerti bahwa penelitian mengenai data hutang pribadi dan bisnis dapat dilakukan oleh Pialang Berjangka apabila diperlukan. Nasabah diberikan kesempatan untuk memberitahukan secara tertulis dalam jangka waktu yang telah disepakati untuk melengkapi persyaratan yang diperlukan.																		
																	</span>

																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="17" style="font-weight:700;">
																<li>
																	Pemindahan Dana<br>
																	<span class="normal" style="font-weight:500;">Pialang Berjangka dapat setiap saat mengalihkan dana dari satu rekening ke rekening lainnya berkaitan dengan kegiatan transaksi yang dilakukan Nasabah seperti pembayaran komisi, pembayaran biaya transaksi, kliring, dan keterlambatan dalam memenuhi kewajibannya, tanpa terlebih dahulu memberitahukan kepada Nasabah. Transfer yang telah dilakukan akan segera diberitahukan secara tertulis kepada Nasabah.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="18" style="font-weight:700;">
																<li>
																	Pemberitahuan<br>
																	<ol type="1" class="custom-counter" style="font-weight:500;">
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
																				<td>{{config('settings.company_name')}}</td>
																			</tr>
																			<tr>
																				<td>Alamat</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					 {{config('settings.company_address')}}																				</td>
																			</tr>
																			<tr>
																				<td>Bank</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					<b>Bank Central Asia (BCA)</b>
																				</td>
																			</tr>
																			<tr>
																				<td>No. Rekening Terpisah</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>035 312 7800 (Rupiah)</td>
																			</tr>
																			<tr>
																				<td></td>
																				<td></td>
																				<td>035 312 7117 (USD)</td>
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
																				<td>{{config('settings.company_name')}}</td>
																			</tr>
																			<tr>
																				<td>Alamat</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>
																					 {{config('settings.company_address')}}																				</td>
																			</tr>
																			<tr>
																				<td>Telepon</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>021 - 57906525 (Hunting)</td>
																			</tr>
																			<tr>
																				<td>Faksimile</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>021 - 57906526</td>
																			</tr>
																			<tr>
																				<td>E-mail</td>
																				<td>&nbsp;:&nbsp;</td>
																				<td>futures@phillip.co.id</td>
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="19" style="font-weight:700">
																<li>
																	Dokumen Pemberitahuan Adanya Resiko<br>
																	<span class="normal" style="font-weight:500">Nasabah mengakui menerima dan mengerti Dokumen Pemberitahuan Adanya Resiko.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="20" style="font-weight:700">
																<li>
																	Jangka Waktu Perjanjian dan Pengakhiran
																	<ol type="1" class="custom-counter" style="font-weight:500">
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
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="21" style="font-weight:700">
																<li>
																	Berakhirnya Perjanjian<br>
																	<span class="normal" style="font-weight:500">Perjanjian dapat berakhir dalam hal Nasabah :</span>
																	<ol type="1" class="custom-counter" style="font-weight:500">
																		<li>
																			dinyatakan pailit, memiliki hutang yang sangat besar, dalam proses peradilan, menjadi hilang ingatan, mengundurkan diri atau meninggal;
																		</li>
																		<li>
																			tidak dapat memenuhi atau mematuhi perjanjian ini dan / atau melakukan pelanggaran terhadapnya;
																		</li>
																		<li>
																			berkaitan dengan angka (1) dan (2) tersebut diatas, Pialang Berjangka dapat :<br>
																				<span>i.)   meneruskan atau menutup posisi Nasabah tersebut setelah mempertimbangkannya secara cermat dan jujur ; dan</span>
																				<br>
																				<span>ii.)  menolak perintah dari Nasabah atau kuasanya.</span>
																		</li>
																		<li>
																			Pengakhiran Perjanjian sebagaimana dimaksud dengan angka (1) dan (2) tersebut diatas tidak melepaskan kewajiban dari Para Pihak yang berhubungan dengan penerimaan atau kewajiban pembayaran atau pertanggungjawaban kewajiban lainnya yang timbul dari Perjanjian.
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="22" style="font-weight:700">
																<li>
																	Force Majeur<br>
																	<span class="normal" style="font-weight:500">Tidak ada satupun pihak di dalam Perjanjian dapat diminta pertanggungjawabannya untuk suatu keterlambatan atau terhalangnya memenuhi kewajiban berdasarkan Perjanjian yang diakibatkan oleh suatu sebab yang berada di luar kemampuannya atau kekuasaannya (<i>Force Majeur</i>), sepanjang pemberitahuan tertulis mengenai sebab itu disampaikannya kepada pihak lain dalam Perjanjian dalam waktu tidak lebih dari 24 (dua puluh empat) jam sejak timbulnya sebab itu. Yang dimaksud dengan <i>force majeur</i> dalam Perjanjian adalah peristiwa kebakaran, bencana alam (seperti gempa bumi, banjir, angin topan, petir), pemogokan umum, huru hara, peperangan, perubahan terhadap peraturan perundang-undangan yang berlaku di bidang ekonomi, keuangan dan Perdagangan Berjangka, pembatasan yang dilakukan oleh otoritas Perdagangan Berjangka dan Bursa Berjangka serta terganggunya sistem perdagangan, kliring dan penyelesaian transaksi Kontrak Berjangka di mana transaksi dilaksanakan yang secara langsung mempengaruhi pelaksanaan pekerjaan berdasarkan Perjanjian.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="23" style="font-weight:700">
																<li>
																	Perubahan Atas lsian dalam Perjanjian Pemberian Amanat<br>
																	<span class="normal" style="font-weight:500">Perubahan atas isian dalam Perjanjian ini hanya dapat dilakukan atas persetujuan Para Pihak, atau Pialang Berjangka telah memberitahukan secara tertulis perubahan yang diinginkan, dan Nasabah tetap memberikan perintah untuk transaksi dengan tanpa memberikan tanggapan secara tertulis atas usul perubahan tersebut. Tindakan Nasabah tersebut dianggap setuju atas usul perubahan tersebut.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="24" style="font-weight:700">
																<li>
																	Penyelesaian Perselisihan
																	<ol type="1" class="custom-counter" style="font-weight:500">
																		<li>
																			Semua perselisihan dan perbedaan pendapat yang timbul dalam pelaksanaan perjanjian ini wajib diselesaikan terlebih dahulu secara musyawarah untuk mencapai mufakat antara Para Pihak.
																		</li>
																		<li>
																			Apabila perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan secara musyawarah untuk mencapai mufakat, Para Pihak wajib memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka.
																		</li>
																		<li>
																			Apabila Perselisihan dan perbedaan pendapat yang timbul tidak dapat diselesaikan melalui cara sebagaimana dimaksud pada angka (1) dan angka (2), maka Para Pihak sepakat untuk menyelesaikan perselisihan melalui *):
																			<span>@if($data->selisih == "Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur BAKTI") <img src="img/admin/ya.jpg" style="height:10;width:10;"> @else <img src="img/admin/tidak.jpg" style="height:10;width:10;"> @endif Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur BAKTI ;</span><br>
																				<span>@if($data->selisih == "Pengadilan Negeri Jakarta Pusat") <img src="img/admin/ya.jpg" style="height:10;width:10;"> @else <img src="img/admin/tidak.jpg" style="height:10;width:10;"> @endif Pengadilan Negeri Jakarta Pusat</span>
																		</li>
																	</ol>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:justify;">
															<ol class="bold" start="25" style="font-weight:700;">
																<li>
																	Bahasa<br>
																	<span class="normal" style="font-weight:500;">Perjanjian ini dibuat dalam Bahasa Indonesia.</span>
																</li>
															</ol>
														</td>
													</tr>
													<tr>
														<td>
														</td>
														<td style="text-align:right;">
															<div style="color:black;padding-right:5px;">Saya sudah membaca dan memahami <img src="img/admin/ya.jpg" style="height:11;width:11;"></div></td>
														</td>
													</tr>
													<tr>
														<td colspan="2" class="just notop" style="text-align:center">
															<span class="normal">Demikian Perjanjian Pemberian Amanat ini dibuat oleh Para Pihak dalam keadaan sadar, sehat jasmani rohani dan tanpa unsur paksaan dari pihak manapun. </span>
															<br>
															<br>
															<span style="font-weight:700;">“ Saya telah membaca, mengerti dan setuju terhadap semua ketentuan yang tercantum dalam perjanjian ini ”.</span>
														</td>
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
			
			<div class="text-center" style="text-align:center;">PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</div>
			<div class="form-group form-material" style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, Saya menyatakan bahwa saya telah menerima, <b>“PERJANJIAN PEMBERIAN AMANAT TRANSAKSI KONTRAK BERJANGKA”, </b> mengerti dan menyetujui isinya.
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
