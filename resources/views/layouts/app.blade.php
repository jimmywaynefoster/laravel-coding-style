<!doctype html>
<html lang="en">
  	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Aplikasi CRUD dengan PHP, MySQLi, Ajax, DataTables ServerSide, dan Bootstrap 4">
	    <meta name="keywords" content="Aplikasi CRUD dengan PHP, MySQLi, Ajax, DataTables ServerSide, dan Bootstrap 4">
	    <meta name="author" content="Indra Styawantoro">

		<!-- favicon -->
    	<link rel="shortcut icon" href="assets/img/favicon.png">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	    <!-- DataTables CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">
        <!-- datepicker CSS -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
	    <!-- Font Awesome CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.1-web/css/all.min.css">
	    <!-- Custom CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- Fungsi untuk membatasi karakter yang diinputkan -->
        <script type="text/javascript" src="assets/js/fungsi_validasi_karakter.js"></script>
        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>

	    <title>Data Pegawai</title>
  	</head>
  	<body>
  		<div class="container-fluid">
	    	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal text-info"><i class="fas fa-user title-icon"></i> Data Pegawai</h5>
                @if (Request::url() == route('pangkat.home'))
                    <a class="btn btn-outline-info" href="{{ route('pangkat.create') }}" role="button"><i class="fas fa-plus"></i> Tambah</a> &nbsp; &nbsp;
                    <a class="btn btn-outline-warning" href="cetak.php" target="_blank" role="button"><i class="fas fa-print"></i> Cetak</a> &nbsp; &nbsp;
                    <a class="btn btn-outline-success" href="export.php" role="button"><i class="fas fa-file-excel"></i> Export</a>
                @else
                    <a class="btn btn-outline-info" href="{{ route('pangkat.home') }}php" role="button"><i class="fas fa-arrow-left"></i> Kembali</a>
                @endif
			</div>
		</div>

		<div class="container-fluid">
            @yield('content')
		</div>

        <div class="container-fluid">
            <footer class="pt-4 my-md-4 pt-md-3 border-top">
                <div class="row">
                    <div class="col-12 col-md center">
                        &copy; 2020 - <a class="text-info" href="http://www.banksulselbar.co.id/">www.banksulselbar.co.id</a>
                    </div>
                </div>
            </footer>
        </div>

	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script type="text/javascript" src="assets/js/popper.min.js"></script>
	    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- fontawesome js -->
	    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.1-web/js/all.min.js"></script>
        <!-- DataTables js -->
	    <script type="text/javascript" src="assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="assets/plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
        <!-- datepicker js -->
        <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
  	</body>
</html>
