{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIDOSWAL - Sistem Informasi Dosen Wali</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/adminx.css')}}" media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
</head>

<body>
    <div class="adminx-container">
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="{{ 'dashboard' }}">
                <img src="{{ asset('image/dosen-wali.png') }}" class="navbar-brand-image d-inline-block align-top mr-2" alt="" />
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

        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="adminx-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="{{ 'dashboard' }}" class="sidebar-nav-link active">
                        <span class="sidebar-nav-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-nav-name"> Dashboard </span>
                        <span class="sidebar-nav-end"> </span>
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
        <!-- Sidebar End -->

        <!-- adminx-content-aside -->
        <div class="adminx-content">
            <!-- <div class="adminx-aside">

        </div> -->

            <div class="adminx-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb adminx-page-breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ 'dashboard' }}">Dashboard</a></li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                    <h4 class="card-title">Sistem Informasi Dosen Wali</h4>
                                    <p class="card-text">
                                        Website Dosen Wali Mahasiswa Jurusan Teknik Informatika Politeknik Negeri Cilacap
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js"></script>
    <script src="{{ asset('admin/js/vendor.js') }}"></script>
    <script src="{{ asset('admin/js/adminx.js') }}"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
    <script>
</body>

</html>