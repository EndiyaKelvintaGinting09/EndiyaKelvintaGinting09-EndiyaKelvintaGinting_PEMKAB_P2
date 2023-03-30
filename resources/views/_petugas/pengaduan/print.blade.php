<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>@yield('tab_title') | {{ config('app.name') }}</title>

	<!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome-5.7.2/css/all.css') }}">

	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
	<div id="app" style="overflow-x: hidden;">
		<div class="main-wrapper">
			<!-- Main Content -->
			<div class="main-content p-0">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="card pl-3 pr-2 m-0">
                                    <div class="card-header d-flex justify-content-center">
                                        <img src="{{ asset('assets/img/logopdf.png') }}" class="img-fluid" style="width:auto;max-width:100px;"><br>
                                        <h3 class="text-black mb-0 mt-2">Pengaduan Masyarakat Kp. Balandongan</h3>
                                    </div>     
                                    <div class="card-body">
                                        <div class="text-right">
                                            <p>{{ date('l, d F Y ', strtotime($data->tgl_pengaduan)) }}</p>
                                        </div>
                                        <br><br>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Nomor : </b></div><div>{{ $data->id_pengaduan }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>NIK : </b></div><div>{{ $data->nik }}</div>
                                        <br>
                                    </div> <div class="row mb-2">
                                        <div class="col-3"><b>Tanggapan : </b></div><div>{{ $data->tanggapan->tanggapan }}</div>
                                        <br>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Nama Pelapor : </b></div><div>{{ $data->masyarakat->nama }}</div>
                                        <br>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Tanggal Pengaduan : </b></div><div>{{ date('d M Y h.i.s', strtotime($data->tgl_pengaduan)) }}</div>
                                        <br>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Tanggal Tanggapan :  </b></div><div>{{ date('d M Y h.i.s ', strtotime($data->tanggapan->tgl_tanggapan)) }}</div>
                                        <br>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Judul Pelapor : </b></div><div>{{ $data->judul_laporan}}</div>
                                        <br>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-3"><b>Status : </b></div><p>{{ $data->status}}</p>
                                    </div>
                                    <div class="row mb-2">
                                            <div class="col-3"><b>Isi Laporan : </b></div><p>{{ $data->isi_laporan }}</p>
                                        </div>
                                        <br>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

	<!-- General JS Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/modules/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="{{ asset('assets/js/stisla.js') }}"></script>

	<!-- Template JS File -->
    <script src="{{ asset('assets/js/jquery.printPage.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
