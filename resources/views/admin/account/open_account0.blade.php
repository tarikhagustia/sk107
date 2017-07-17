@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/jquery-wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
@endsection

@section('content')
<!-- Page -->
<div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
	<div class="page-header">
		<h1 class="page-title">Form, Dokument & Pernyataan</h1>
		<ol class="breadcrumb">
			<li>
				Form, Dokumen dan Surat Pernyataan Persetujuan Nasabah
			</li>
			<!-- <li><a href="javascript:void(0)">Forms</a></li>
  <li class="active">Wizard</li> -->
		</ol>
		<!-- <div class="page-header-actions">
			<a class="btn btn-sm btn-primary btn-round waves-effect waves-light waves-round" href="#" target="_blank">
			<i class="icon md-link" aria-hidden="true"></i>
			<span class="hidden-xs">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</span>
			</a>
		</div> -->
	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- Panel Wizard Form -->
				<div class="panel" id="exampleWizardForm">
					<div class="panel-heading">
						<h3 class="panel-title">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</h3>
					</div>
					<div class="panel-body">
						<!-- Steps -->
						<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
							<div class="step col-xs-6 col-sm-3 done" data-target="#exampleAccount" role="tab" aria-expanded="true" style="height: 88px;">
								<span class="step-number">1</span>
								<div class="step-desc">
									<span class="step-title">Profile Perusahaan</span>
									<p>
										PT. ASKAP FUTURES
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 current" data-target="#exampleDua" role="tab" style="height: 88px;">
								<span class="step-number">2</span>
								<div class="step-desc">
									<span class="step-title">Pernyataan</span>
									<p>
										Melakukan Simulasi Perdagangan Berjangka
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 error" data-target="#exampleTiga" role="tab" style="height: 88px;">
								<span class="step-number">3</span>
								<div class="step-desc">
									<span class="step-title">Billing</span>
									<p>
										Pay for the bill
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 disabled" data-target="#exampleEmpat" role="tab" style="height: 88px;">
								<span class="step-number">4</span>
								<div class="step-desc">
									<span class="step-title">Billing</span>
									<p>
										Pay for the bill
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 disabled" data-target="#exampleLima" role="tab" style="height: 88px;">
								<span class="step-number">5</span>
								<div class="step-desc">
									<span class="step-title">Billing</span>
									<p>
										Pay for the bill
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 disabled" data-target="#exampleEnam" role="tab" style="height: 88px;">
								<span class="step-number">6</span>
								<div class="step-desc">
									<span class="step-title">Billing</span>
									<p>
										Pay for the bill
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 disabled" data-target="#exampleTujuh" role="tab" style="height: 88px;">
								<span class="step-number">7</span>
								<div class="step-desc">
									<span class="step-title">Billing</span>
									<p>
										Pay for the bill
									</p>
								</div>
							</div>
							<div class="step col-xs-6 col-sm-3 disabled" data-target="#exampleDelapan" role="tab" style="height: 88px;">
								<span class="step-number">8</span>
								<div class="step-desc">
									<span class="step-title">Getting</span>
									<p>
										Waiting for the goods
									</p>
								</div>
							</div>
						</div>
						<!-- End Steps -->
						<!-- Wizard Content -->
						<div class="wizard-content">
							<div class="wizard-pane active" id="exampleAccount" role="tabpanel">
								<form id="exampleAccountForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit disabled" style="display: none; width: 0px; height: 0px;" disabled="disabled"></button>
									<p>
										Formulir Nomor : 107.PBK.01<br>
										 LampiranPeraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi<br>Nomor : 107/BAPPEBTI/PER/11/2013</p>
									<!-- Panel -->
									<div class="panel">
										<div class="panel-body container-fluid">
											<div class="row row-lg">
												<div class="col-sm-12">
													<!-- Example Basic -->
													<div class="example-wrap">
														<h3 align="center">PROFIL PERUSAHAAN PIALANG BERJANGKA</h3>
														<div class="example">
															<div class="height-300 scrollable is-enabled scrollable-vertical is-hovering" data-plugin="scrollable" style="position: relative;">
																<div data-role="container" class="scrollable-container" style="height: 300px; width: 510px;">
																	<div data-role="content" class="scrollable-content" style="width: 493px;">
																		<hr>
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
																<div class="scrollable-bar scrollable-bar-vertical" draggable="false">
																	<div class="scrollable-bar-handle" style="height: 78.0749px; transform: translate3d(0px, 0px, 0px);">

																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- End Example Basic -->
                        </div>
                      </div>
                    </div>
                          </div>
                  <h3 align="center">PERNYATAAN TELAH MEMBACA PROFIL PERUSAHAAN PIALANG BERJANGKA</h3>
                  <p align="center">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah membaca dan menerima informasi <strong>PROFIL PERUSAHAAN PIALANG BERJANGKA,</strong> mengerti dan memahami isinya.</p>
                  <p align="center"><label>Pernyataan menerima*) :  &nbsp;</label>
                  <input type="radio" id="ya" name="ya">
                  <label for="ya">Ya</label>&nbsp;
                  <input type="radio" id="tidak" name="tidak" checked="">
                  <label for="tidak">Tidak</label></p>
                  <!-- <div class="form-group form-material" align="right">
                      <label class="col-sm-3 control-label">Pernyataan menerima*): </label>
                      <div class="col-sm-4">
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputHorizontalYa" name="inputRadiosYa">
                          <label for="inputHorizontalMale">Ya</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputHorizontalTidak" name="inputRadiosTidak" checked="">
                          <label for="inputHorizontalFemale">Tidak</label>
                        </div>
                      </div>
                    </div> -->
                </form>
							</div>
							<div class="wizard-pane" id="exampleDua" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleTiga" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleEmpat" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleLima" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleEnam" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleTujuh" role="tabpanel">
								<form id="exampleBillingForm" novalidate="novalidate" class="fv-form fv-form-bootstrap">
									<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
									<div class="form-group form-material">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number" data-fv-field="number">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="number" data-fv-result="NOT_VALIDATED" style="display: none;">The credit card number is required</small>
									</div>
									<div class="form-group form-material">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV" data-fv-field="cvv">
										<small class="help-block" data-fv-validator="notEmpty" data-fv-for="cvv" data-fv-result="NOT_VALIDATED" style="display: none;">The CVV number is required</small>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="exampleDelapan" role="tabpanel">
								<div class="text-center margin-vertical-20">
									<i class="icon md-check font-size-40" aria-hidden="true"></i>
									<h4>We got your order. Your product will be shipping soon.</h4>
								</div>
							</div>
						</div>
						<!-- End Wizard Content -->
						<div class="wizard-buttons">
							<a class="btn btn-default disabled waves-effect waves-light" href="#exampleWizardForm" data-wizard="back" role="button">Back</a>
							<a class="btn btn-primary pull-right waves-effect waves-light" href="#exampleWizardForm" data-wizard="next" role="button">Next</a>
							<a class="btn btn-success pull-right hide waves-effect waves-light" href="#exampleWizardForm" data-wizard="finish" role="button">Finish</a>
						</div>
					</div>
				</div>
				<!-- End Panel Wizard One Form -->
      </div>
		</div>
	</div>
</div>
<!-- End Page -->
@endsection

@section('js')
<script src="{{ asset('js/admin/formValidation.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-wizard.min.js') }}"></script>
@endsection
