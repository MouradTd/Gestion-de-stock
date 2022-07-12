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
    <div class="">
        <!-- Navbar -->
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <div>
            <div class="row">
                <div class="col">
                <button type="button" class="btn btn-block btn-primary btn-lg"  onclick="window.open('Acceuil.php')">Acceuil</button>
                </div>
                <div class="col">
                <button type="button" class="btn btn-block btn-primary btn-lg" onclick="window.open('AcceuilF.php')">Acceuil Fournisseur</button>
                </div>
            </div>

        </div>

        <!-- Content Wrapper. Contains page content -->
       
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            
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
   
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="AdminLTE/dist/js/demo.js"></script>

   
</body>

</html>