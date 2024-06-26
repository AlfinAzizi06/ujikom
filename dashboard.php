<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <img class="img-profile rounded-circle rotate-n-15">
            <div class="sidebar-brand-icon">
        <img src="pp.jpg" width="50px"alt="Logo">
    </div>
                <div class="sidebar-brand-text mx-3">SMK 1 TRIPLE "J"</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="m_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>MANAJEMEN ADMIN</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>KATEGORI </span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="post.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>POST</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="galeri.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>GALERI</span></a>
            </li>

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

                        <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-6   ">
                 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

    </nav>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">
        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">4 Pilihan Kompetensi Keahlian SMK 1 TRIPLE "J"</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">REKAYASA PERANGKAT LUNAK <span
                                class="float-right">90%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">BIDANG DARING PEMASARAN<span
                                class="float-right">90%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">PERKANTORAN <span
                                class="float-right">90%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">AKUTANSI<span
                                class="float-right">90%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                </div>

            <div class="col-lg-6 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Visi dan Misi</h6>
                    </div>
                    <div class="card-body">
                        <p>Assalamu'alaikum wr.wb.Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK 1 Triple J ini dapat terbit. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. 
                           Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya Teknologi Informasi yang begitu pesat, sangat diperlukan berbagai sarana prasarana yang kondusif, 
                           kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat,
                           terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK 1 Triple J.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

                <!-- Illustrations -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">PETA SEKOLAH</h6>
                    </div>
                    <div class="card-body">
                        <div class="maps">
                         <iframe src=
                         "https://maps.google.com/maps?q=smks 1 triple j&t=&z=10&ie=UTF8&iwloc=&output=embed" width="100%" height="350" style="border:0;" allowfullscreen loading="lazy">
                         #document 
                         (https://www.google.com/maps/embed?origin=mfe&pb=!1m3!2m1!1ssmks+1+triple+j!6i10)
                        </iframe>
                        </div>
                        <p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan 
                            dan pemerhati pendidikan secara khusus bagi SMK 1 Triple J.</p>
                        <a target="_blank" rel="nofollow" href="https://smk1triplej.sch.id/">Browser SMK 1 TRIPLE J &rarr;</a>
                    </div>
                </div>

    </div>
    <!-- /.container-fluid -->


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>


</html>