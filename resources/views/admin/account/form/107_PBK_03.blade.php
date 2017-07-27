@extends('admin.layouts.main')


@section('content')
<!-- Page -->
<div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
	<div class="page-header">
		<h1 class="page-title">Aplikasi Pembukaan Rekening Transaksi secara Elektronik On-line</h1>
	</div>
	<div class="page-content container-fluid">
		<div class="row">
      <div class="col-sm-12">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              Data Pribadi Nasabah
            </div>
          </div>
					<form class="form-horizontal" id="form-real" method="POST" action="{{ url('admin/account/real-account/form/107-PBK-03-check') }}" enctype="multipart/form-data">

						{{ csrf_field() }}
          <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">

                  <span><strong>Formulir Nomor : 107.PBK.03</strong></span>
                </div>
                <div class="col-sm-6">
                  <p class="pull-right">Lampiran Peraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi <br/> Nomor : 107/BAPPEBTI/PER/11/2013</p>
                </div>
              </div>

              <hr/>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Order : </label>
                    <div class="col-sm-9">
                      <p class="form-control-static">{{$order->order_number}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis akun : </label>
                    <div class="col-sm-9">
                      {{-- <p class="form-control-static">email@example.com</p> --}}
											@foreach ($accountType as $key => $value)

                      <div class="radio-custom radio-primary">
                        <input type="radio" id="account_type_mini" name="account_type" value="{{$value->id}}" @if ($value->id == $order->account_type_id) checked="true" @endif />
                        <label for="account_type_mini">{{$value->account_name}}</label>
                      </div>
										@endforeach

                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Tanggal :</label>
                    <div class="col-sm-8">
                      <p class="form-control-static"> {{$order->created_at->toDateTimeString()}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Platform : </label>
                    <div class="col-sm-8">
                      <p class="form-control-static">MetaTrader</p>
                    </div>
                  </div>
                </div>
              </div>

              <hr/>

              <p class="text-center"><em>––– List 1 of 3 » Data Pribadi & Keluarga yang Dapat Dihubungi –––</em></p>

              <legend>Data Pribadi</legend>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" id="name" value="{{$order->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Identitas <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <div class="row">
                        <div class="col-sm-4">
                          <select class="form-control" name="identity_type" id="identity_type">
														@if($order->tipe_id == 'KTP')
															<option value="ktp" selected >KTP</option>
															<option value="sim">SIM</option>
															<option value="passport">Passport</option>
														@elseif($order->tipe_id == 'SIM')
															<option value="ktp">KTP</option>
															<option value="sim" selected >SIM</option>
															<option value="passport">Passport</option>
														@elseif($order->tipe_id == 'Passport')
															<option value="ktp">KTP</option>
															<option value="sim">SIM</option>
															<option value="Passport" selected >Passport</option>
														@endif
                          </select>
                        </div>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="indentity_number" value="{{$order->no_id}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Handphone <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone_number" value="{{$order->phone_number}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pengalaman Investasi <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="pengalaman">
												<option value="ya" @if ($order->pengalaman == "ya") selected @endif>Ya</option>
												<option value="tidak" @if ($order->pengalaman == "tidak") selected @endif>Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tuj. Buka Rekening <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="tujuan" id="tujuan">
												<option value="hedging" @if($order->tujuan == "hedging") selected @endif>Hedging</option>
												<option value="gain" @if($order->tujuan == "gain") selected @endif>Gain</option>
												<option value="spekulasi" @if($order->tujuan == "spekulasi") selected @endif>Spekulasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">NPWP</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="npwp" value="{{$order->npwp}}" id="npwp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
												<option value="laki-laki" @if($order->jenis_kelamin == "laki-laki") selected @endif>Laki-laki</option>
												<option value="perempuan" @if($order->jenis_kelamin == "perempuan") selected @endif>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Perkawinan</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="status_perkawinan">
													<option value="tidak kawin" @if($order->status_perkawinan == "tidak kawin") selected @endif>Tidak Kawin</option>
													<option value="kawin" @if($order->status_perkawinan == "kawin") selected @endif>Kawin</option>
													<option value="janda" @if($order->status_perkawinan == "janda") selected @endif>Janda</option>
													<option value="duda" @if($order->status_perkawinan == "duda") selected @endif>Duda</option>
                      </select>
                    </div>
                  </div>
                </div>



                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tempat/Tgl Lahir <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="place" value="{{$order->tempat_lahir}}">
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker" name="dob" value="{{$order->dob}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Ibu Kandung <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ibu" value="{{$order->nama_ibu}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <textarea name="alamat" class="form-control" rows="4" cols="80">{{$order->alamat}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="postcode" value="{{$order->kode_pos}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Rumah </label>
                    <div class="col-sm-4">
                      <select class="form-control" name="status_rumah">
												<option value="pribadi" @if($order->status_rumah == "pribadi") selected @endif>Pribadi</option>
												<option value="keluarga" @if($order->status_rumah == "keluarga") selected @endif>Keluarga</option>
												<option value="sewa/kontrak" @if($order->status_rumah == "sewa/kontrak") selected @endif>Sewa/Kontrak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp Rumah</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="telpon_rumah" value="{{$order->telp_rumah}}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  Memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/Kliring Berjangka ? <span class="text-danger">*)</span>
                </div>
                <div class="col-sm-2">
									<div class="form-group">
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="keluarga_kbi" name="keluarga_kbi" value="ya" @if($order->keluarga_kbi == "ya") checked="checked" @endif/>
                    <label for="keluarga_kbi">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="keluarga_kbi" name="keluarga_kbi" value="tidak"  @if($order->keluarga_kbi == "tidak") checked="checked" @endif	/>
                    <label for="keluarga_kbi">Tidak</label>
                  </div>
									</div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  Apakah anda telah dinyatakan pailit oleh Pengadilan ? <span class="text-danger">*)</span>
                </div>
                <div class="col-sm-2">
									<div class="form-group">
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="pailit" name="pailit" value="ya" @if($order->pailit == "ya") checked="checked" @endif/>
                    <label for="pailit">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="pailit" name="pailit" value="tidak"  @if($order->pailit == "tidak") checked="checked" @endif/>
                    <label for="pailit">Tidak</label>
                  </div>
									</div>
                </div>
              </div>


              <hr/>

              <legend>PIHAK YANG DIHUBUNGI DALAM KEADAAN DARURAT</legend>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name_darurat" id="name_darurat" value="{{$order->nama_darurat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="telp_darurat" value="{{$order->telp_darurat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hubungan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="hubungan_darurat" id="hubungan_darurat" value="{{$order->hubungan}}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <textarea name="alamat_darurat" class="form-control" rows="3" cols="80">{{$order->alamat_darurat}}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <hr/>

              <p class="text-center"><em>––– List 2 of 3 » Data Pekerjaan & Kekayaan –––</em></p>

              <legend>PEKERJAAN</legend>

							<div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan Profesional <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <select class="form-control" name="pekerjaan">
												<option required disabled>-- pilih pekerjaan --</option>
												<option value="swasta" @if($order->pekerjaan == "swasta") selected @endif>Swasta</option>
												<option value="wiraswasta" @if($order->pekerjaan == "wiraswasta") selected @endif>Wiraswasta</option>
												<option value="irt" @if($order->pekerjaan == "irt") selected @endif>IBU RT</option>
												<option value="negeri" @if($order->pekerjaan == "negeri") selected @endif>Peg Negeri</option>
												<option value="mahasiswa" @if($order->pekerjaan == "mahasiswa") selected @endif>Mahasiswa</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_perusahaan" value="{{$order->nama_perusahaan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Bidang Usaha</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="bidang_usaha" value="{{$order->bidang_usaha}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="jabatan" value="{{$order->jabatan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Bekerja</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="lama_bekerja" value="{{$order->lama_bekerja}}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat Kantor</label>
                    <div class="col-sm-9">
                      <textarea name="alamat_kantor" class="form-control" rows="3" cols="80">{{$order->alamat_kantor}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="postcode_kantor" value="{{$order->kode_pos_kantor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Telepon Kantor </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="telp_kantor" value="{{$order->telp_kantor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kantor Sebelumnya </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="kantor_sebelum" value="{{$order->kantor_sebelum}}">
                    </div>
                  </div>
                </div>
              </div>

							<p class="text-center"><em>––– List 3 of 3 » Data Rekening Bank & Dokumen yang Dilampirkan –––</em></p>

              <legend>REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN</legend>
							<div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Bank <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_bank" value="{{$order->nama_bank}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Cabang <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="cabang" value="{{$order->cabang}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="telp_bank" value="{{$order->telp_bank}}">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Rekening <span class="text-danger">*)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_rek" value="{{$order->no_rek}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Atas Nama <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_rek" value="{{$order->nama_rek}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Tabungan</label>
                    <div class="col-sm-9">
											<select class="form-control" name="jenis_tabungan">
												<option value="giro" @if($order->jenis_tabungan == "giro") selected @endif>Giro</option>
												<option value="tabungan" @if($order->jenis_tabungan == "tabungan") selected @endif>Tabungan</option>
												<option value="lainnya" @if($order->jenis_tabungan == "lainnya") selected @endif>Lainnya</option>
											</select>
                    </div>
                  </div>
                </div>
              </div>
							<hr/>
							<legend>DOKUMEN YANG DILAMPIRKAN</legend>
							<p>Upload Dokumen Hasil Foto/Scan (JPG/GIF/PNG –1 file max. 1024 kb / 1mb)</p>
							<p>atau kirim lampiran dokumen anda ke customercare@majumundur.com</p>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
                    <label class="col-sm-3 control-label">KTP/Passport/SIM <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="file" name="id_card" id="id_card" value="" data-fv-file-extension="jpg,jpeg,png">
											<img src="{{asset($order->id_card)}}" class="img-responsive" alt="" />
                    </div>
                  </div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Rekening Koran Bank <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input type="file" name="rek_koran" id="rek_koran" value="">
											<img src="{{asset($order->rek_koran)}}" class="img-responsive" alt="" />
											<span class="help-block">Rekening Koran Bank 3 Bulan terakhir / Surat Keterangan Bekerja / Surat Keterangan Pendapatan atau Laporan Keuangan 3 Bulan Terakhir / Tagihan Kartu Kredit / Rekening Listrik atau Telepon *)</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-3 control-label">Foto berwarna terbaru <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input type="file" name="foto" id="foto" value="">
											<img src="{{asset($order->foto)}}" class="img-responsive" alt="" />
										</div>
									</div>
								</div>
							</div>

							<hr/>

							<legend class="text-center">PERNYATAAN KEBENARAN DAN TANGGUNG JAWAB</legend>
							<p class="text-justify">Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa semua informasi dan semua dokumen yang saya lampirkan dalam <b>APLIKASI PEMBUKAAN REKENING TRANSAKSI SECARA ELEKTRONIK ON-LINE</b>  adalah benar dan tepat, Saya akan bertanggung jawab penuh apabila dikemudian hari terjadi sesuatu hal sehubungan dengan ketidakbenaran data yang saya berikan.</p>

							<div class="row">
								<div class="col-sm-8 col-sm-offset-4">
									<div class="form-group">
										<label class="col-sm-3 control-label">Peryataan Kebenaran dan tanggung jawab <span class="text-danger">*)</span></label>
										<div class="col-sm-9">

												<div class="radio-custom radio-primary">
													<input type="radio" id="aproval_yes" name="approval_yes" value="ya" @if($order->approval_yes == "ya") checked="true" @endif>
													<label for="aproval_yes">Ya</label>
												</div>

												<div class="radio-custom radio-primary">
													<input type="radio" id="aproval_no" name="approval_yes" value="tidak" @if($order->approval_yes == "tidak") checked="true" @endif>
													<label for="aproval_no">Tidak</label>
												</div>
											</div>
									</div>
									<div class="form-group">

										<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
										<div class="col-sm-9">
											<p class="form-control-static" id="date">{{$order->created_at->formatLocalized('%A %d %B %Y')}}</p>
										</div>
									</div>
								</div>

							</div>

          </div>
					<div class="panel-footer">
							<button type="submit" class="btn btn-primary " name="button">Submit</button>
					</div>
					</form>
        </div>
      </div>
		</div>
	</div>
</div>
<!-- End Page -->
@endsection




@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/formValidation.min.css') }}">
<link rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker.min.css')}}" media="screen" title="no title" charset="utf-8">
<style media="screen">
	b, strong {
		font-weight: bold !important;
	}
</style>
@endsection

@section('js')
<script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}" charset="utf-8"></script>
<script src="{{asset('js/admin/formValidation.min.js')}}" charset="utf-8"></script>
<script src="{{asset('js/admin/formvalidation-bootstrap.min.js')}}" charset="utf-8"></script>
<script>
$(document).ready(function() {


		const DATEPICKER = $('.datepicker');
		DATEPICKER.each(function(key, item){
			$(item).datepicker({
				format: 'yyyy-mm-dd',
			});
		})



    $('#form-real').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Nama harus diisi'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Nama harus minimal 6 karakter dan maksimal 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'Nama hanya boleh diisi dengan huruf dan spasi'
                    }
                }
            },
						pengalaman: {
                validators: {
                    notEmpty: {
                        message: 'Pengalaman harus diisi'
                    }
                }
            },
						tujuan: {
                validators: {
                    notEmpty: {
                        message: 'Pengalaman harus diisi'
                    }
                }
            },
						place: {
                validators: {
                    notEmpty: {
                        message: 'Tempat lahir harus diisi'
                    }
                }
            },
						dob: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    }
                }
            },
            indentity_number: {
                validators: {
                    notEmpty: {
                        message: 'Nomor identitas harus diisi'
                    },
                    numeric: {
                        message: 'Nomor identitas hanya boleh angka'
                    }
                }
            },
						phone_number: {
                validators: {
                    notEmpty: {
                        message: 'Nomor telepon harus diisi'
                    },
                    numeric: {
                        message: 'Nomor telepon hanya boleh angka'
                    }
                }
            },
						kelamin: {
                validators: {
                    notEmpty: {
                        message: 'The availability option is required'
                    }
                }
            },
						status: {
                validators: {
                    notEmpty: {
                        message: 'The availability option is required'
                    }
                }
            },
            'size[]': {
                validators: {
                    notEmpty: {
                        message: 'The size is required'
                    }
                }
            },
          	availability: {
                validators: {
                    notEmpty: {
                        message: 'The availability option is required'
                    }
                }
            },
						alamat : {
							validators : {
								notEmpty : {
									message : 'Alamat harus diisi'
								}
							}
						},
						ibu : {
							validators : {
								notEmpty : {
									message : 'Nama Ibu kandung harus diisi'
								}
							}
						},
						name_darurat : {
							validators : {
								notEmpty : {
									message : 'Nama harap diisi'
								}
							}
						},
						telp_darurat : {
							validators : {
								notEmpty : {
									message : 'Nomor telphon harap disi'
								}
							}
						},
						hubungan_darurat : {
							validators : {
								notEmpty : {
									message : 'Hubungan harap disi'
								}
							}
						},
						alamat_darurat : {
							validators : {
								notEmpty : {
									message : 'Alamat harap disi'
								}
							}
						},
						pekerjaan : {
							validators : {
								notEmpty : {
									message : 'Harap pilih pekerjaan'
								}
							}
						},
						nama_bank : {
							validators : {
								notEmpty : {
									message : 'Isi nama bank'
								}
							}
						},
						no_rek : {
							validators : {
								notEmpty : {
									message : 'Harap isi nomor rekening'
								}
							}
						},
						nama_rek : {
							validators : {
								notEmpty : {
									message : 'Harap isi nama'
								}
							}
						},
						cabang : {
							validators : {
								notEmpty : {
									message : 'Harap pilih cabang'
								}
							}
						},
						id_card : {
							validators : {
								notEmpty : {
									message : 'Identitas diperlukan'
								},
								file: {
                    extension: 'jpg,jpeg,png',
                    type: 'image/png,/image/jpg,image/jpeg',
                    message: 'Hanya file gambar'
                }
							}
						},
						rek_koran : {
							validators : {
								notEmpty : {
									message : 'Identitas diperlukan'
								},
								file: {
                    extension: 'jpg,jpeg,png',
                    type: 'image/png,/image/jpg,image/jpeg',
                    message: 'Hanya file gambar'
                }
							}
						},
						foto : {
							validators : {
								notEmpty : {
									message : 'Identitas diperlukan'
								},
								file: {
                    extension: 'jpg,jpeg,png',
                    type: 'image/png,/image/jpg,image/jpeg',
                    message: 'Hanya file gambar'
                }
							}
						}
        }
    });
});
</script>
@endsection
