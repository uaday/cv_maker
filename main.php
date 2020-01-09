<?php
/**
 * Created by PhpStorm.
 * User: Uaday
 * Date: 8/29/2016
 * Time: 2:50 PM
 */
require 'classes/application.php';
$obj_app=new Application();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Recruitment</title>
    <link rel="stylesheet" type="text/css" href="asset/front_end/css/contact_style.css">
    <link rel="stylesheet" type="text/css" href="asset/front_end/contact/css/bootstrap.min.css">
    <script src="asset/front_end/contact/js/ajax_jquery.js"></script>
    <script src="asset/front_end/contact/js/bootstrap.min.js"></script>
<link rel="icon" href="asset\front_end\title_logo\4.ico" type="image/x-icon">


</head>

<body>
<div class="nav-right visible-xs">
    <div class="button" id="btn">
        <div class="bar top"></div>
        <div class="bar middle"></div>
        <div class="bar bottom"></div>
    </div>
</div>
<!-- nav-right -->
<main>
    <nav>
        <div class="nav-right hidden-xs">
            <div class="button">
                <div class="bar top"></div>
                <div class="bar middle"></div>
                <div class="bar bottom"></div>
            </div>
        </div>
        <!-- nav-right -->
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if($pages=='contact')
                {
                    include 'pages/contact_content.php';
                }
                else if($pages=='about')
                {
                    include 'pages/about.php';
                }
                ?>
            </div>
        </div>
    </div>


    <div class="jquery-script-ads" align="center">
        <script type="text/javascript"><!--
            google_ad_client = "ca-pub-2783044520727903";
            /* jQuery_demo */
            google_ad_slot = "2780937993";
            google_ad_width = 728;
            google_ad_height = 90;
            //-->
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>
</main>
<div class="sidebar">
    <ul class="sidebar-list">
        <li class="sidebar-item"><a href="index.php" class="sidebar-anchor">Home</a></li>
        <li class="sidebar-item"><a href="about.php" class="sidebar-anchor">About</a></li>
        <li class="sidebar-item"><a href="login.php" class="sidebar-anchor">Login</a></li>
        <li class="sidebar-item"><a href="contact.php" class="sidebar-anchor">Contact Us</a></li>
    </ul>
</div>
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<script>
    $(document).ready(function () {

        function toggleSidebar() {
            $(".button").toggleClass("active");
            $("main").toggleClass("move-to-left");
            $(".sidebar-item").toggleClass("active");
        }

        $(".button").on("click tap", function () {
            toggleSidebar();
        });

        $(document).keyup(function (e) {
            if (e.keyCode === 27) {
                toggleSidebar();
            }
        });

    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>