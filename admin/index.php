<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="shortcut icon" href="/favicon.png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php require_once('nav.php') ?>
<?php
session_start();
require_once("../include/db_info.inc.php");
if (!isset($_SESSION['student_id']) || !isset($_SESSION['communtiy_id'])) {
    $view_errors = "<a href=loginpage.php>请登录后进行操作</a>";
    echo $view_errors;
    exit(0);
}
?>
<div class="row">
    <div class="col s3">
        <div class="container">
            <ul class="hide-on-med-and-down">
                <li><a href="index.php">主页</a></li>
                <li><a href="aboutus.php">关于我们</a></li>
                <li><a href="setregister.php">报名情况</a></li>
            </ul>
        </div>
    </div>

    <div class="col s9">
        <!-- Teal page content  -->
    </div>
</div>
<div class="container">
    <ul id="nav-mobile" class="center">
        <li><a href="index.php">主页</a></li>
        <li><a href="aboutus.php">关于我们</a></li>
        <li><a href="setregister.php">报名情况</a></li>
    </ul>
</div>
<?php require_once 'footer.php' ?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
</script>
</body>
</html>