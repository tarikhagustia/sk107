@extends('admin.layouts.main');

@section('css')
<link rel="stylesheet" href="{{asset('vendor/formvalidation/formValidation.min.css')}}">
@endsection

@section('content')
<!-- Page -->
<!-- <?php
// var_dump($account);
?> -->

 <div class="page">
   <div class="page-header">
     <h1 class="page-title">Permintaan Withdraw</h1>
   </div>
   <div class="page-content container-fluid">
     <!-- Panel Full Example -->
     <div class="panel">
       <div class="panel-body">
         <form id="exampleFullForm" autocomplete="on" action="{{ url('admin/subwithdrawal') }}" method="post">
           {{ csrf_field() }}
           <div class="row row-lg">
             <div class="col-lg-6">
               <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">Nama
                   <span class="required">*</span>
                 </label>
                 <div class=" col-lg-12 col-sm-9">
                   <input type="text" class="form-control" name="username" value="{{ Auth::user()->name }}"
                   required="">
                 </div>
               </div>

               <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">Email
                   <span class="required">*</span>
                 </label>
                 <div class="col-lg-12 col-sm-9">
                     <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"
                     required="">
                 </div>
               </div>
               <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">No Telepon/Hp
                <span class="required">*</span></label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="type_phone" value="{{ Auth::user()->phone }}" data-fv-field="type_phone" required="">
                <small class="help-block" data-fv-validator="phone" data-fv-for="type_phone" data-fv-result="NOT_VALIDATED" style="display: none;">The value is not an phone(US)</small></div>
              </div>
			  <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">Bank
                <span class="required">*</span></label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="bank" value="{{ $datas->nama_bank }}">
                </div>
              </div>
			  <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">No Rekening
                <span class="required">*</span></label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="no_rek" value="{{ $datas->no_rek }}">
                </div>
              </div>
			  <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">Nama Pemilik Rekening
                <span class="required">*</span></label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="nama_rek" value="{{ $datas->nama_rek }}">
                </div>
              </div>
             </div>

             <div class="col-lg-6">
<<<<<<< HEAD
                              <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">Nomor Account : @if(!empty($account)){{ $account->login }}@else @endif</label>
				 <div class="col-lg-12 col-sm-9">
				   <input type="hidden" class="form-control" name="noaccount" value="@if(!empty($account)){{ $account->login }}@else @endif">
				 </div>
               </div>
				<div class="form-group form-material">
				  <label class="col-lg-12 col-sm-3 control-label">Mata Uang</label>
				  <div class="col-lg-12 col-sm-9">
					<select class="form-control" name="currency" id="currency">
					  <option value="IDR" selected>Indonesian Rupiah</option>
					  <option value="USD">US Dollar</option>
					</select>
				  </div>
				</div>
=======
               <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">No Account
                   <span class="required">*</span>
                 </label>
                 <div class="col-lg-12 col-sm-9">
                   <div class="input-group">
                     @foreach ($account as $row)
                     <div>
                       <div class="radio-custom radio-primary">
                         <input type="radio" id="inputUltraAwesome" name="noaccount" value="{{ $row->login }}" required="">
                         <label for="inputUltraAwesome">{{ $row->login }}</label>
                       </div>
                     </div>
                     @endforeach
                   </div>
                 </div>
               </div>
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
               <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">Jumlah</label>
                <div class="col-lg-12 col-sm-9">
<<<<<<< HEAD
                  <input type="text" class="form-control" name="amount" data-fv-field="type_numberic" required="">
=======
                  <input type="text" class="form-control" name="amount" placeholder="Rp." data-fv-field="type_numberic" required="">
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
                <small class="help-block" data-fv-validator="integer" data-fv-for="type_numberic" data-fv-result="VALID" style="display: none;">The value is not an number</small></div>
              </div>
             </div>

             <div class="form-group form-material col-lg-12 text-right"><br>
               <span style="padding-right:1em"><button type="submit" class="btn btn-primary" id="validateButton1">Request Withdrawal</button></span>
             </div>
           </div>
         </form>
       </div>
     </div>
     <!-- End Panel Full Example -->
   </div>
 </div>
 <!-- End Page -->
@endsection


@section('js')
<script src="{{ asset('vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('vendor/formvalidation/bootstrap.min.js') }}"></script>
<script>
$(document).ready(function() {	
		$('#exampleFullForm').formValidation({
        framework: 'bootstrap',
        fields: {
						bank : {
							validators : {
								notEmpty : {
									message : 'Bank harus diisi'
								}
							}
						},
						no_rek : {
							validators : {
								notEmpty : {
									message : 'Nomor rekening harus diisi'
								},
								numeric: {
									message: 'Nomor rekening hanya boleh angka'
								}
							}
						},
						nama_rek : {
							validators : {
								notEmpty : {
									message : 'Nama pemegang rekening harus diisi'
								}
							}
						}
		}
    })	
});
</script>
@endsection
