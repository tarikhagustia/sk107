@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/jquery-wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
@endsection

@section('content')
<!-- Page -->
  <div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
    <div class="page-header">
      <ol class="breadcrumb">
        <li><a href="#">Open Account</a></li>
        <!-- <li class="active">Basic UI</li> -->
      </ol>
      <!-- <h1 class="page-title">List</h1>
      <div class="page-header-actions">
        <button type="button" class="btn btn-sm btn-icon btn-primary btn-round waves-effect waves-light waves-round" data-toggle="tooltip" data-original-title="Edit">
          <i class="icon md-edit" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-sm btn-icon btn-primary btn-round waves-effect waves-light waves-round" data-toggle="tooltip" data-original-title="Refresh">
          <i class="icon md-refresh-alt" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-sm btn-icon btn-primary btn-round waves-effect waves-light waves-round" data-toggle="tooltip" data-original-title="Setting">
          <i class="icon md-settings" aria-hidden="true"></i>
        </button>
      </div> -->
    </div>
    <div class="page-content">
      <!-- Panle List -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-12">
              <!-- Example Bordered -->
              <div class="example-wrap">
                <h4 class="example-title">Form, Dokumen dan Surat Pernyataan Persetujuan Nasabah</h4>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item active">1. Profile Perusahaan PT. Avengers Maju Bersama <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td><button type="button" class="btn btn-default btn-pure waves-effect waves-classic" data-target="#exampleFormModal" data-toggle="modal">Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</button></td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
                  <li class="list-group-item disabled">2. Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
                  <li class="list-group-item disabled">3. Pernyataan Telah Berpengalaman Dalam Melaksanakan Transaksi Perdagangan Berjangka <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
                  <li class="list-group-item disabled">4. Form Aplikasi Pembukaan Rekening Transaksi Secara Electronic On-Line <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
									<li class="list-group-item disabled">5. Dokumen Pemberitahuan Adanya Resiko Yang Harus Disampaikan Oleh Pialang Berjangka <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
									<li class="list-group-item disabled">6. Perjanjian Pemberian Amanat Secara Elektronik On-Line Untuk Transaksi Kontrak Derivatif <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
									<li class="list-group-item disabled">7. Peraturan Perdagangan (Trading Rules) Dalam Sistem Aplikasi Penerimaan Nasabah<br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
                  <li class="list-group-item disabled">8. Pernyataan Bertanggung Jawab Atas Kode Akses Transaksi Nasabah (Personal Access Password) <br>
										<table class="table table-hover" style="background-color:white">
		                    <tbody>
		                      <tr>
		                        <td>
		                          <span class="checkbox-custom checkbox-primary">
		                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
		                            <label for="row-619"></label>
		                          </span>
		                        </td>
		                        <td>Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)</td>
		                        <td>Print & Download</td>
		                      </tr>
		                    </tbody>
		                  </table></li>
                </ul>
              </div>
              <!-- End Example Bordered -->
							<!-- Modal -->
                  <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                      <form class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
													<p>
														Formulir Nomor : 107.PBK.01<br>
														 LampiranPeraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013</p>
                        </div>
                        <div class="modal-body">
                          <div class="row row-lg">
														<div class="col-sm-12">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title">PROFIL PERUSAHAAN PIALANG BERJANGKA</h4>
                <div class="example">
                  <div class="height-300 scrollable is-enabled scrollable-vertical is-hovering" data-plugin="scrollable" style="position: relative;">
                    <div data-role="container" class="scrollable-container" style="height: 300px; width: 510px;">
                      <div data-role="content" class="scrollable-content" style="width: 493px;">
												<table>
												<tbody>
												<tr>
													<td>Nama</td>
													<td>: PT. ASKAP FUTURES</td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>
														: Senayan City, Panin Tower Lt. 22, Jl. Asia Afrika Lot 19, Jakarta
													</td>
												</tr>
												<tr>
													<td>No. Telepon</td>
													<td>: 021 - 72781710 (Hunting)</td>
												</tr>
												<tr>
													<td>Faksimili</td>
													<td>: 021 - 72781721</td>
												</tr>
												<tr>
													<td>E-mail</td>
													<td>: customercare@askapfutures.co.id</td>
												</tr>
												<tr>
													<td>Home-page</td>
													<td>
														: <a href="http://www.askapfutures.com" target="_blank">www.askapfutures.com</a>
													</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Susunan Pengurus Perusahaan :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>
														<b>Direksi</b>
													</td>
													<td></td>
												</tr>
												<tr>
													<td>Direktur Utama</td>
													<td>: Joni Rizal</td>
												</tr>
												<tr>
													<td>Direktur</td>
													<td>: Rini Atmadja</td>
												</tr>
												<tr>
													<td>Direktur Kepatuhan</td>
													<td>: Sriwinanto</td>
												</tr>
												<tr>
													<td>
														<b>Dewan Komisaris</b>
													</td>
													<td></td>
												</tr>
												<tr>
													<td>Komisaris Utama</td>
													<td>: Jeovani David Wirjadi</td>
												</tr>
												<tr>
													<td>Komisaris</td>
													<td>: Siti Rahayu</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Susunan Pemegang Saham Perusahaan :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>
														1. Go Ronny Nugroho<span style="float:right">1 lembar saham</span>
													</td>
													<td>= Rp. 100.000,- (0,000333%)</td>
												</tr>
												<tr>
													<td style="width:300px">
														2. PT. Gloria Inti Nusantara<span style="float:right">299.999 lembar saham</span>
													</td>
													<td>= Rp. 29.999.900.000,- (99,999667%)</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor dan Tanggal Izin Usaha dari Bappebti :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:313px">No : 05/BAPPEBTI/SI/XII/2000</td>
													<td>Tanggal : 08 Desember 2000</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor dan Tanggal Keanggotaan Bursa Berjangka :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:313px">No : SPAB-001/BBJ/09/00</td>
													<td>Tanggal : 12 September 2000</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor dan Tanggal Keanggotaan Lembaga Kliring Berjangka :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:313px">No : 01/AK-KJBK/XII/2000</td>
													<td>Tanggal : 14 Desember 2000</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor dan Tanggal Persetujuan sebagai Peserta Sistem Perdagangan Alternatif :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:313px">No : 1522/BAPPEBTI/SP/4/2007</td>
													<td>Tanggal : 18 April 2007</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nama Penyelenggara Sistem Perdagangan Alternatif : </b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>PT. SENTRA ARTHA MAXIMA</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Kontrak Berjangka Yang Diperdagangkan ;</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>Kontrak Gulir Mini Emas US Dollar</td>
													<td>: Kode Kontrak GU1TF</td>
												</tr>
												<tr>
													<td>Kontrak Gulir Mini Emas US Dollar</td>
													<td>: Kode Kontrak KGEUSD</td>
												</tr>
												<tr>
													<td>Kontrak Berjangka Emas 100 Gram</td>
													<td>: Kode Kontrak GOL 100</td>
												</tr>
												<tr>
													<td>Kontrak Berjangka Kopi Arabika</td>
													<td>: Kode Kontrak ACF</td>
												</tr>
												<tr>
													<td>Kontrak Berjangka Kopi Robusta</td>
													<td>: Kode Kontrak RCF</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Kontrak Derivatif dalam Sistem Perdagangan Alternatif : </b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>
														<i>Foreign Exchange</i> (Mata Uang Asing)
													</td>
												</tr>
												<tr>
													<td>
														<i>Stock Index</i> (Indeks Saham)
													</td>
												</tr>
												<tr>
													<td>
														<i>Loco London Gold</i> (Emas Loco London)
													</td>
												</tr>
												<tr>
													<td>
														<i>Contract For Difference </i> Indeks Saham (segera akan diperdagangkan)
													</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Biaya secara rinci yang dibebankan kepada Nasabah :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>
														Biaya Transaksi (ada di <i>Trading Rules</i> masing-masing kontrak)
													</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor atau alamat email jika terjadi keluhan :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td>
														 • Kontrak Multilateral dan Kontrak Derivatif dalam Sistem Perdagangan Alternatif (Reguler)<br>
														<table style="margin-left:25px">
														<tbody>
														<tr>
															<td>Email</td>
															<td>: customercare@askapfutures.co.id</td>
														</tr>
														<tr>
															<td>No. Telepon</td>
															<td>: 021 - 72781710</td>
														</tr>
														<tr>
															<td>Fax</td>
															<td>: 021 - 72781721 ; 021 – 72781722</td>
														</tr>
														</tbody>
														</table>
													</td>
												</tr>
												<tr>
													<td>
														 • Kontrak Derivatif dalam Sistem Perdagangan Alternatif dengan volume minimum 0,1 (nol koma satu) lot<br>
														<table style="margin-left:25px">
														<tbody>
														<tr>
															<td>Email</td>
															<td>: customercare@askapfutures.co.id</td>
														</tr>
														<tr>
															<td>No. Telepon</td>
															<td>: 021 - 22774955</td>
														</tr>
														<tr>
															<td>Fax</td>
															<td>: 021 – 72781721 ; 021 - 72781722</td>
														</tr>
														</tbody>
														</table>
													</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Sarana penyelesaian perselisihan yang dipergunakan apabila terjadi perselisihan : </b><span style="color:red;font-size:11px"></span><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td id="selisih">
														<ol style=" margin-top: 0px; margin-bottom: 0px; line-height: 13px; ">
															<li>
																Secara musyawarah untuk mencapai mufakat antara Para Pihak ;
															</li>
															<li>
																Memanfaatkan sarana penyelesaian perselisihan yang tersedia di Bursa Berjangka (JFX) ;
															</li>
															<li>
																Badan Arbitrase Perdagangan Berjangka Komoditi (BAKTI) berdasarkan Peraturan dan Prosedur BAKTI ;
															</li>
															<li>
																Pengadilan Negeri sebagaimana tercantum dalam Perjanjian Pemberian Amanat<br>
																 (Formulir Nomor : 107.PBK.05.2 =&gt; Sistem Perdagangan Alternatif)
															</li>
														</ol>
													</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nama - Nama Wakil Pialang Berjangka yang Bekerja di Perusahaan Pialang Berjangka : </b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:200px">1. Sugiharto</td>
													<td style="width:200px">51/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>2. Joni Rizal</td>
													<td>52/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>3. Sriwinanto</td>
													<td>65/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>4. Eva Berliana Rosway</td>
													<td>71/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>5. Makmur Silalahi</td>
													<td>76/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>6. Eko Susanto</td>
													<td>97/BAPPEBTI/SI/3/2010</td>
													<td>26/03/2010</td>
												</tr>
												<tr>
													<td>7. Ririn Sartika</td>
													<td>98/BAPPEBTI/SI/3/2010</td>
													<td>26/03/2010</td>
												</tr>
												<tr>
													<td>8. Toky Setiowibowo</td>
													<td>415/BAPPEBTI/SI/8/2010</td>
													<td>24/08/2010</td>
												</tr>
												<tr>
													<td>9. Rolan Hasibuan</td>
													<td>471/BAPPEBTI/SI/09/2010</td>
													<td>07/09/2010</td>
												</tr>
												<tr>
													<td>10. Roni Budi Santoso</td>
													<td>492/BAPPEBTI/SI/10/2010</td>
													<td>05/10/2010</td>
												</tr>
												<tr>
													<td>11. Hasoloan Sitompul</td>
													<td>05/BAPPEBTI/SI/1/2011</td>
													<td>14/01/2011</td>
												</tr>
												<tr>
													<td>12. Rini Atmadja</td>
													<td>185/BAPPEBTI/SI/03/2011</td>
													<td>30/03/2011</td>
												</tr>
												<tr>
													<td>13. Tjhia Hauw Tje ALS. Djupri S</td>
													<td>350/BAPPEBTI/SI/07/2011</td>
													<td>29/07/2011</td>
												</tr>
												<tr>
													<td>14. Jhohan Widiansyah Noor</td>
													<td>157/BAPPEBTI/SI/03/2012</td>
													<td>15/03/2012</td>
												</tr>
												<tr>
													<td>15. Kartini</td>
													<td>114/UPP/SI/03/2014</td>
													<td>05/03/2014</td>
												</tr>
												<tr>
													<td>16. Franky Frentiono Nangoy</td>
													<td>115/UPP/SI/03/2014</td>
													<td>05/03/2014</td>
												</tr>
												<tr>
													<td>17. Anggreny Baharuddin</td>
													<td>116/UPP/SI/03/2014</td>
													<td>05/03/2014</td>
												</tr>
												<tr>
													<td>18. Rizki Alam Bastari</td>
													<td>143/UPP/SI/04/2014</td>
													<td>10/03/2014</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nama-Nama Wakil Pialang Berjangka yang secara khusus ditunjuk oleh Pialang Berjangka untuk melakukan verifikasi dalam rangka penerimaan Nasabah elektronik on-line :</b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:200px">1. Sugiharto</td>
													<td style="width:200px">51/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>2. Toky Setiowibowo</td>
													<td>415/BAPPEBTI/SI/8/2010</td>
													<td>24/08/2010</td>
												</tr>
												<tr>
													<td>3. Hasoloan Sitompul</td>
													<td>05/BAPPEBTI/SI/1/2011</td>
													<td>14/01/2011</td>
												</tr>
												<tr>
													<td>4. Makmur Silalahi</td>
													<td>76/BAPPEBTI/SI/3/2010</td>
													<td>05/03/2010</td>
												</tr>
												<tr>
													<td>5. Anggreny Baharuddin</td>
													<td>116/UPP/SI/03/2014</td>
													<td>05/03/2014</td>
												</tr>
												</tbody>
												</table>
												<hr>
												<b>Nomor Rekening Terpisah (Segregated Account) Perusahaan Pialang Berjangka : </b><br>
												<br>
												<table style="margin-left:20px">
												<tbody>
												<tr>
													<td style="width:300px">Bank CIMB Niaga Gajah Mada – Jakarta</td>
													<td style="width:50px">IDR</td>
													<td>001-01-89256-00-2</td>
												</tr>
												<tr>
													<td></td>
													<td>USD</td>
													<td>022-02-13036-00-0</td>
												</tr>
												<tr>
													<td colspan="3"></td>
												</tr>
												<tr>
													<td style="width:300px">Bank Central Asia (BCA) Sudirman - Jakarta</td>
													<td style="width:50px">IDR</td>
													<td>035-311-656-5</td>
												</tr>
												<tr>
													<td></td>
													<td>USD</td>
													<td>035-313-797-0</td>
												</tr>
												<tr>
													<td colspan="3"></td>
												</tr>
												<tr>
													<td style="width:300px">Bank Negara Indonesia (BNI) Fatmawati - Jakarta</td>
													<td style="width:50px">IDR</td>
													<td>780-980-9999</td>
												</tr>
												<tr>
													<td></td>
													<td>USD</td>
													<td>780-980-9988</td>
												</tr>
												<tr>
													<td colspan="3"></td>
												</tr>
												<tr>
													<td style="width:300px">Bank Mandiri Cabang Imam Bonjol - Jakarta</td>
													<td style="width:50px">IDR</td>
													<td>122-000-666-0594</td>
												</tr>
												<tr>
													<td></td>
													<td>USD</td>
													<td>122-000-666-0685</td>
												</tr>
												</tbody>
												</table>
                      </div>
                    </div>
                  <div class="scrollable-bar scrollable-bar-vertical" draggable="false"><div class="scrollable-bar-handle" style="height: 78.0749px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
                            <div class="col-lg-4 form-group">
                              <input type="text" class="form-control" name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-lg-4 form-group">
                              <input type="email" class="form-control" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="col-lg-4 form-group">
                              <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-sm-12 pull-right">
                              <button class="btn btn-primary waves-effect waves-light" data-dismiss="modal" type="button">Add Comment</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Modal -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panle List -->
    </div>
  </div>
  <!-- End Page -->
@endsection

@section('js')
<script src="{{ asset('js/admin/formValidation.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-wizard.min.js') }}"></script>
@endsection
