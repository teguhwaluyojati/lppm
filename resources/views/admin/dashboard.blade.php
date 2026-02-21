<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LPPM ISTEK WIDURI - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/style2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('img/logo.png') }}" alt="LPPM Logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">LPPM ISTEK WIDURI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

             <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-info') }}">
                    <i class="fas fa-user-alt"></i>
                    <span>User</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/gantipassword">
                    <i class="fas fa-key"></i>
                    <span>Password</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user-alt"></i>
                    <span>Data User</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/inputdosen">Data Dosen</a>
                        <a class="collapse-item" href="/inputdatajabatan">Data Karyawan Lppm</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Data</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Silakan Pilih :</h6>
                        <a class="collapse-item" href="utilities-color.html">Data Penelitian</a>
                        <a class="collapse-item" href="utilities-color.html"> Data Pengabdian Masyarakat</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Silakan Pilih :</h6>
                        <a class="collapse-item" href="utilities-color.html">Penelitian</a>
                        <a class="collapse-item" href="utilities-color.html">Pengabdian Masyarakat</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Logout Form (Hidden) -->
        <form id="logoutForm" method="POST" action="{{ route('auth.logout') }}" style="display: none;">
            @csrf
        </form>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/man.png') }}" style="width: 30px; height: 30px;">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('user-info') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Dosen -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Dosen</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">35</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x" style="color: #4e73df;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Setuju Laporan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Setuju Laporan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check-square fa-2x" style="color: #1cc88a;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tolak Laporan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: red;">
                                                Tolak Laporan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-window-close fa-2x" style="color: red;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x" style="color: #f6c23e;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Upload Laporan Penelitian</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Dosen
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Setuju Laporan
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Tolak Laporan
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> Pending Laporan
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabel Proposal -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Proposal</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                                <div id="uploadProposalBox" style="display:none; margin-bottom:24px;">
                                                    <form id="uploadProposalForm" enctype="multipart/form-data" class="mb-3">
                                                        <div class="form-row align-items-end">
                                                            <div class="form-group col-md-3">
                                                                <label for="proposalTitle">Judul</label>
                                                                <input type="text" class="form-control" id="proposalTitle" name="title" maxlength="255">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="proposalDescription">Deskripsi</label>
                                                                <input type="text" class="form-control" id="proposalDescription" name="description">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="proposalFile">File Proposal (PDF)</label>
                                                                <input type="file" class="form-control-file" id="proposalFile" name="file" accept="application/pdf" required>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <button type="submit" class="btn btn-primary btn-block">Upload Proposal</button>
                                                            </div>
                                                        </div>
                                                        <div id="uploadProposalMsg" class="mt-2"></div>
                                                    </form>
                                                </div>
                                        <table class="table table-bordered table-striped table-hover align-middle" id="proposalTable" style="min-width:1100px;">
                                            <thead class="thead-dark">
                                                <tr id="proposalTableHeaderRow">
                                                    <th style="width:40px;">ID</th>
                                                    <th style="width:180px;">Judul</th>
                                                    <th style="width:260px;">Deskripsi</th>
                                                    <th style="width:90px;">Status</th>
                                                    <th style="width:120px;">Pengusul</th>
                                                    <th style="width:120px;">Reviewer</th>
                                                    <th style="width:110px;">Tanggal</th>
                                                    <th style="width:90px;">Berkas</th>
                                                    <th style="width:120px; display:none;" id="aksiHeader">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 0.97rem;">
                                                <!-- Data akan diisi oleh JavaScript -->
                                            </tbody>
                                        </table>
                                        <style>
                                            #proposalTable th, #proposalTable td {
                                                vertical-align: middle !important;
                                                white-space: nowrap;
                                                text-overflow: ellipsis;
                                                overflow: hidden;
                                            }
                                            #proposalTable td {
                                                max-width: 220px;
                                            }
                                            @media (max-width: 1200px) {
                                                #proposalTable { font-size: 0.92rem; }
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container">
                    <div class="copyright text-center">
                        <span>Copyright &copy; LPPM ISTEK WIDURI 2026</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin logout dari sistem?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="button" onclick="document.getElementById('logoutForm').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/script2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let isDosen = false;
        // Cek role user, jika dosen tampilkan form upload dan sembunyikan kolom aksi
        fetch('/api/user', {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-XSRF-TOKEN': decodeURIComponent(document.cookie.match('XSRF-TOKEN=([^;]+)')?.[1] || '')
            },
            credentials: 'same-origin'
        })
        .then(res => res.json())
        .then(user => {
            if (user && user.role && user.role.name === 'dosen') {
                isDosen = true;
                document.getElementById('uploadProposalBox').style.display = '';
                document.getElementById('aksiHeader').style.display = 'none';
            } else {
                isDosen = false;
                document.getElementById('aksiHeader').style.display = '';
            }
            loadProposals();
        });

        // Handle upload proposal
        const uploadForm = document.getElementById('uploadProposalForm');
        if (uploadForm) {
            uploadForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(uploadForm);
                const msg = document.getElementById('uploadProposalMsg');
                msg.innerHTML = '';
                fetch('/api/proposals', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': decodeURIComponent(document.cookie.match('XSRF-TOKEN=([^;]+)')?.[1] || '')
                    },
                    credentials: 'same-origin',
                    body: formData
                })
                .then(async res => {
                    if (res.ok) {
                        msg.innerHTML = '<span class="text-success">Upload berhasil!</span>';
                        uploadForm.reset();
                        loadProposals();
                    } else {
                        const data = await res.json();
                        msg.innerHTML = '<span class="text-danger">Gagal upload: ' + (data.message || 'Terjadi kesalahan') + '</span>';
                    }
                })
                .catch(() => {
                    msg.innerHTML = '<span class="text-danger">Gagal upload: Terjadi kesalahan koneksi</span>';
                });
            });
        }
        function statusBadge(status) {
            if (status === 'approved') return '<span class="badge badge-success">Approved</span>';
            if (status === 'declined') return '<span class="badge badge-danger">Declined</span>';
            return '<span class="badge badge-primary">Waiting</span>';
        }

        function loadProposals() {
            fetch('/api/proposals', {
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-XSRF-TOKEN': decodeURIComponent(document.cookie.match('XSRF-TOKEN=([^;]+)')?.[1] || '')
                },
                credentials: 'same-origin'
            })
            .then(response => response.json())
            .then(json => {
                const tbody = document.querySelector('#proposalTable tbody');
                tbody.innerHTML = '';
                if (json.data && Array.isArray(json.data)) {
                    json.data.forEach(p => {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${p.id}</td>
                            <td>${p.title || ''}</td>
                            <td>${p.description || ''}</td>
                            <td>${statusBadge(p.status)}</td>
                            <td>${p.user ? p.user.name : ''}</td>
                            <td>${p.reviewer ? p.reviewer.name : '-'}</td>
                            <td>${p.created_at ? new Date(p.created_at).toLocaleDateString() : ''}</td>
                            <td>${p.file_url ? `<a href=\"${p.file_url}\" target=\"_blank\">Download</a>` : '-'}</td>
                            ${!isDosen ? `<td>
                                ${p.status === 'waiting' ? `
                                    <button class='btn btn-success btn-sm accept-btn' data-id='${p.id}'>Accept</button>
                                    <button class='btn btn-danger btn-sm decline-btn' data-id='${p.id}'>Decline</button>
                                ` : ''}
                            </td>` : ''}
                        `;
                        tbody.appendChild(tr);
                    });
                } else {
                    tbody.innerHTML = `<tr><td colspan="${isDosen ? '8' : '9'}" class="text-center">Tidak ada data proposal</td></tr>`;
                }

                if (!isDosen) {
                    // Event listener untuk tombol Accept/Decline
                    tbody.querySelectorAll('.accept-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            updateStatus(this.dataset.id, 'approved');
                        });
                    });
                    tbody.querySelectorAll('.decline-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            updateStatus(this.dataset.id, 'declined');
                        });
                    });
                }
            })
            .catch(() => {
                const tbody = document.querySelector('#proposalTable tbody');
                tbody.innerHTML = `<tr><td colspan="${isDosen ? '8' : '9'}" class="text-center">Gagal memuat data proposal</td></tr>`;
            });
        }

        function updateStatus(id, status) {
            fetch(`/api/proposals/${id}/status`, {
                method: 'PATCH',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-XSRF-TOKEN': decodeURIComponent(document.cookie.match('XSRF-TOKEN=([^;]+)')?.[1] || '')
                },
                credentials: 'same-origin',
                body: JSON.stringify({ status })
            })
            .then(res => res.json())
            .then(() => loadProposals());
        }

        loadProposals();
    });
    </script>

</body>

</html>
