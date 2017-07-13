@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/jquery-wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
@endsection

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
          <div class="panel-body">
            <form action="index.html" method="post" class="form-horizontal">
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
                      <p class="form-control-static">email@example.com</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis akun</label>
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
                      <p class="form-control-static"> 1 Juni 2016</p>
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
                    <label class="col-sm-3 control-label">Nama <span class="text-danger">*)</span></label>
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

              <p class="text-center"><em>––– List 1 of 3 » Data Pribadi & Keluarga yang Dapat Dihubungi –––</em></p>

              <legend>PEKERJAAN</legend>
            </form>
          </div>
        </div>
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
