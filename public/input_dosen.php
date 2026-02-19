<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Data Dosen - LPPM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/style2.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboardadmin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/logo.png" alt="LPPM Logo" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">LPPM ISTEK WIDURI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboardadmin">
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
                <a class="nav-link" href="/dashboardadmin">
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
                        <a class="collapse-item active" href="/inputdosen">Data Dosen</a>
                        <a class="collapse-item" href="/inputdatajabatan">Data Karyawan Lppm</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Data Laporan</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="laporan_penelitian.php">Penelitian</a>
                        <a class="collapse-item" href="laporan_penelitian.php">Pengabdian Masyarakat</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin LPPM</span>
                                <img class="img-profile rounded-circle" src="img/man.png">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Dosen</h1>
                    </div>
                    <!-- ================= CONTENT ================= -->
<div class="content-wrapper">
    <div class="page-header">
        <button class="btn btn-primary" onclick="toggleForm()">+ Tambah Dosen</button>
    </div>

    <!-- FORM -->
    <div class="card mb-4" id="formDosen" style="display:none;">
        <div class="card-body">
            <h5 class="mb-3">Form Tambah Dosen</h5>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nama Dosen</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>NIDN</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Program Studi</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <button class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="toggleForm()">Batal</button>
            </form>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Daftar Nama Dosen</h5>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>NIDN</th>
                            <th>Email</th>
                            <th>Prodi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td>1</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronladantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronladantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronladantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Ronald Antonius Panjaitan</td>
                            <td>22411013</td>
                            <td>ronaldantn@gmail.com</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- PAGINATION -->
<div class="d-flex justify-content-between align-items-center mt-3">
    <div>
        <span id="showingText">Menampilkan 1 - 10 dari total data dosen</span>
    </div>
    <div>
        <button class="btn btn-sm btn-secondary" id="prevBtn" onclick="changePage(-1)" disabled>« Prev</button>
        <span class="mx-2" id="pageNumber">1</span>
        <button class="btn btn-sm btn-secondary" id="nextBtn" onclick="changePage(1)">Next »</button>
    </div>
</div>

            </div>

        </div>
    </div>

</div>

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/loginadmin">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/script2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>
function toggleForm() {
    var form = document.getElementById("formDosen");
    form.style.display = (form.style.display === "none") ? "block" : "none";
}
</script>

<script>
let currentPage = 1;
const rowsPerPage = 10;

function paginateTable() {
    let table = document.querySelector("table tbody");
    let rows = table.querySelectorAll("tr");
    let totalRows = rows.length;
    let totalPages = Math.ceil(totalRows / rowsPerPage);

    // Hitung start & end
    let start = (currentPage - 1) * rowsPerPage;
    let end = start + rowsPerPage;

    // Tampilkan / sembunyikan baris
    rows.forEach((row, index) => {
        if (index >= start && index < end) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });

    // Update teks
    let startDisplay = start + 1;
    let endDisplay = Math.min(end, totalRows);
    document.getElementById("showingText").innerText =
        `Menampilkan ${startDisplay} - ${endDisplay} dari ${totalRows} data dosen`;

    document.getElementById("pageNumber").innerText = currentPage;

    // Atur tombol
    document.getElementById("prevBtn").disabled = currentPage === 1;
    document.getElementById("nextBtn").disabled = currentPage === totalPages;
}

function changePage(direction) {
    currentPage += direction;
    paginateTable();
}

// Jalankan saat halaman load
document.addEventListener("DOMContentLoaded", paginateTable);
</script>


</body>

</html>
