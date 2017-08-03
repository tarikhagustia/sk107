@extends('admin.layouts.main');

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
@endsection

@section('content')
<!-- Page -->
 <div class="page">
   <div class="page-header">
     <h1 class="page-title">Permintaan Withdraw</h1>
   </div>
   <div class="page-content container-fluid">
     <!-- Panel Full Example -->
     <div class="panel">
       <div class="panel-body">
         <form id="exampleFullForm" autocomplete="on" method="POST">
           <div class="row row-lg">
             <div class="col-lg-6">
               <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">Nama
                   <span class="required">*</span>
                 </label>
                 <div class=" col-lg-12 col-sm-9">
                   <input type="text" class="form-control" name="username" placeholder="John Fish"
                   required="">
                 </div>
               </div>

               <div class="form-group form-material">
                 <label class="col-lg-12 col-sm-3 control-label">Email
                   <span class="required">*</span>
                 </label>
                 <div class="col-lg-12 col-sm-9">
                     <input type="email" class="form-control" name="email" placeholder="email@email.com"
                     required="">
                 </div>
               </div>
               <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">No Tlp</label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="type_phone" placeholder="(XXX) XXXX XXX" data-fv-field="type_phone">
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
                     <div>
                       <div class="radio-custom radio-primary">
                         <input type="radio" id="inputAwesome" name="porto_is" value="awesome" required="">
                         <label for="inputAwesome">123</label>
                       </div>
                     </div>
                     <div>
                       <div class="radio-custom radio-primary">
                         <input type="radio" id="inputVeryAwesome" name="porto_is" value="very-awesome">
                         <label for="inputVeryAwesome">456</label>
                       </div>
                     </div>
                     <div>
                       <div class="radio-custom radio-primary">
                         <input type="radio" id="inputUltraAwesome" name="porto_is" value="ultra-awesome">
                         <label for="inputUltraAwesome">789</label>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="form-group form-material">
                <label class="col-lg-12 col-sm-3 control-label">Saya Ingin Withdraw Sebanyak</label>
                <div class="col-lg-12 col-sm-9">
                  <input type="text" class="form-control" name="type_numberic" placeholder="Rp." data-fv-field="type_numberic">
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
