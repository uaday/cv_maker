<?php
session_start();
require_once './classes/super_admin.php';
$obj_sup = new Super_Admin();
$result = mysqli_fetch_assoc($obj_sup->find_job_info($_GET['job_id']));
$result2 = mysqli_fetch_assoc($obj_sup->find_organization_info($_GET['organization_id']));

if(isset($_POST['apply'])){
    $_SESSION['applying_job_id'] = $_POST['job_id'];
    $_SESSION['applying_job_name'] = $_POST['job_name'];
    $_SESSION['applying_organization_id'] = $_POST['organization_id'];
    $_SESSION['applying_organization_name'] = $_POST['organization_name'];
    $admin_id = $_SESSION['login_id'];
    if ($admin_id != NULL) {
        header('Location: dashboard.php');
    }else {
        header('Location: login.php');
    }
}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>
<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1><?= $result2['name']?></h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <h3 class="text-center"><?= $result['job_name']?></h3>
                <br>

                <div><?= $result['job_description']?></div>

                <form action="#" method="post">
                    <input type="hidden" name="job_id" id="job_id" value="<?= $result['id']?>">
                    <input type="hidden" name="job_name" id="job_name" value="<?= $result['job_name']?>">
                    <input type="hidden" name="organization_id" id="organization_id" value="<?= $result2['id']?>">
                    <input type="hidden" name="organization_name" id="organization_name" value="<?= $result2['name']?>">
                    <input class="btn btn-primary" type="submit" value="Apply" name="apply" >
                </form>

            </div>
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p> &copy; <?= date('Y') ?> Job Recruitment</p>

    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>></body>
</html>
