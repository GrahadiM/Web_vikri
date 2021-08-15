
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="{{ url('/home') }}" class="navbar-brand">
                    <img src="{{ asset('assets') }}/dist/img/LogoEsgul.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                    <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-book"></i> Kuesioner</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                @if (auth()->user()->role_id == 1)
                                <li><a href="{{ route('adminKuesioner') }}" class="dropdown-item">Lihat Data Kuesioner</a></li>
                                <li class="dropdown-divider"></li>
                                @endif
                                <li><a href="{{ route('dosenTetap.index') }}" class="dropdown-item">Dosen Tetap</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('dosenTidakTetap.index') }}" class="dropdown-item">Dosen Tidak Tetap</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('dosenPembimbingTA.index') }}" class="dropdown-item">Dosen Pembimbing Utama Tugas Akhir</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-cog"></i> Settings</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="{{ url('/profile') }}" class="dropdown-item">Profile</a></li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    {{-- <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item dropdown">
                    <!-- Sidebar user (optional) -->
                        <div class="user-panel d-flex">
                            <div class="info">
                                {{ Auth::user()->name }} || {{ Auth::user()->role->name }}
                            </div>
                            <div class="image">
                                @if (Auth::user()->image == null)
                                <img src="{{ asset('assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                                @else
                                <img src="{{ asset('img/profile') }}/{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
