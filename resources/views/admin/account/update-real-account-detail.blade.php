@extends('admin.layouts.main')


@section('content')
<!-- Page -->
<div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
	<div class="page-content container-fluid">
		<div class="row">
      <div class="col-sm-12">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              Data Pribadi Nasabah
            </div>
          </div>
					<div class="form-horizontal">
						<form class="" id="form-update" action="{{route('update.account.real.post')}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
<<<<<<< HEAD
						<input type="hidden" name="order_number" id="order_number" value="{{$order->order_number}}">
          <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
=======
          <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">

                  <span><strong>Formulir Nomor : 107.PBK.03</strong></span>
                </div>
                <div class="col-sm-6">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                  <p class="pull-right">Lampiran Peraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi <br/> Nomor : 107/BAPPEBTI/PER/11/2013</p>
                </div>
              </div>

              <hr/>

<<<<<<< HEAD
                            <p class="text-center"><em>––– List 1 of 3 » Data Pribadi & Keluarga yang Dapat Dihubungi –––</em></p>
=======
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Order : </label>
                    <div class="col-sm-9">
                      <p class="form-control-static">{{$order->order_number}}</p>
					  <input type="hidden" name="order_number" value="{{$order->order_number}}"></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis akun : </label>
                    <div class="col-sm-9">
											@foreach ($accountType as $key => $value)
	                      <div class="radio-custom radio-primary">
	                        <input  type="radio" id="account_type_mini" name="account_type" value="{{$value->id}}" @if ($value->id == $order->account_type_id) checked="true" @endif />
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
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04

              <legend>Data Pribadi</legend>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="30" type="text" class="form-control" name="name" id="name" value="{{$order->nama}}"  >
=======
                      <input   type="text" class="form-control" name="name" id="name" value="{{$order->nama}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Identitas <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <div class="row">
                        <div class="col-sm-4">
<<<<<<< HEAD
                          <select class="form-control" name="identity_type" id="identity_type"  >
=======
                          <select  class="form-control" name="identity_type" id="identity_type">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                          <input maxlength="20" type="text" class="form-control" name="identity_number" value="{{$order->no_id}}"  >
=======
                          <input  type="text" class="form-control" name="identity_number" value="{{$order->no_id}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Handphone <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="20" type="text" class="form-control" name="phone_number" value="{{$order->phone_number}}"  >
=======
                      <input  type="text" class="form-control" name="phone_number" value="{{$order->phone_number}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pengalaman Investasi <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
<<<<<<< HEAD
                      <select class="form-control" name="pengalaman"  >
=======
                      <select  class="form-control" name="pengalaman">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
												<option value="ya" @if ($order->pengalaman == "ya") selected @endif>Ya</option>
												<option value="tidak" @if ($order->pengalaman == "tidak") selected @endif>Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tuj. Buka Rekening <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
<<<<<<< HEAD
                      <select class="form-control" name="tujuan" id="tujuan"  >
												<option value="lindung nilai" @if($order->tujuan == "lindung nilai") selected @endif>Lindung Nilai</option>
=======
                      <select  class="form-control" name="tujuan" id="tujuan">
												<option value="hedging" @if($order->tujuan == "hedging") selected @endif>Hedging</option>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
												<option value="gain" @if($order->tujuan == "gain") selected @endif>Gain</option>
												<option value="spekulasi" @if($order->tujuan == "spekulasi") selected @endif>Spekulasi</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
<<<<<<< HEAD
                    <label class="col-sm-3 control-label">NPWP <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <input maxlength="30" type="text" class="form-control" name="npwp" value="{{$order->npwp}}" id="npwp"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="jenis_kelamin" id="jenis_kelamin"  >
=======
                    <label class="col-sm-3 control-label">NPWP</label>
                    <div class="col-sm-4">
                      <input  type="text" class="form-control" name="npwp" value="{{$order->npwp}}" id="npwp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                      <select  class="form-control" name="jenis_kelamin" id="jenis_kelamin">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
												<option value="laki-laki" @if($order->jenis_kelamin == "laki-laki") selected @endif>Laki-laki</option>
												<option value="perempuan" @if($order->jenis_kelamin == "perempuan") selected @endif>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
<<<<<<< HEAD
                    <label class="col-sm-3 control-label">Status Pernikahan <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="status_perkawinan" id="status_perkawinan"  >
													<option value="tidak kawin" @if($order->status_perkawinan == "tidak kawin") selected @endif>Tidak Menikah</option>
													<option value="kawin" @if($order->status_perkawinan == "kawin") selected @endif>Menikah</option>
=======
                    <label class="col-sm-3 control-label">Status Perkawinan</label>
                    <div class="col-sm-4">
                      <select  class="form-control" name="status_perkawinan" id="status_perkawinan">
													<option value="tidak kawin" @if($order->status_perkawinan == "tidak kawin") selected @endif>Tidak Kawin</option>
													<option value="kawin" @if($order->status_perkawinan == "kawin") selected @endif>Kawin</option>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                          <input maxlength="30" type="text" class="form-control" name="place" value="{{$order->tempat_lahir}}"  >
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="form-control datepicker" name="dob" id="dob" value="{{Carbon::parse($order->dob)->format('d-m-Y')}}"  >
=======
                          <input  type="text" class="form-control" name="place" value="{{$order->tempat_lahir}}">
                        </div>
                        <div class="col-sm-6">
                          <input  type="text" class="form-control datepicker" name="dob" id="dob" value="{{$order->dob}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Ibu Kandung <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="30" type="text" class="form-control" name="ibu" value="{{$order->nama_ibu}}"  >
=======
                      <input  type="text" class="form-control" name="ibu" value="{{$order->nama_ibu}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <textarea name="alamat" class="form-control" rows="4" cols="80"  >{{$order->alamat}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="postcode" maxlength="6" value="{{$order->kode_pos}}"  >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <select class="form-control" name="status_rumah"  >
=======
                      <textarea  name="alamat" class="form-control" rows="4" cols="80">{{$order->alamat}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS </label>
                    <div class="col-sm-4">
                      <input  type="text" class="form-control" name="postcode" value="{{$order->kode_pos}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Rumah </label>
                    <div class="col-sm-4">
                      <select  class="form-control" name="status_rumah">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
												<option value="pribadi" @if($order->status_rumah == "pribadi") selected @endif>Pribadi</option>
												<option value="keluarga" @if($order->status_rumah == "keluarga") selected @endif>Keluarga</option>
												<option value="sewa/kontrak" @if($order->status_rumah == "sewa/kontrak") selected @endif>Sewa/Kontrak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
<<<<<<< HEAD
                    <label class="col-sm-3 control-label">No. Telp Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <input maxlength="20" type="text" class="form-control" name="telpon_rumah" value="{{$order->telp_rumah}}"  >
                    </div>
                  </div>
				  <div class="form-group" id="pasangan" style="display:none;">
                    <label class="col-sm-3 control-label">Nama Suami/Istri <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="30" type="text" class="form-control" name="pasangan" value="{{$order->pasangan}}">
=======
                    <label class="col-sm-3 control-label">No. Telp Rumah</label>
                    <div class="col-sm-4">
                      <input  type="text" class="form-control" name="telpon_rumah" value="{{$order->telp_rumah}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                    <input type="radio" id="keluarga_kbi" name="keluarga_kbi" value="ya" @if($order->keluarga_kbi == "ya") checked="checked" @endif  />
                    <label for="keluarga_kbi">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="keluarga_kbi" name="keluarga_kbi" value="tidak"  @if($order->keluarga_kbi == "tidak") checked="checked" @endif  />
=======
                    <input  type="radio" id="keluarga_kbi" name="keluarga_kbi" value="ya" @if($order->keluarga_kbi == "ya") checked="checked" @endif/>
                    <label for="keluarga_kbi">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input  type="radio" id="keluarga_kbi" name="keluarga_kbi" value="tidak"  @if($order->keluarga_kbi == "tidak") checked="checked" @endif	/>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                    <input type="radio" id="pailit" name="pailit" value="ya" @if($order->pailit == "ya") checked="checked" @endif />
                    <label for="pailit">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input type="radio" id="pailit" name="pailit" value="tidak"  @if($order->pailit == "tidak") checked="checked" @endif />
=======
                    <input  type="radio" id="pailit" name="pailit" value="ya" @if($order->pailit == "ya") checked="checked" @endif/>
                    <label for="pailit">Ya</label>
                  </div>
                  <div class="radio-custom radio-primary">
                    <input  type="radio" id="pailit" name="pailit" value="tidak"  @if($order->pailit == "tidak") checked="checked" @endif/>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                      <input maxlength="30" type="text" class="form-control" name="name_darurat" id="name_darurat" value="{{$order->nama_darurat}}"  >
=======
                      <input  type="text" class="form-control" name="name_darurat" id="name_darurat" value="{{$order->nama_darurat}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telp <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="20" type="text" class="form-control" name="telp_darurat" value="{{$order->telp_darurat}}"  >
=======
                      <input  type="text" class="form-control" name="telp_darurat" value="{{$order->telp_darurat}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hubungan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="50" type="text" class="form-control" name="hubungan_darurat" id="hubungan_darurat" value="{{$order->hubungan}}"  >
=======
                      <input  type="text" class="form-control" name="hubungan_darurat" id="hubungan_darurat" value="{{$order->hubungan}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <textarea name="alamat_darurat" class="form-control" rows="3" cols="80"  >{{$order->alamat_darurat}}</textarea>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="postcode_darurat" maxlength="6" value="{{$order->kode_pos_darurat}}"  >
=======
                      <textarea  name="alamat_darurat" class="form-control" rows="3" cols="80">{{$order->alamat_darurat}}</textarea>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                </div>
              </div>

              <hr/>

              <p class="text-center"><em>––– List 2 of 3 » Data Pekerjaan & Kekayaan –––</em></p>

              <legend>PEKERJAAN</legend>

<<<<<<< HEAD
			  <div class="row">
=======
							<div class="row">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Pekerjaan Profesional <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <select class="form-control" name="pekerjaan"  >
												<option required disabled>-- pilih pekerjaan --</option>
=======
                      <select  class="form-control" name="pekerjaan">
												<option required >-- pilih pekerjaan --</option>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
												<option value="swasta" @if($order->pekerjaan == "swasta") selected @endif>Swasta</option>
												<option value="wiraswasta" @if($order->pekerjaan == "wiraswasta") selected @endif>Wiraswasta</option>
												<option value="irt" @if($order->pekerjaan == "irt") selected @endif>IBU RT</option>
												<option value="negeri" @if($order->pekerjaan == "negeri") selected @endif>Peg Negeri</option>
												<option value="mahasiswa" @if($order->pekerjaan == "mahasiswa") selected @endif>Mahasiswa</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
<<<<<<< HEAD
                    <label class="col-sm-3 control-label">Nama Perusahaan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="100" type="text" class="form-control" name="nama_perusahaan" value="{{$order->nama_perusahaan}}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Bidang Usaha <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="100" type="text" class="form-control" name="bidang_usaha" value="{{$order->bidang_usaha}}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="100" type="text" class="form-control" name="jabatan" value="{{$order->jabatan}}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Bekerja <span class="text-danger">*)</span></label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" maxlength="2" name="lama_bekerja" value="{{$order->lama_bekerja}}" >
                    </div>
					 <div class="col-sm-2 control-label">
                      tahun
=======
                    <label class="col-sm-3 control-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="nama_perusahaan" value="{{$order->nama_perusahaan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Bidang Usaha</label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="bidang_usaha" value="{{$order->bidang_usaha}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="jabatan" value="{{$order->jabatan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Bekerja</label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="lama_bekerja" value="{{$order->lama_bekerja}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
<<<<<<< HEAD
                    <label class="col-sm-3 control-label">Alamat Kantor <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <textarea name="alamat_kantor" class="form-control" rows="3" cols="80" >{{$order->alamat_kantor}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="postcode_kantor" maxlength="6" value="{{$order->kode_pos_kantor}}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Telepon Kantor <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="20" type="text" class="form-control" name="telp_kantor" value="{{$order->telp_kantor}}" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kantor Sebelumnya <span class="text-danger">*)</span></label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" maxlength="2" name="kantor_sebelum" value="{{$order->kantor_sebelum}}" >
                    </div>
					<div class="col-sm-2 control-label">
                      tahun
=======
                    <label class="col-sm-3 control-label">Alamat Kantor</label>
                    <div class="col-sm-9">
                      <textarea  name="alamat_kantor" class="form-control" rows="3" cols="80">{{$order->alamat_kantor}}</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode POS </label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="postcode_kantor" value="{{$order->kode_pos_kantor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Telepon Kantor </label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="telp_kantor" value="{{$order->telp_kantor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kantor Sebelumnya </label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="kantor_sebelum" value="{{$order->kantor_sebelum}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                </div>
              </div>
<<<<<<< HEAD
			  
			  <legend>DAFTAR KEKAYAAN</legend>

			  <div class="row">
				<div class="col-sm-12">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penghasilan per Tahun <span class="text-danger">*)</span></label>
                    <div class="col-sm-3">
                      <select class="form-control" name="penghasilan"  >
												<option required disabled>-- pilih penghasilan --</option>
												<option value="Antara 100-250 Juta" @if($order->penghasilan == "Antara 100-250 Juta") selected @endif>Antara 100-250 Juta</option>
												<option value="Antara 250-500 Juta" @if($order->penghasilan == "Antara 250-500 Juta") selected @endif>Antara 250-500 Juta</option>
												<option value="Di atas 500 Juta" @if($order->penghasilan == "Di atas 500 Juta") selected @endif>Di atas 500 Juta</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Lokasi Rumah <span class="text-danger">*)</span></label>
                    <div class="col-sm-3">
                      <input maxlength="191" type="text" class="form-control" name="lokasi_rumah" value="{{$order->lokasi_rumah}}" >
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label">Nilai NJOP <span class="text-danger">*)</span></label>
                    <div class="col-sm-3">
                      <select class="form-control" name="njop"  >
												<option required disabled>-- pilih nilai njop --</option>
												<option value="< Rp 500 juta" @if($order->njop == "< Rp 500 juta") selected @endif>< Rp 500 juta</option>
												<option value="Rp 500 juta – Rp 1 milyar" @if($order->njop == "Rp 500 juta – Rp 1 milyar") selected @endif>Rp 500 juta – Rp 1 milyar</option>
												<option value="> Rp 1 milyar" @if($order->njop == "> Rp 1 milyar") selected @endif>> Rp 1 milyar</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Deposito Bank <span class="text-danger">*)</span></label>
                    <div class="col-sm-3">
                      <input maxlength="191" type="text" class="form-control" name="deposito_bank" value="{{$order->deposito_bank}}" >
                    </div>
					<div class="col-sm-3">
                      <select class="form-control" name="deposito"  >
												<option required disabled>-- pilih nilai deposito --</option>
												<option value="< Rp 50 juta" @if($order->deposito == "< Rp 50 juta") selected @endif>< Rp 50 juta</option>
												<option value="Rp 50 – Rp 100 juta" @if($order->deposito == "Rp 50 – Rp 100 juta") selected @endif>Rp 50 – Rp 100 juta</option>
												<option value="Rp 100 – Rp 250 juta" @if($order->deposito == "Rp 100 – Rp 250 juta") selected @endif>Rp 100 – Rp 250 juta</option>
												<option value="Rp 250 – Rp 500 juta" @if($order->deposito == "Rp 250 – Rp 500 juta") selected @endif>Rp 250 – Rp 500 juta</option>
												<option value="Rp 500 juta – Rp 1 milyar" @if($order->deposito == "Rp 500 juta – Rp 1 milyar") selected @endif>Rp 500 juta – Rp 1 milyar</option>
												<option value="> Rp 1 milyar" @if($order->deposito == "> Rp 1 milyar") selected @endif>> Rp 1 milyar</option>
                      </select>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label">Lainnya <span class="text-danger">*)</span></label>
                    <div class="col-sm-4">
                      <textarea name="daftar_kekayaan" class="form-control" rows="3" cols="80"  >{{$order->daftar_kekayaan}}</textarea>
                    </div>
                  </div>
				</div>
              </div>
			  <hr>
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04

							<p class="text-center"><em>––– List 3 of 3 » Data Rekening Bank & Dokumen yang Dilampirkan –––</em></p>

              <legend>REKENING BANK NASABAH UNTUK PENYETORAN DAN PENARIKAN MARGIN</legend>
							<div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Bank <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="100" type="text" class="form-control" name="nama_bank" value="{{$order->nama_bank}}">
=======
                      <input  type="text" class="form-control" name="nama_bank" value="{{$order->nama_bank}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Cabang <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="100" type="text" class="form-control" name="cabang" value="{{$order->cabang}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telepon <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
                      <input maxlength="20" type="text" class="form-control" name="telp_bank" value="{{$order->telp_bank}}">
=======
                      <input  type="text" class="form-control" name="cabang" value="{{$order->cabang}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telepon</label>
                    <div class="col-sm-9">
                      <input  type="text" class="form-control" name="telp_bank" value="{{$order->telp_bank}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nomor Rekening <span class="text-danger">*)</label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                        <input maxlength="20" type="text" class="form-control" name="no_rek" value="{{$order->no_rek}}">
=======
                        <input  type="text" class="form-control" name="no_rek" value="{{$order->no_rek}}">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Atas Nama <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
<<<<<<< HEAD
                      <input maxlength="30" type="text" class="form-control" name="nama_rek" value="{{$order->nama_rek}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Tabungan <span class="text-danger">*)</span></label>
                    <div class="col-sm-9">
											<select  class="form-control" name="jenis_tabungan">
												<option value="giro" @if($order->jenis_tabungan == 'giro') selected @endif>Giro</option>
												<option value="tabungan" @if($order->jenis_tabungan == 'tabungan') selected @endif>Tabungan</option>
												<option value="lainnya" @if($order->jenis_tabungan == 'lainnya') selected @endif>Lainnya</option>
=======
                      <input  type="text" class="form-control" name="nama_rek" value="{{$order->nama_rek}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Tabungan</label>
                    <div class="col-sm-9">
											<select  class="form-control" name="jenis_tabungan">
												<option value="giro" @if($order->jenis_tabungan == "giro") selected @endif>Giro</option>
												<option value="tabungan" @if($order->jenis_tabungan == "tabungan") selected @endif>Tabungan</option>
												<option value="lainnya" @if($order->jenis_tabungan == "lainnya") selected @endif>Lainnya</option>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
                      <input  type="file" name="id_card" id="id_card" value="" data-fv-file-extension="jpg,jpeg,png" accept="image/png,image/jpg,image/jpeg">
											<img src="{{asset($order->id_card)}}" class="img-responsive" alt="" />
											<a href="{{asset($order->id_card)}}" download="id_card">Download</a>
                    </div>
                  </div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Dokumen Lainnya <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input  type="file" name="rek_koran" id="rek_koran" value="" accept="image/png,image/jpg,image/jpeg,application/pdf">
											@if($ext == 'pdf')
												<img src="{{asset("img/admin/pdf.png")}}" class="img-responsive" height="100" width="100">
												<a href="{{asset($order->rek_koran)}}" download="rek_koran">Download</a>
											@else
												<img src="{{asset($order->rek_koran)}}" class="img-responsive" alt="" />
												<a href="{{asset($order->rek_koran)}}" download="rek_koran">Download</a>
											@endif
=======
                      <input  type="file" name="id_card" id="id_card" value="" data-fv-file-extension="jpg,jpeg,png">
											<img src="{{asset($order->id_card)}}" class="img-responsive" alt="" />
                    </div>
                  </div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Rekening Koran Bank <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
											<input  type="file" name="rek_koran" id="rek_koran" value="">
											<img src="{{asset($order->rek_koran)}}" class="img-responsive" alt="" />
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
											<span class="help-block">Rekening Koran Bank 3 Bulan terakhir / Surat Keterangan Bekerja / Surat Keterangan Pendapatan atau Laporan Keuangan 3 Bulan Terakhir / Tagihan Kartu Kredit / Rekening Listrik atau Telepon *)</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-3 control-label">Foto berwarna terbaru <span class="text-danger">*)</span></label>
										<div class="col-sm-9">
<<<<<<< HEAD
											<input  type="file" name="foto" id="foto" value="" accept="image/png,image/jpg,image/jpeg">
											<img src="{{asset($order->foto)}}" class="img-responsive" alt="" />
											<a href="{{asset($order->foto)}}" download="foto" >Download</a>
=======
											<input  type="file" name="foto" id="foto" value="">
											<img src="{{asset($order->foto)}}" class="img-responsive" alt="" />
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
												<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="ya">
													<label for="aproval_yes">Ya</label>
												</div>
												<br>
												<br>
												<div class="radio-custom radio-primary pull-left">
													<input type="radio" id="approval_yes" name="approval_yes" value="tidak">
=======

												<div class="radio-custom radio-primary">
													<input  type="radio" id="aproval_yes" name="approval_yes" value="ya" @if($order->approval_yes == "ya") checked="true" @endif>
													<label for="aproval_yes">Ya</label>
												</div>

												<div class="radio-custom radio-primary">
													<input  type="radio" id="aproval_no" name="approval_yes" value="tidak" @if($order->approval_yes == "tidak") checked="true" @endif>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
													<label for="aproval_no">Tidak</label>
												</div>
											</div>
									</div>
									<div class="form-group">

										<label class="col-sm-3 control-label">Menyatakan Tanggal</label>
										<div class="col-sm-9">
<<<<<<< HEAD
											<p class="form-control-static" id="date">{{$order->created_at->formatLocalized('%d %B %Y')}}</p>
=======
											<p class="form-control-static" id="date">{{$order->created_at->formatLocalized('%A %d %B %Y')}}</p>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
										</div>
									</div>
								</div>

							</div>

							<hr/>

							<legend class="text-center"><strong>KONFIRMASI UPDATE AKUN</strong></legend>
							@if ($errors->all())

							<div class="alert alert-danger">
								@foreach ($errors->all() as $key => $value)
									<p>{{$value}}</p>
								@endforeach
							</div>
						@endif
								<input type="hidden" name="request_id" value="{{$order->id}}">
								{{ csrf_field() }}
								<div class="row">
								<div class="col-sm-8 col-sm-offset-4">
									<div class="form-group">
										<div class="col-sm-4 col-sm-offset-2">
<<<<<<< HEAD
											<button disabled type="submit" name="button" class="btn btn-primary" disabled>Simpan</button>
=======
											<button type="submit" name="button" class="btn btn-primary">Simpan</button>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
										</div>
									</div>

								</div>
							</div>

							</form>

          </div>
					<div class="panel-footer">

					</div>
				</div>
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
	var today = new Date();
	var date = new Date();
	date.setFullYear( date.getFullYear() - 21 );
	date.setMonth( date.getMonth() + 1 );
<<<<<<< HEAD
	today.setMonth( today.getMonth() + 1 );
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
	var stat = document.getElementById("status_perkawinan");
	var status = stat.options[stat.selectedIndex].value;
	if(date.getMonth()<10){var limit_month = '0'+date.getMonth();}else{var limit_month = date.getMonth();}
	if(today.getMonth()<10){var today_month = '0'+today.getMonth();}else{var today_month = today.getMonth();}
	if(date.getDate()<10){var limit_date = '0'+date.getDate();}else{var limit_date = date.getDate();}
	if(today.getDate()<10){var today_date = '0'+today.getDate();}else{var today_date = today.getDate();}
	if(status=='tidak kawin'){
<<<<<<< HEAD
		var limit = (limit_date) + '-' + (limit_month) + '-' + (date.getFullYear() );
	}else{
		var limit = (today_date) + '-' + (today_month) + '-' + (today.getFullYear() );
	}
	
	if(status=='kawin'){
		$("#pasangan").show();
    }
    else{
        $("#pasangan").hide();
    }
	
	const DATEPICKER = $('.datepicker');
	DATEPICKER.each(function(key, item){
		$(item).datepicker({
			format: 'dd-mm-yyyy',
		})
		.on('changeDate', function(e) {
            // Revalidate the date field
            $('#form-update').formValidation('revalidateField', 'dob');
=======
		var limit = (date.getFullYear() ) + '-' + (limit_month) + '-' + (limit_date);
	}else{
		var limit = (today.getFullYear() ) + '-' + (today_month) + '-' + (today_date);
	}
	
	const DATEPICKER = $('.datepicker');
	DATEPICKER.each(function(key, item){
		$(item).datepicker({
			format: 'yyyy-mm-dd',
		})
		.on('changeDate', function(e) {
            // Revalidate the date field
            $('#form-register').formValidation('revalidateField', 'dob');
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		});
	});
		
	$('#status_perkawinan').change(function () {
		var stat = document.getElementById("status_perkawinan");
		var status = stat.options[stat.selectedIndex].value;
		if(date.getMonth()<10){limit_month = '0'+date.getMonth();}else{limit_month = date.getMonth();}
		if(today.getMonth()<10){today_month = '0'+today.getMonth();}else{today_month = today.getMonth();}
		if(date.getDate()<10){limit_date = '0'+date.getDate();}else{limit_date = date.getDate();}
		if(today.getDate()<10){today_date = '0'+today.getDate();}else{today_date = today.getDate();}
		if(status=='tidak kawin'){
<<<<<<< HEAD
			limit = (limit_date) + '-' + (limit_month) + '-' + (date.getFullYear() );
		}else{
			limit = (today_date) + '-' + (today_month) + '-' + (today.getFullYear() );
		}
		
			if(status=='kawin'){
				$("#pasangan").show();
			}
			else{
				$("#pasangan").hide();
			}
	
	
=======
			 limit = (date.getFullYear() ) + '-' + (limit_month) + '-' + (limit_date);
		}else{
			 limit = (today.getFullYear() ) + '-' + (today_month) + '-' + (today_date);
		}
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    });	
		$('#form-update').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Nama harus diisi'
<<<<<<< HEAD
=======
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'Nama hanya boleh diisi dengan huruf dan spasi'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
                        message: 'Tujuan harus diisi'
                    }
                }
            },
						place: {
                validators: {
                    notEmpty: {
                        message: 'Tempat lahir harus diisi'
<<<<<<< HEAD
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\s]+$/,
                        message: 'Tempat lahir hanya boleh diisi dengan huruf dan spasi'
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    }
                }
            },
			dob: {
                validators: {
                    notEmpty: {
                        message: 'Tanggal lahir harus diisi'
                    },
                    date: {
<<<<<<< HEAD
                        format: 'DD-MM-YYYY',
=======
                        format: 'YYYY-MM-DD',
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                        max: limit,
                        message: 'Tanggal lahir tidak memenuhi persyaratan'
                    }
                }
            },
            identity_number: {
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
			npwp: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'NPWP harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    numeric: {
                        message: 'NPWP hanya boleh angka'
                    }
                }
            },
			postcode: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Kode pos harus diisi'
                    },
                    numeric: {
                        message: 'Kode pos hanya boleh angka'
                    },
					stringLength: {
                        message: 'Maksimal kode pos adalah 6 digit',
                        max: 6,
                    }
                }
            },
			postcode_darurat: {
                validators: {
                    notEmpty: {
                        message: 'KOde pos harus diisi'
                    },
					numeric: {
                        message: 'Kode pos hanya boleh angka'
                    },
					stringLength: {
                        message: 'Maksimal kode pos adalah 6 digit',
                        max: 6,
=======
                    numeric: {
                        message: 'Kode pos hanya boleh angka'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    }
                }
            },
			telp_darurat: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Nomor telepon harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    numeric: {
                        message: 'Nomor telepon hanya boleh angka'
                    }
                }
            },
			telp_kantor: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Nomor telepon harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    numeric: {
                        message: 'Nomor telepon kantor hanya boleh angka'
                    }
                }
            },
			postcode_kantor: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'kode pos harus diisi'
                    },
                    numeric: {
                        message: 'Kode post kantor hanya boleh angka'
                    },
					stringLength: {
                        message: 'Maksimal kode pos adalah 6 digit',
                        max: 6,
=======
                    numeric: {
                        message: 'Kode post kantor hanya boleh angka'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    }
                }
            },
			lama_bekerja: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Lama bekerja harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    numeric: {
                        message: 'Lama bekerja hanya boleh angka'
                    }
                }
            },
			kantor_sebelum: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Lama bekerja di kantor sebelumnya harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                    numeric: {
                        message: 'Lama bekerja di kantor sebelumnya hanya boleh angka'
                    }
                }
            },
			telp_bank: {
                validators: {
<<<<<<< HEAD
					notEmpty: {
                        message: 'Nomor telepon harus diisi'
                    },
                    numeric: {
                        message: 'Nomor telepon hanya boleh angka'
                    }
                }
            },
			telpon_rumah: {
                validators: {
					notEmpty: {
                        message: 'Nomor telepon harus diisi'
                    },
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
			keluarga_kbi: {
				enabled: false,
                validators: {
                    stringLength: {
                        message: 'Maaf anda tidak bisa lanjut karena memiliki anggota keluarga yang bekerja di BAPPEBTI/Bursa Berjangka/Kliring Berjangka',
                        min: 5,
                    }
                }
            },
			pailit: {
				enabled: false,
                validators: {
                    stringLength: {
                        message: 'Maaf anda tidak bisa lanjut karena telah dinyatakan pailit oleh Pengadilan',
                        min: 5,
                    }
                }
            },
			approval_yes: {
                validators: {
<<<<<<< HEAD
					notEmpty : {
						message : '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas'
					},
                    stringLength: {
                        message: '<br><br><br>Anda harus menyetujui dan menerima pernyataan diatas',
=======
                    stringLength: {
                        message: 'Anda harus menyetujui dan menerima pernyataan diatas',
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                        max: 2,
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
<<<<<<< HEAD
						pasangan : {
							enabled: false,
							validators : {
								notEmpty : {
									message : 'Nama suami/istri harus diisi'
								}
							}
						},
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
									message : 'Nomor telepon harap diisi'
=======
									message : 'Nomor telepon harap disi'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								},
								numeric: {
									message: 'Nomor telepon hanya boleh angka'
								}
							}
						},
						hubungan_darurat : {
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Hubungan harap diisi'
=======
									message : 'Hubungan harap disi'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								}
							}
						},
						alamat_darurat : {
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Alamat harap diisi'
=======
									message : 'Alamat harap disi'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
									message : 'Nama Bank harus diisi'
								}
							}
						},
						bidang_usaha : {
							validators : {
								notEmpty: {
									message: 'Bidang usaha harus diisi'
								}
							}
						},
						jabatan : {
							validators : {
								notEmpty: {
									message: 'Jabatan harus diisi'
								}
							}
						},
						lokasi_rumah : {
							validators : {
								notEmpty: {
									message: 'Lokasi rumah harus diisi'
								}
							}
						},
						deposito_bank : {
							validators : {
								notEmpty: {
									message: 'Deposito Bank harus diisi'
=======
									message : 'Isi nama bank'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								}
							}
						},
						no_rek : {
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Nomor rekening harus diisi'
=======
									message : 'Harap isi nomor rekening'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								},
								numeric: {
									message: 'Nomor rekening hanya boleh angka'
								}
							}
						},
						nama_rek : {
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Nama pemegang rekening harus diisi'
								}
							}
						},
						alamat_kantor : {
							validators : {
								notEmpty : {
									message : 'Alamat kantor harus diisi'
								}
							}
						},
						nama_perusahaan : {
							validators : {
								notEmpty : {
									message : 'Nama perusahaan harus diisi'
								}
							}
						},
						daftar_kekayaan : {
							validators : {
								notEmpty : {
									message : 'Lainnya harus diisi'
=======
									message : 'Harap isi nama'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								}
							}
						},
						cabang : {
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Cabang harus diisi'
=======
									message : 'Harap pilih cabang'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								}
							}
						},
						id_card : {
							enabled: false,
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
							enabled: false,
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Dokumen lainnya diperlukan'
								},
								file: {
									extension: 'jpg,jpeg,png,pdf',
									type: 'image/png,/image/jpg,image/jpeg,application/pdf',
									message: 'Hanya support file png,jpg,jpeg dan pdf'
=======
									message : 'Identitas diperlukan'
								},
								file: {
									extension: 'jpg,jpeg,png',
									type: 'image/png,/image/jpg,image/jpeg',
									message: 'Hanya file gambar'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								}
							}
						},
						foto : {
							enabled: false,
							validators : {
								notEmpty : {
<<<<<<< HEAD
									message : 'Foto diperlukan'
=======
									message : 'Identitas diperlukan'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
								},
								file: {
									extension: 'jpg,jpeg,png',
									type: 'image/png,/image/jpg,image/jpeg',
									message: 'Hanya file gambar'
								}
							}
						}
		}
    }).on('change', '[name="status_perkawinan"]', function(e) {

           $('#form-update').formValidation('updateOption', 'dob', 'date', 'max', limit);
<<<<<<< HEAD
		   if ($(this).val() == 'kawin') {
				$('#form-update').formValidation('enableFieldValidators', 'pasangan');
                $('#form-update').formValidation('validateField', 'pasangan');
            }
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    }).on('change', '[name="keluarga_kbi"]', function(e) {
           $('#form-update').data('formValidation').enableFieldValidators('keluarga_kbi', true);
    }).on('change', '[name="pailit"]', function(e) {

           $('#form-update').data('formValidation').enableFieldValidators('pailit', true);
    }).on('change', '[name="id_card"]', function(e) {

           $('#form-update').data('formValidation').enableFieldValidators('id_card', true);
    }).on('change', '[name="rek_koran"]', function(e) {

           $('#form-update').data('formValidation').enableFieldValidators('rek_koran', true);
    }).on('change', '[name="foto"]', function(e) {

           $('#form-update').enableFieldValidators('foto', true);
<<<<<<< HEAD
    }); 
=======
    });    
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
});
</script>
@endsection
