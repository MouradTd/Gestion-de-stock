<?php
include ('Connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="Acceuil.php" class="nav-link">Acceuil</a>
                </li>
                
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                    <a class="nav-link"  href="#" role="button">
                        Logout
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="AdminLTE/index3.html" class="brand-link">
                <span style="margin-left: 4em; font-size: 20px;" class="brand-text font-weight-light">ONSSA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="Acceuil.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Acceuil

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="Produit.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Produit

                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="Transfert Inter-Magazin.php" class="nav-link">
                                <i class="nav-icon fas fa-truck-moving"></i>
                                <p>
                                   Transfert Inter-Magazin

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="Demande.php" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Demande de stock

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="Stock.php" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                     Stock

                                </p>
                            </a>

                        </li>
                        

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Stock</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="Acceuil.php">Acceuil</a></li>
                                <li class="breadcrumb-item active">Stock</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bonjour</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
                        </div>
                    </div>
                    <div class="card-body">
                       Welcome Back :D
                    </div>
                    <!-- /.card-body -->
                    
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
                


             



                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Stock</th>
                                <th>Libellé</th>
                                <th>Location</th>
                                <th>Produit</th>
                                <th>Quantite</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                           
                           $sql="select  * from stock s , produit p where s.IDS = p.IDS;";
                           $result=mysqli_query($con,$sql);
                           if($result){
                              while($row=mysqli_fetch_assoc($result)){
                                  $id=$row['IDS'];
                                  $Location=$row['Location'];
                                  $Nomp=$row['Nomp'];
                                  $Quantite=$row['Quantite'];
                                  $Libelle=$row['Libellé'];
                                  echo '
                                  <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$Libelle.'</td>
                                    <td>'.$Location.'</td>
                                    <td>'.$Nomp.'</td>
                                    <td>'.$Quantite.'</td>   
                                  </tr>
                                  ';
                                }
                            }
                            
                           ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID Stock</th>
                                <th>Libellé</th>
                                <th>Produit</th>
                                <th>Location</th>
                                <th>Quantite</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer>
           
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="AdminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="AdminLTE/dist/js/demo.js"></script>

    <script>
        
        $(function() {
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>

</html>