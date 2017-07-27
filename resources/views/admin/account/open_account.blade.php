@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{asset('css/admin/lightbox.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/formvalidation/formValidation.min.css')}}">

<style media="screen">
.list-group-item .active {
  color: white;

}
li.active>table>tbody>tr>td>h3>a {
  color : white !important;

}
.table a {
    text-decoration: none;
}
li.active>table {
  color : white !important;
}
li.list-group-item.disabled {
  opacity: 0.1;
}
</style>
@endsection

@section('content')
<!-- Page -->
  <div class="page animsition" style="animation-duration: 800ms; opacity: 1;" id="open-account-real">
    <div class="page-header">
      <h1 class="page-title">Buka Akun</h1>
    </div>
    <div class="page-content">
      <!-- Panle List -->
      <div class="panel">
        <form class="" action="{{route('create.account.real.post')}}" method="post">
          <input type="hidden" name="order_id" value="{{$order->id}}">
        {{ csrf_field() }}
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
                  <div class=""  v-for="(job, index) in task">
                    <li class="list-group-item" :class="job.status">
                      <p>@{{index + 1}}. @{{job.title}}</p>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td width="5%">
                              <div class="" v-if="job.status == 'active'">
                                <span class="checkbox-custom checkbox-primary">
                                  <input class="selectable-item" type="checkbox" id="row-619" value="619" checked disabled>
                                  <label for="row-619"></label>
                                </span>
                              </div>
                              <div class="" v-else>
                                <span class="checkbox-custom checkbox-primary">
                                  <input class="selectable-item" type="checkbox" id="row-619" value="619" disabled>
                                  <label for="row-619"></label>
                                </span>
                              </div>
                            </td>
                            <td>
                              <Modal :data-title="job.title" :data-url="job.action_url" :data-action="job.action" />
                            </td>
                            <td class="text-right">Print & Download</td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                  </div>

                </ul>
              </div>
              <!-- End Example Bordered -->
            </div>
          </div>
        </div>
        <div class="panel-footer">
          @if($order->tasks()->where('task_id', 8)->first()->status == "active")
            <button type="submit" class="btn btn-primary btn-lg" name="button">Lanjutkan</button>
          @endif
        </div>
      </form>

      <!-- End Panle List -->
    </div>
  </div>
  <!-- End Page -->
@endsection

@section('js')
<script src="{{ asset('vendor/formvalidation/formValidation.min.js') }}"></script>
<script src="{{ asset('vendor/formvalidation/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/admin/open-real-account.js') }}"></script>
<script type="text/javascript">

</script>
@endsection
