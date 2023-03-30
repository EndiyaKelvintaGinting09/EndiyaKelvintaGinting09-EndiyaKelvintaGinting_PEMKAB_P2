@extends('_layouts.master')

@section('tab_title', 'Beranda')

@section('css')
@endsection

@section('content')
    <section class="section">
        <div class="section-header d-flex flex-column justify-content-center bg-transparent shadow-none">
            <h1>Layanan Pengaduan Masyarakat Kp. Balandongan</h1>
        </div>
            <div class="row">
                <div class="col-3 d-flex">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="mt-4">1. Tulis Laporan</h5>
                            <p>Tulis laporan atau keluhan Anda dengan memperhatikan tata bahasa yang baik dan benar</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="mt-4">2. Proses Verifikasi</h5>
                            <p>Tunggu laporan atau keluhan Anda diverifikasi oleh petugas</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="mt-4">3. Tindak Lanjut</h5>
                            <p>Laporan atau keluhan Anda sedang ditindak lanjut</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="mt-4">4. Selesai</h5>
                            <p>Laporan atau keluhan Anda telah selesai ditindak</p>
                        </div>
                    </div>
                </div>
                <div class="row">
            <div>
            <div class="container-fluid py-4">
            <div class="row">
                <!-- Start Management Total Belum Diproses -->
                <div class="section-header d-flex flex-column justify-content-center bg-transparent shadow-none">
                  <center><h1>Layanan Pengaduan Masyarakat Kp. Balandongan</h1></center>
                  <br><br><br><br>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Belum Proses</div>
            <div class="number"{{ $laporan_pending }}>1</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
         <!-- End Management Total Belum Diproses -->

         <!-- Start Management Diproses -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Diproses</div>
            <div class="number"> {{ $laporan_proses }}</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart' ></i>
        </div>
        <!-- End Management Diproses -->

        <!-- Start Management Selesai -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Selesai</div>
            <div class="number">{{ $laporan_selesai }}</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart two' ></i>
        </div>
        <!-- End Management Selesai -->

        <!-- Start Peminjaman Status Ditolak  -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Ditolak</div>
            <div class="number">{{  $laporan_ditolak }}</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart three' ></i>
        </div>
      </div>
      <!-- End Peminjaman Status Ditolak -->
        
       <!-- Start Status Laporan -->
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Laporan</div>
            <div class="number">{{ $semua_laporan }}</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
         <!-- End Status Total Laporan -->
            </div>
        </div>
    </section>
@endsection