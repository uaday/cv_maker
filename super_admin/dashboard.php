<?php
session_start();
require_once '../classes/super_admin.php';
$obj_sup = new Super_Admin();
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == TRUE) {
        $obj_sup->logout();
    }
}

$login_id = $_SESSION['login_id'];
if ($login_id == NULL) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cv Maker</title>

    <!-- Bootstrap Core CSS -->
    <link href="../asset/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../asset/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!--         Timeline CSS -->
    <link href="../asset/admin/dist/css/timeline.css" rel="stylesheet">

    <!--         Custom CSS -->
    <link href="../asset/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../asset/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- DataTables CSS -->
    <link href="../asset/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../asset/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link rel="icon" href="../asset/front_end/img/title_logo/favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="icon" href="../asset\front_end\title_logo\4.ico" type="image/x-icon">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">Cv Maker</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">

                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-user">

                    <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['user_name']; ?></a>
                    </li>

                    <li class="divider"></li>
                    <li><a href="?logout=true"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar " role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">

                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa fa-home fa-fw"></i> Home</a>
                    </li>

                    <li>
                        <a href="organization.php"><i class="fa fa-home fa-fw"></i> Organization</a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> Contact<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="contact_request.php">Contact Request</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Form </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <?php
    if (isset($pages)) {
        if ($pages == 'contact_request') {
            include './pages/contact_request_content.php';
        } else if ($pages == 'contact') {
            include './pages/contact_content.php';
        } else if ($pages == 'show_message') {
            include './pages/show_contact_message_content.php';
        } else if ($pages == 'edit_contact') {
            include './pages/edit_contact_content.php';
        } else if ($pages == 'organization') {
            include './pages/organization_content.php';
        }
    } else {
        include './dashboard_content.php';
    }
    ?>


    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../asset/admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../asset/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../asset/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../asset/admin/bower_components/raphael/raphael-min.js"></script>
<script src="../asset/admin/bower_components/morrisjs/morris.min.js"></script>
<script src="../asset/admin/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../asset/admin/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="../asset/admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script
    src="../asset/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    <!--
    //Create a boolean variable to check for a valid Internet Explorer instance.
    var xmlhttp = false;
    //Check if we are using IE.
    try {
//If the Javascript version is greater than 5.
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
    } catch (e) {
        //alert(e);

//If not, then use the older active x object.
        try {
//If we are using Internet Explorer.
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
        } catch (E) {
            //alert(E);
//Else we must be using a non-IE browser.
            xmlhttp = false;
        }
    }
    //If we are using a non-IE browser, create a javascript instance of the object.
    //alert(typeof XMLHttpRequest);
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
    }

    // Ajax Request for Select Subject by Class Id
    function sec_list(class_id, result) {
        //alert(class_id);
        //var obj = document.getElementById(result);
        serverPage = 'pages/find_section.php?class=' + class_id;
        //alert(serverPage);
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function () {
            //alert(xmlhttp.readyState);
            // alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //  alert(xmlhttp.responseText);
                document.getElementById(result).innerHTML = xmlhttp.responseText;
                // document.getElementById(objcw).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.send(null);
    }
    function sub_list(class_id, result) {
        //alert(class_id);
        //var obj = document.getElementById(result);
        serverPage = 'pages/find_subject.php?class=' + class_id;
        //alert(serverPage);
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function () {
            //alert(xmlhttp.readyState);
            // alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //  alert(xmlhttp.responseText);
                document.getElementById(result).innerHTML = xmlhttp.responseText;
                // document.getElementById(objcw).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.send(null);
    }


    //-->
</script>

<script>
    function check_delete_info() {
        var check = confirm('Are You Sure To Delete This!!!');
        if (check) {
            return true;
        }
        else {
            return false;
        }
    }
</script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>


    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>


</body>

</html>