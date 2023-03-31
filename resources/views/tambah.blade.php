<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIDOSWAL - Sistem Informasi Dosen Wali</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/adminx.css')}}" media="screen" />
</head>

<body>
    <div class="adminx-container">
        <!-- Header -->
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="{{ 'dashboard' }}">
                <img src="{{ asset('image/dosen-wali.png') }}" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                SIDOSWAL
            </a>

            <div class="d-flex flex-1 d-block d-md-none">
                <a href="#" class="sidebar-toggle ml-3">
                    <i data-feather="menu"></i>
                </a>
            </div>

            <ul class="navbar-nav d-flex justify-content-end mr-2">
                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                            <img src="{{ asset('image/winter.jpg') }}" class="d-inline-block align-top" alt="" />
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">halo, {{ Auth::user()->name }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">Log Out</a>
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- // Header -->

        <!-- expand-hover push -->
        <div class="adminx-sidebar expand-hover push" id="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href=" {{ 'dashboard' }}" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Dashboard
                        </span>
                        <span class="sidebar-nav-end">

                        </span>
                    </a>
                </li>


                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false"
                        aria-controls="navTables">
                        <span class="sidebar-nav-icon">
                            <i data-feather="align-justify"></i>
                        </span>
                        <span class="sidebar-nav-name"> Perwalian </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="navTables">
                        @if (auth()->user()->role_id == "1")
                        <li class="sidebar-nav-item">
                            <a href="{{ 'tambah' }}" class="sidebar-nav-link">
                                <span class="sidebar-nav-abbr"> TM </span>
                                <span class="sidebar-nav-name"> Tambah Data Mahasiswa </span>
                            </a>
                        </li>
                        @elseif (auth()->user()->role_id == "2")
                        <li class="sidebar-nav-item">
                            <a href="{{ 'tambah' }}" class="sidebar-nav-link">
                                <span class="sidebar-nav-abbr"> TM </span>
                                <span class="sidebar-nav-name"> Tambah Data Mahasiswa </span>
                            </a>
                        </li>
                        @endif

                        <li class="sidebar-nav-item">
                            <a href="{{ 'datamahasiswa' }}" class="sidebar-nav-link">
                                <span class="sidebar-nav-abbr"> LM </span>
                                <span class="sidebar-nav-name"> List Data Mahasiswa </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="adminx-content">
            <div class="adminx-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb adminx-page-breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Perwalian</a></li>
                            <li class="breadcrumb-item active  aria-current=" page">Tambah Data Mahasiswa</li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        <h2>Tambah Data Mahasiswa</h2>
                    </div>
                </div>

                <!-- button edit dan delete -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Table with border -->
                        <div class="card mb-grid">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-header-title">Silahakan Masukan Data</div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="tambah/store">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInput1">Nama Mahasiswa</label>
                                        <input type="text" name="nama" class="form-control" id="NAMA"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput2">NIM</label>
                                        <input type="text" name="nim" class="form-control" id="NIM"
                                            placeholder="NIM" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput3">Jurusan</label>
                                        <input type="text" name="jurusan" class="form-control" id="JURUSAN"
                                            placeholder="Jurusan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput4">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="ALAMAT"
                                            placeholder="Alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput4">No HP</label>
                                        <input type="text" name="nohp" class="form-control" id="NOHP"
                                            placeholder="No Hp" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- If you prefer jQuery these are the required scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="{{ asset('admin/js/vendor.js') }}"></script>
        <script src="{{ asset('admin/js/adminx.js') }}"></script>

        <!-- If you prefer vanilla JS these are the only required scripts -->
        <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                var form = document.getElementById('needs-validation');
                if (form !== null) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                }
            }, false);
        })();
        </script>
        <script>
        flatpickr(".date-human", {
            allowInput: true,
            altInput: true,
        });
        </script>
</body>

</html>