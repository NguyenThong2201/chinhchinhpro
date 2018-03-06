
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <base href="{{asset('')}}">
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="admin/assets/styles.css" rel="stylesheet" media="screen">
    <link href="admin/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link href="admin/vendors/chosen.min.css" rel="stylesheet" media="screen">
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
 <body>
    <!-- navbar top -->
    @include('admin.header')
    <!-- end navbar top -->
    <div class="container-fluid">
        <div class="row-fluid">
            @include('admin.menu')
            <!--/span-->
            @yield('content')
        </div>
        <hr>
        <footer>
            <p>&copy; Vincent Gabriel 2013</p>
        </footer>
    </div>
    <!--/.fluid-container-->
    

    <link href="admin/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
    <script src="admin/vendors/jquery-1.9.1.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendors/jquery.uniform.min.js"></script>
    <script src="admin/vendors/chosen.jquery.min.js"></script>
    <script src="admin/vendors/bootstrap-datepicker.js"></script>
    <script src="admin/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="admin/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="admin/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="admin/assets/form-validation.js"></script>
    <script src="admin/assets/scripts.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="admin/assets/DT_bootstrap.js"></script>
    <!--/.fluid-container-->
    <script src="admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script>
    $(function() {
        // Easy pie charts
        $('.chart').easyPieChart({animate: 1000});
    });
    </script>
    <script>
    $(function() {
        
    });
    </script>
    @yield('script')
</body>
</html>

