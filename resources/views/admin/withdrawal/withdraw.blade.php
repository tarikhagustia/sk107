@extends('admin.layouts.main');

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
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
             </div>

             <div class="col-lg-6">
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
               <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">Saya Ingin Withdraw Sebanyak</label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="amount" placeholder="Rp." data-fv-field="type_numberic" required="">
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
<link rel="stylesheet" href="{{ asset('js/admin/formValidation.min.js') }}">
@endsection
