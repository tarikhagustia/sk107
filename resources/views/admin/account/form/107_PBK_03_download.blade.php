
<!-- Page -->
<div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
	<div class="page-content container-fluid">
		<div class="row">
      <div class="col-sm-12">
        <div class="panel">
		  
          <div class="panel-body">
              <div class="row">
<<<<<<< HEAD
=======
                <div class="pull-left" style="font-size:11px;font-weight:700;">
					<p>Formulir Nomor : 107.PBK.02.2</p>
				</div>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
				<div class="pull-right" style="font-size:11px;text-align:right;">
					Lampiran Peraturan Kepala Badan Pengawas<br>Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013
				</div>
              </div>
<<<<<<< HEAD
			  <h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE</h4>
              <hr/>
=======
			  <h4 class="example-title" style="font-weight:700;text-align:center;font-size:14px;">SURAT PERNYATAAN TELAH BERPENGALAMAN MELAKSANAKAN TRANSAKSI PERDAGANGAN BERJANGKA KOMODITI</h4>
              <hr/>
				<p style="text-align:center;">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</p>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
				<br>
              <div class="row">
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Tanggal Order</td>
							<td>: {{$data->created_at->formatLocalized('%d %B %Y')}}</td>
						</tr>
=======
							<td>No. Order</td>
							<td>: {{$data->order_number}}</td>
						</tr>
						<tr>
							<td>Tanggal Order</td>
							<td>: {{$data->created_at->formatLocalized('%d %B %Y')}}</td>
						</tr>
						<tr>
							<td><b>Account *)</b></td>
							<td>: {{$data->account_type}}/{{$data->account_nominal}}</td>
						</tr>
						<tr>
							<td><b>Platform *)</b></td>
							<td>: MT4</td>
						</tr>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
					</tbody>
				</table>
              </div>
			  <br>
              <div class="row">
				<b>DATA PRIBADI</b>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Nama Lengkap </td>
							<td>: {{$data->nama}}</td>
						</tr>
						<tr>
							<td>Tempat/Tanggal Lahir </td>
							<td>: {{$data->tempat_lahir}},{{$data->dob}}</td>
						</tr>
						<tr>
							<td>No. Identitas ({{$data->tipe_id}}) </td>
=======
							<td>Nama Lengkap *)</td>
							<td>: {{$data->nama}}</td>
						</tr>
						<tr>
							<td>Tempat/Tanggal Lahir *)</td>
							<td>: {{$data->tempat_lahir}},{{$data->dob}}</td>
						</tr>
						<tr>
							<td>No. Identitas ({{$data->tipe_id}}) *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>: {{$data->no_id}}</td>
						</tr>
						<tr>
							<td>NPWP</td>
							<td>: {{$data->npwp}}</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>: {{$data->jenis_kelamin}}</td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td>Nama Ibu Kandung </td>
							<td>: {{$data->nama_ibu}}</td>
						</tr>
						<tr>
							<td>Status Pernikahan</td>
							<td>: @if($data->status_perkawinan == 'kawin') Menikah @elseif($data->status_perkawinan == 'tidak kawin') Tidak Menikah @else {{$data->status_perkawinan}} @endif</td>
						</tr>
						<tr>
							<td>Nama Suami/Istri</td>
							<td>: {{$data->pasangan}}</td>
						</tr>
						<tr>
							<td>Alamat Rumah</td>
							<td>: {{$data->alamat}}</td>
						</tr>
						<tr>
							<td>Kode pos</td>
							<td>: {{$data->kode_pos}}</td>
						</tr>
						<tr>
=======
							<td>Nama Ibu Kandung *)</td>
							<td>: {{$data->nama_ibu}}</td>
						</tr>
						<tr>
							<td>Status Perkawinan</td>
							<td>: {{$data->status_perkawinan}}</td>
						</tr>
						<tr>
							<td>Alamat Rumah *)</td>
							<td>: {{$data->alamat}}</td>
						</tr>
						<tr>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>No. Telp Rumah</td>
							<td>: {{$data->telp_rumah}}</td>
						</tr>
						<tr>
							<td>No. Telp Handphone</td>
							<td>: {{$data->phone_number}}</td>
						</tr>
						<tr>
							<td>Status Kepemilikan Rumah</td>
							<td>: {{$data->status_rumah}}</td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td>Tujuan Pembukaan Rekening</td>
							<td>: {{$data->tujuan}}</td>
						</tr>
						<tr>
							<td>Pengalaman Investasi</td>
=======
							<td>Tujuan Pembukaan Rekening *)</td>
							<td>: {{$data->tujuan}}</td>
						</tr>
						<tr>
							<td>Pengalaman Investasi *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>: {{$data->pengalaman}}</td>
						</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI / Bursa Berjangka / Kliring Berjangka ?</td>
=======
							<td>Apakah Anda memiliki anggota keluarga yang bekerja di BAPPEBTI / Bursa Berjangka / Kliring Berjangka ? *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						</tr>
						<tr>
							<td>: {{$data->keluarga_kbi}}</td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td>Apakah Anda telah dinyatakan pailit oleh Pengadilan ?</td>
=======
							<td>Apakah Anda telah dinyatakan pailit oleh Pengadilan ? *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						</tr>
						<tr>
							<td>: {{$data->pailit}}</td>
						</tr>
					</tbody>
				</table>
              </div>
			  <br>
              <div class="row">
				<b>PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT</b>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Nama </td>
							<td>: {{$data->nama_darurat}}</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td>: {{$data->alamat_darurat}}</td>
						</tr>
						<tr>
							<td>Kode pos </td>
							<td>: {{$data->kode_pos_darurat}}</td>
						</tr>
						<tr>
							<td>No. Telp </td>
							<td>: {{$data->telp_darurat}}</td>
						</tr>
						<tr>
							<td>Hubungan dengan anda </td>
=======
							<td>Nama *)</td>
							<td>: {{$data->nama_darurat}}</td>
						</tr>
						<tr>
							<td>Alamat *)</td>
							<td>: {{$data->alamat_darurat}}</td>
						</tr>
						<tr>
							<td>No. Telp *)</td>
							<td>: {{$data->telp_darurat}}</td>
						</tr>
						<tr>
							<td>Hubungan dengan anda *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>: {{$data->hubungan}}</td>
						</tr>
					</tbody>
				</table>
              </div>
			  <br>
			  <div class="row">
				<b>PEKERJAAN</b>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Pekerjaan Profesional </td>
=======
							<td>Pekerjaan Profesional *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>: {{$data->pekerjaan}}</td>
						</tr>
						<tr>
							<td>Nama Perusahaan</td>
							<td>: {{$data->nama_perusahaan}}</td>
						</tr>
						<tr>
							<td>Bidang Usaha</td>
							<td>: {{$data->bidang_usaha}}</td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>: {{$data->jabatan}}</td>
						</tr>
						<tr>
							<td>Lama Bekerja</td>
							<td>: {{$data->lama_bekerja}} tahun</td>
							<td>Kantor Sebelumnya</td>
							<td>: {{$data->kantor_sebelum}} tahun</td>
						</tr>
						<tr>
							<td>Alamat Kantor</td>
							<td>: {{$data->alamat_kantor}}</td>
							<td>Kode Pos</td>
							<td>: {{$data->kode_pos_kantor}}</td>
						</tr>
						<tr>
							<td>No. Telp Kantor</td>
							<td>: {{$data->telp_kantor}}</td>
						</tr>
					</tbody>
				</table>
              </div>
<<<<<<< HEAD
              <br>
			  <div class="row">
=======
              
			  <!--<div class="row">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
				<b>DAFTAR KEKAYAAN</b>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Penghasilan Per Tahun </td>
							<td>: {{$data->penghasilan}}</td>
						</tr>
						<tr>
							<td>Lokasi Rumah</td>
							<td>: {{$data->lokasi_rumah}}</td>
						</tr>
						<tr>
							<td>Nilai NJOP</td>
							<td>: {{$data->njop}}</td>
						</tr>
						<tr>
							<td>Deposit Bank</td>
							<td>: {{$data->deposito_bank}} - {{$data->deposito}}</td>
						</tr>
						<tr>
							<td>Lainnya</td>
							<td>: {{$data->daftar_kekayaan}}</td>
						</tr>
					</tbody>
				</table>
			  </div>
=======
							<td>Penghasilan Per Tahun *)</td>
							<td>: {{$data->nama}}</td>
						</tr>
						<tr>
							<td>Daftar Kekayaan</td>
							<td>: {{$data->tempat_lahir}},{{$data->dob}}</td>
						</tr>
						<tr>
							<td>Rumah Lokasi</td>
							<td>: {{$data->alamat}}</td>
						</tr>
						<tr>
							<td>Nilai NJOP</td>
							<td>: {{$data->no_id}}</td>
						</tr>
						<tr>
							<td>Deposit Bank</td>
							<td>: {{$data->no_id}}</td>
						</tr>
						<tr>
							<td>Lainnya</td>
							<td>: {{$data->no_id}}</td>
						</tr>
					</tbody>
				</table>
			  </div>-->
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
			  <br>
			  <div class="row">
			    <b>REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN</b>
				<table>
					<tbody>
						<tr>
<<<<<<< HEAD
							<td>Nama Bank </td>
							<td>: {{$data->nama_bank}}</td>
						</tr>
						<tr>
							<td>Cabang </td>
							<td>: {{$data->cabang}}</td>
						</tr>
						<tr>
							<td>Nomor Account </td>
							<td>: {{$data->no_rek}}</td>
						</tr>
						<tr>
							<td>Atas Nama </td>
=======
							<td>Nama Bank *)</td>
							<td>: {{$data->nama_bank}}</td>
						</tr>
						<tr>
							<td>Cabang *)</td>
							<td>: {{$data->cabang}}</td>
						</tr>
						<tr>
							<td>Nomor Account *)</td>
							<td>: {{$data->no_rek}}</td>
						</tr>
						<tr>
							<td>Atas Nama *)</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
							<td>: {{$data->nama_rek}}</td>
						</tr>
						<tr>
							<td>No. Telepon</td>
							<td>: {{$data->telp_bank}}</td>
						</tr>
						<tr>
							<td>Jenis Tabungan</td>
							<td>: {{$data->jenis_tabungan}}</td>
						</tr>
					</tbody>
				</table>
			  </div>
			  <br>
			  <div class="row">
			    <b>DOKUMEN YANG DILAMPIRKAN</b>
				<table>
					<tbody>
						<tr>
							<td>1. KTP/SIM/Passport</td>
							<td>2. Foto Berwarna Terbaru</td>
						</tr>
						<tr>
<<<<<<< HEAD
							<table>
							<tr>
								<td> <img src="{{$data->id_card}}" height="200" width="300"> </td>
								<td> <img src="{{$data->foto}}" height="200" width="300"></td>
							</tr>
							<tr>
								<td> <a href="{{$data->id_card}}" download="id_card">Download</a> </td>
								<td> <a href="{{$data->foto}}" download="foto">Download</a></td>
							</tr>
							</table>
=======
							<td> <img src="{{$data->id_card}}" height="200" width="300"> </td>
							<td> <img src="{{$data->foto}}" height="200" width="300"></td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						</tr>
						<tr>
							<td>3. Rekening Koran Bank 3 Bulan terakhir / Surat Keterangan Bekerja / Surat Keterangan Pendapatan atau Laporan Keungan 3 Bulan Terakhir / Tagihan Kartu Kredit / Rekening Listrik atau Telepon / Bagian Dalam Cover Buku Tabungan</td>
						</tr>
<<<<<<< HEAD
						@if($data->ext == 'pdf')
						<tr>
							<td> <img src="{{asset("img/admin/pdf.png")}}" height="100" width="100"></td>
						</tr>
						<tr>
							<td> <a href="{{$data->rek_koran}}" download="rek_koran">Download</a></td>
						</tr>
						@else
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						<tr>
							<td> <img src="{{$data->rek_koran}}" height="200" width="300"></td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td> <a href="{{$data->rek_koran}}" download="rek_koran">Download</a></td>
						</tr>
						@endif
						
						<tr>
							<td>Note : Field-field bertanda bintang  wajib diisi</td>
=======
							<td>Note : Field-field bertanda bintang *) wajib diisi</td>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
						</tr>
					</tbody>
				</table>
			  </div>
			  <br>
			  <br>
<<<<<<< HEAD
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <hr>
			  <br>
			  <div class="text-center" style="text-align:center;"><b>PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</b></div>
			  <br>
			<div class="form-group form-material" style="text-align:center;">
				Dengan mengisi kolom "YA" di bawah ini, Saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam <b>APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE</b>  adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.
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
			  <hr>
			  <br>
				<div class="text-center" style="text-align:center;">PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</div>
			  <br>
			    <div>
					<div class="form-group form-material" style="text-align:center;">
						Saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam <b>APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE</b>  adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.
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
      </div>
		</div>
	</div>
</div>

<style media="screen">
	b, strong {
		font-weight: bold !important;
	}
</style>
