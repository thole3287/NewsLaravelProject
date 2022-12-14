<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Trung Tâm">
    <meta name="author" content="">
    <title>Admin - Trung Tâm</title>
    <base href="{{asset('')}}">
    <link href="resources/css/ionicons.min.css" rel="stylesheet">
    <link href="resources/css/mine.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="resources/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="resources/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="resources/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="resources/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="resources/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="resources/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="resources/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resources/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include("admin.Layout.header")

        <!-- Page Content -->
        @yield("content")
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="resources/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="resources/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="resources/admin/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="resources/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="resources/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- ckedit -->
    <script src="resources/admin/ckeditor/ckeditor.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    @yield("script")
    <!-- <script src="resources/js/myscript.js"></script> -->
    <!-- Bootstrap core JavaScript-->
    <script src="resources/admin/vendor/jquery/jquery.min.js"></script>
    <script src="resources/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resources/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resources/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resources/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resources/admin/js/demo/chart-area-demo.js"></script>
    <script src="resources/admin/js/demo/chart-pie-demo.js"></script>
</body>

</html>