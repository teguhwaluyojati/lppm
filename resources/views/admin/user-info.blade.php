<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil User - LPPM ISTEK WIDURI</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/style2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('img/logo.png') }}" alt="LPPM Logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">LPPM ISTEK WIDURI</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Admin</div>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('user-info') }}">
                    <i class="fas fa-user-alt"></i>
                    <span>Profil Saya</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/gantipassword">
                    <i class="fas fa-key"></i>
                    <span>Ubah Password</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <form id="logoutForm" method="POST" action="{{ route('auth.logout') }}" style="display: none;">
            @csrf
        </form>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="{{ route('user-info') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <a class="dropdown-item" href="/gantipassword">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>

                <!-- Main Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Nama Lengkap:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Email:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">NIDN:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->nidn ?? '-' }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">No. Telepon:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->phone ?? '-' }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Alamat:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->address ?? '-' }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Unit:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->unit ?? '-' }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Jabatan:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">{{ Auth::user()->role->name ?? '-' }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Status:</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-plaintext">
                                                <span class="badge {{ Auth::user()->status === 'active' ? 'badge-success' : 'badge-danger' }}">
                                                    {{ Auth::user()->status === 'active' ? 'Aktif' : 'Tidak Aktif' }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                {{-- <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
                                </div>
                                <div class="card-body">
                                    <a href="/gantipassword" class="btn btn-primary btn-block mb-2">
                                        <i class="fas fa-key"></i> Ubah Password
                                    </a>
                                    <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-block">
                                        <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
                                    </a>
                                </div> --}}
                            </div>

                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kontak Bantuan</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small text-secondary">
                                        Untuk pertanyaan lebih lanjut terkait profil anda, silakan menghubungi administrator LPPM.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; LPPM ISTEK WIDURI 2026</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Logout</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin logout?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('logoutForm').submit();">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
