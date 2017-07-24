@if (Auth::user()->activated == false)

  <div class="alert alert-danger">
    <p>Akun anda belum aktif, silahkan cek kotak masuk di email anda</p>
  </div>

@endif
