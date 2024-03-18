<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tüm Seferler</title> 

  <link href="http://localhost/BusTicket-CI/assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="http://localhost/BusTicket-CI/assets/backend/css/sb-admin-2.min.css" rel="stylesheet">
  
  <link href="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/BusTicket-CI/assets/datepicker/dist/css/bootstrap-datepicker.min.css">
  <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            /* background-color: #fff; */
        }

        .pre {
            border: 1px solid grey;
            min-height: 10em;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
  </style>  </head>
  <body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/BusTicket-CI/backend/home">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Umuttepe Turizim</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/BusTicket-CI/backend/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin Sayfası</span></a>
          <a class="nav-link" href="http://localhost/BusTicket-CI/backend/bus">
            <i class="fas fa fa-bus"></i>
            <span>Toplam Yolcu Sayısı</span></a>
            <a class="nav-link" href="http://localhost/BusTicket-CI/backend/rute">
              <i class="fas fa fa-compass"></i>
              <span>Sefer Sayıları</span></a>
              <a class="nav-link" href="http://localhost/BusTicket-CI/backend/jadwal">
                <i class="fas fa fa-clipboard-list"></i>
                <span>Şöfor Listesi</span></a>
        <a class="nav-link" href="http://localhost/BusTicket-CI/backend/order">
          <i class="fas fa-bookmark"></i>
          <span>Sefer Oluştur</span></a> 
        <a class="nav-link" href="http://localhost/BusTicket-CI/backend/tiket">
          <i class="fas fa-ticket-alt"></i>
          <span>Biletler</span></a>
        <a class="nav-link" href="http://localhost/BusTicket-CI/backend/konfirmasi">
          <i class="fa fa-dollar-sign"></i>
          <span>Ödeme Listesi</span></a>
              </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      
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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="http://localhost/BusTicket-CI/backend/order/vieworder" method="GET">
            <div class="input-group">
              <input type="text" name="order" class="form-control bg-light border-0 small" placeholder="Search Order" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-info" >
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>


            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="http://localhost/myci5/public/">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-info-circle fa-sm fa-fw mr-2 text-gray-400"></i>
                  About
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
    <div class="container-fluid">
      <h1 class="h5 text-gray-800">Tüm Seferler</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#ModalTujuan">
          Otobüs Ekle 
          </button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                  <th>Sefer ID</th>
                  <th>Kalkış-Varış Yeri</th> 
                  <th>Yolcu Sayısı</th>
                  <th>Araba Plakası</th>
                  <th>Koltuk Kapasitesi</th>
                  <th>Aktiflik</th>
                  <th>Ayrıntılar</th> 
                </tr>
              </thead>
              <tbody>
                                <tr>
                  <td>1</td>
                  <td>İstanbul-İzmir</td>
                  <td>200</td>
                  <td>34 ABC 234</td>
                  <td>200</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B010" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>2</td>
                  <td>Kocaeli-Zonguldak</td>
                  <td>150
</td>
                  <td>41 ZCX 644 </td>
                  <td>150</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B008" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>7</td>
                  <td>İstanbul-Kocaeli</td>
                  <td>50
</td>
                  <td>35 XYZ 225</td>
                  <td>50</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B005" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>8</td>
                  <td>İstanbul-İzmir</td>
                  <td>400</td>
                  <td>34 ABC 234</td>
                  <td>400</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B003" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>10</td>
                  <td>İstanbul-İzmir</td>
                  <td>400</td>
                  <td>34 ABC 234</td>
                  <td>400</td> 
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B006" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>11</td>
                  <td>Kocaeli-İzmir</td>
                  <td>200</td>
                  <td>41 DEF 534</td>
                  <td>200</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B001" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>15</td>
                  <td>İstanbul-Kocaeli</td>
                  <td>350</td>
                  <td>35 XYZ 225</td>
                  <td>350</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B002" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>27</td>
                  <td>Zonguldak-Kocaeli</td>
                  <td>320</td>
                  <td>67 AGF 225</td>
                  <td>320</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B007" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>29</td>
                  <td>Zonguldak-İstanbul</td>
                  <td>155
</td>
                  <td>67 FGC 775</td>
                  <td>155</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B004" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                              <tr>
                  <td>31</td>
                  <td>İzmir-İstanbul</td>
                  <td>45</td>
                  <td>35 TMS 688</td>
                  <td>45</td>
                                      <td class="btn-success"> Active</td> 
                                      <td align="center"><a href="http://localhost/BusTicket-CI/backend/bus/viewbus/B009" class="btn btn btn-info">View</a></a>
                </td>
              </tr>
                          </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>
</div>
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>&copy; 2024 Umuttepe Turizim Seyehat Acentası </span> 
		</div>
	</div>
</footer>
</div>
<!-- End of Content Wrapper -->
</div>
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
				<a class="btn btn-danger" href="http://localhost/BusTicket-CI/backend/login/logout">Logout</a>
			</div>
		</div>
	</div>
</div>
<div class="preloader">
	<div class="loading">
		<img src="http://localhost/BusTicket-CI/assets/frontend/img/preloader.gif" width="100">
		<p>Lütfen Bekleyin...</p>
	</div>
</div><!-- End of Footer -->

<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Otobüs Ekle</h5> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form action="http://localhost/BusTicket-CI/backend/bus/tambahbus" method="post">
      <div class="form-group">
        <label for="platbus" class="">  Otobüs Adı</label>
        <input type="text" class="form-control" name="nama_bus" placeholder="Bus Name">
      </div>
      <div class="form-group">
        <label for="platbus" class="">Otobüs Plaka</label>
        <input type="text" class="form-control" name="plat_bus" placeholder="Bus Plate">
      </div>
      <div class="form-group">
        <label for="seat" class="">Yolcu Kapasitesi</label>
        <input type="number" class="form-control" id="seat" name="seat" placeholder="[Maximum 23]">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        <button class="btn btn-success">Kaydet</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="http://localhost/BusTicket-CI/assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="http://localhost/BusTicket-CI/assets/backend/js/sb-admin-2.min.js"></script>


<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="http://localhost/BusTicket-CI/assets/backend/js/demo/datatables-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://localhost/BusTicket-CI/assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script></script><script type="text/javascript">
	$(document).ready(function () {
		$(".preloader").fadeOut();
	});
  
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Umuttepe Turizim Seyehat Acentası <br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>