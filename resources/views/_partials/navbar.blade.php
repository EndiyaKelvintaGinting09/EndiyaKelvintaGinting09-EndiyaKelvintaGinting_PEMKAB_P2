<nav class="navbar navbar-expand-lg main-navbar bg-primary w-100">
    <div class="container"></div>
        <div class="navbar-nav">
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
            <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                <i class="fas fa-ellipsis-v"></i>
                <img src="{{ asset('assets/img/logopdf.png') }}" class="img-fluid" style="width:auto;max-width:100px;"><br>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="nav-link">Beranda</a></li>
                @auth('masyarakat')
                    <li class="nav-item {{ Route::is('laporan') ? 'active' : '' }}"><a href="{{ route('laporan') }}" class="nav-link">Laporan</a></li>
                @endauth
                
            </ul>
        </div>
        <div class="ml-auto d-flex align-items-center justify-content-center">
            @guest('masyarakat')    
                <div class="order-5">
                    <a href="javascript:void(0)" class="btn btn-outline-white" style="cursor: pointer" data-toggle="modal" data-target="#modalRegister">Daftar</a>
                </div>
            @endguest
            <ul class="navbar-nav navbar-right">
                @guest('masyarakat')
                    <a href="javascript:void(0)" class="nav-link font-weight-bold" style="cursor: pointer" data-toggle="modal" data-target="#modalLogin">Masuk</a><span class="text-white">
                @endguest
                @auth('masyarakat')
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>