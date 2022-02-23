<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang quản trị !</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- select2 multiple css -->
    <link href="admin_asset/select2/css/select2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- datatables -->
    <link href="admin_asset/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="admin_asset/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.navbar')

        <div id="page-wrapper">

            @yield('content')
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- select2 multiple JavaScript -->
    <script src="admin_asset/select2/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() { $('#select2').select2({ placeholder: 'Select category ...' }); });
    </script>

    <!-- datatables JavaScript -->
    <script src="admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="admin_asset/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- ckeditor -->
    <script src="admin_asset/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	    function BrowseServer()
	    {
	        var finder = new CKFinder();
	        finder.BasePath = 'admin_asset/ckeditor/ckfinder/';
	        finder.SelectFunction = SetFileField;
	        finder.Popup();
	    }
		function SetFileField(fileUrl) {document.getElementById('image').value = fileUrl; }
		
	    function BrowseServer1()
	    {
	        var finder = new CKFinder();
	        finder.BasePath = 'admin_asset/ckeditor/ckfinder/';
	        finder.SelectFunction = SetFileField1;
	        finder.Popup();
	    }
		function SetFileField1(fileUrl) {document.getElementById('image1').value = fileUrl; }
	</script>
	<script type="text/javascript" src="admin_asset/ckeditor/ckfinder/ckfinder_v1.js"></script>
</body>

</html>
