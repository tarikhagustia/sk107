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
					<form class="form-horizontal" id="form-real" method="POST" action="{{ url('admin/account/real-account/form/107-PBK-03-check') }}">
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
                      <div class="radio-custom radio-primary">
                        <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                        <label for="inputRadiosUnchecked">Mini</label>
                      </div>

                      <div class="radio-custom radio-primary">
                        <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                        <label for="inputRadiosUnchecked">Reguler</label>
                      </div>
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
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Identitas <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <div class="row">
                        <div class="col-sm-3">
                          <select class="form-control" name="">

                          </select>
                        </div>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Handphone <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pengalaman Investas <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tuj. Buka Rekening <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">NPWP <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Perkawinan <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

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
                          <input type="text" class="form-control" name="" value="">
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Ibu Kandung <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <textarea name="name" class="form-control" rows="4" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS </label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Rumah </label>
                    <div class="col-sm-4">
                      <select class="form-control" name="">

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp Rumah</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  Memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/Kliring Berjangka ? <span class="text-danger">*)</span>
                </div>
                <div class="col-sm-2">
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                    <label for="inputRadiosUnchecked">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                    <label for="inputRadiosUnchecked">Tidak</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  Apakah anda telah dinyatakan pailit oleh Pengadilan ? <span class="text-danger">*)</span>
                </div>
                <div class="col-sm-2">
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                    <label for="inputRadiosUnchecked">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                    <label for="inputRadiosUnchecked">Tidak</label>
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
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hubungan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <textarea name="name" class="form-control" rows="3" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
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
                      <select class="form-control" name="">
												<option value="">Swasta</option>
												<option value="">Wiraswasta</option>
												<option value="">IBU RT</option>
												<option value="">Peg Negeri</option>
												<option value="">Mahasiswa</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Bidang Usaha</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Bekerja</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat Kantor</label>
                    <div class="col-sm-9">
                      <textarea name="name" class="form-control" rows="3" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Kantor <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kantor Sebelumnya <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
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
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Cabang <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Rekening <span class="text-danger">*)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Atas Nama <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Tabungan<span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
											<select class="form-control">
												<option value="0" selected="selected"></option>
												<option value="1">Giro</option>
												<option value="2">Tabungan</option>
												<option value="3">Lainnya</option>
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
                      <input type="file" name="" value="">
                    </div>
                  </div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Rekening Koran Bank <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input type="file" name="" value="">
											<span class="help-block">Rekening Koran Bank 3 Bulan terakhir / Surat Keterangan Bekerja / Surat Keterangan Pendapatan atau Laporan Keuangan 3 Bulan Terakhir / Tagihan Kartu Kredit / Rekening Listrik atau Telepon *)</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-3 control-label">Foto berwarna terbaru <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input type="file" name="" value="">
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
													<input type="radio" id="aproval_yes" name="inputRadios">
													<label for="aproval_yes">Ya</label>
												</div>

												<div class="radio-custom radio-primary">
													<input type="radio" id="aproval_no" name="inputRadios">
													<label for="aproval_yes">Tidak</label>
												</div>
											</div>
									</div>
									<div class="form-group">

										<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
										<div class="col-sm-9">
											<p class="form-control-static" id="date"></p>
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
@endsection

@section('js')

  <script src="{{asset('js/admin/formValidation.min.js')}}" charset="utf-8"></script>
  <script src="{{ asset('js/admin/formvalidation-bootstrap.min.js') }}" charset="utf-8"></script>
  <script type="text/javascript">
  $(document).ready(function() {
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
                      message: 'The name is required'
                  },
                  stringLength: {
                      min: 6,
                      max: 30,
                      message: 'The name must be more than 6 and less than 30 characters long'
                  },
                  regexp: {
                      regexp: /^[a-zA-Z0-9_]+$/,
                      message: 'The name can only consist of alphabetical, number and underscore'
                  }
              }
          }
      }
  });
  });
  </script>

@endsection
