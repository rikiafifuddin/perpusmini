<?php 
include("connection.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan Mini</title>

    <!-- Ignore this just for WEB TEMPLATE-->
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
    <!-- END OF WEB TEMPLATE -->

    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <div class="site_title"><span>Welcome Admin</span></div>
            </div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">

              <div class="profile_info">
                <span>Code By,</span>
                <h2>Riki Nur Afifuddin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu"> 
                <li><a><i class="fa fa-spinner"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index1.php">List sewa Aktif</a></li>
                    <li><a href="index1.php">Transaksi</a></li>
                    <li><a href="index1.php">History</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-spinner"></i> Admin <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index1.php">Data Penyewa</a></li>
                    <li><a href="index1.php">Buku</a></li>
                  </ul>
                </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="x_title">
        <h2><small>List Buku</small></h2>
        </div>
            <!-- INPUT -->
            <div class="x_content">
					            <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID Buku</th>
                          <th>Judul Buku</th>
                          <th>Kategori</th>
                          <th>Harga Sewa</th>
						              <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr class="even pointer">
                            <?php
                                $sql = "SELECT * FROM buku";	
                                $query = mysqli_query($db, $sql);
								
                                while($buku = mysqli_fetch_array($query)){
                                    echo "<tr>";
                                    echo "<td>".$buku['id_buku']."</td>";
                                    echo "<td>".$buku['judul_buku']."</td>";
                                    echo "<td>".$buku['kategori']."</td>";
                                    echo "<td>".$buku['harga_sewa']."</td>";
                                    echo "<td>";
                                    echo "<a href='deleteicon.php?id=".$buku['id_buku']."'>Hapus</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                          </tr>
                      </tbody>
                    </table>
                  </div>
            <div class="x_content">
              <div class="form-group">
                <div class="col-md-12 col-sm-9 col-xs-12">
                  <button name="LtoDMS" type="submit" class="btn btn-success">Tambah</button>
                  <button name="LtoDMS" type="submit" class="btn btn-success">Hapus</button>
                </div>
              </div>
            </div>
            <!-- INPUT -->

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Perpustakaan Mini x 2020
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Ignore this just for WEB TEMPLATE-->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <!-- END OF WEB TEMPLATE SCRIPT -->
  </body>
</html>
