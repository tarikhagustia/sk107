@extends('admin.layouts.main') @section('css')
<link rel="stylesheet" href="{{asset('css/admin/jquery-wizard.min.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/formValidation.min.css')}}">
 @endsection @section('content')
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
						<div class="panel-title">PERATURAN PERDAGANGAN (TRADING RULES)</div>
					</div>
					<div class="panel-body">
						<form action="index.html" method="post" class="form-horizontal">
							<div class="row">
								<div class="col-sm-6">
									<span><strong>Formulir Nomor : 107.PBK.06</strong></span>
								</div>
								<div class="col-sm-6">
									<p class="pull-right">
										Lampiran Peraturan Kepala Badan Pengawas Perdagangan Berjangka Komoditi <br/>Nomor : 107/BAPPEBTI/PER/11/2013</p>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-2">
									<b>TRADING RULES KONTRAK BERJANGKA :</b><br>
									<ul>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING RULES KONTRAK GULIR EMAS US DOLLAR.pdf" target="_blank">TRADING RULES KONTRAK GULIR EMAS US DOLLAR</a>
										</li>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING RULES KONTRAK GULIR MINI EMAS US DOLLAR.pdf" target="_blank">TRADING RULES KONTRAK GULIR MINI EMAS US DOLLAR</a>
										</li>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING RULES KONTRAK BERJANGKA EMAS 100 GRAM.pdf" target="_blank">TRADING RULES KONTRAK BERJANGKA EMAS 100 GRAM</a>
										</li>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING RULES KONTRAK KOPI ARABIKA.pdf" target="_blank">TRADING RULES KONTRAK KOPI ARABIKA</a>
										</li>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING RULES KONTRAK KOPI ROBUSTA.pdf" target="_blank">TRADING RULES KONTRAK KOPI ROBUSTA</a>
										</li>
									</ul>
									<br>
									<b>TRADING RULES KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN ALTERNATIF :</b><br>
									<ul>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/TRADING-RULES-FOREX-dan-LLG-ONLINE-Reguler-Online-Summer-Time-Revisi-13062017.pdf" target="_blank">TRADING RULES FOREIGN EXCHANGE (MATA UANG ASING) &amp; LOCO LONDON GOLD (EMAS LOCO LONDON)</a>
										</li>
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/FOREX-dan-LLG-ONLINE-Reguler-Online-Summer-Time-10032017.pdf" target="_blank">TRADING RULES FOREIGN EXCHANGE (MATA UANG ASING) & LOCO LONDON GOLD (EMAS LOCO LONDON)</a></li>-->
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/TRADING RULES STOCK INDEX (INDEKS SAHAM) REGULER.pdf" target="_blank">TRADING RULES STOCK INDEX (INDEKS SAHAM)</a></li>-->
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/TRADING-RULES-LLG-Reguler-Winter-Time-REVISI-27012015.pdf" target="_blank">TRADING RULES LOCO LONDON GOLD (EMAS LOCO LONDON)</a></li>-->
									</ul>
									<br>
									<b>TRADING RULES KONTRAK DERIVATIF DALAM SISTEM PERDAGANGAN ALTERNATIF :<br>
									 Dengan volume 0,1 (nol koma satu) lot yang diperdagangkan :<br></b>
									<ul>
										<li>
											<img class="doc2pdf" src="{{ asset('img/pdf-icon.png') }}"><a href="/docs/WINTER-TRADING-RULES-FOREX-dan-LLG-ONLINE-Lot-kecil-Online-Summer-Time-13062017.pdf" target="_blank">TRADING RULES FOREIGN EXCHANGE (MATA UANG ASING) &amp; LOCO LONDON GOLD (EMAS LOCO LONDON)</a>
										</li>
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/FOREX-dan-LLG-ONLINE-Lot-Kecil-Online-Summer-Time-10032017.pdf" target="_blank">TRADING RULES FOREIGN EXCHANGE (MATA UANG ASING) & LOCO LONDON GOLD (EMAS LOCO LONDON)</a></li>-->
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/TRADING RULES STOCK INDEX (INDEKS SAHAM) MINI.pdf" target="_blank">TRADING RULES STOCK INDEX (INDEKS SAHAM)</a></li>-->
										<!--<li><img class="doc2pdf" src="/images/pdf-icon.png"><a href="/docs/TRADING-RULES-LLG-Lot-Kecil-Winter-Time-Revisi-27012015.pdf" target="_blank">TRADING RULES LOCO LONDON GOLD (EMAS LOCO LONDON)</a></li>-->
									</ul>
								</div>
							</div>
							<hr/>
							<p class="text-center">
								Dengan mengisi kolom “YA” di bawah ini, saya menyatakan bahwa saya telah membaca, <b>PERATURAN PERDAGANGAN (TRADING RULES), </b> mengerti dan menerima ketentuan dalam bertransaksi.
							</p>
							<div class="row">
								<div class="col-sm-8 col-sm-offset-4">
									<div class="form-group">
										<label class="col-sm-3 control-label">Pernyataan menerima <span class="text-danger">*)</span></label>
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
										<label class="col-sm-3 control-label">Menyatakan pada Tanggal</label>
										<div class="col-sm-9">
											<p class="form-control-static">1 Juni</p>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-primary " name="button">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page -->
 @endsection @section('js')
<script src="{{ asset('js/admin/formValidation.min.js') }}"></script>
<script src="{{ asset('js/admin/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/admin/jquery-wizard.min.js') }}"></script>
@endsection
