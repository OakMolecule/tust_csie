<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>教室申请</title>
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
<div class="container">
    <div class="row">
        <h3>教室申请</h3>
        <div class="col s12 l8">
            <form method="post" action="submit.php" class="col s12">
                <div class="row">
                    <div class="l10 input-field col s12">
                        <input id="student_name" type="text" class="validate" name="name" required="required">
                        <label for="student_name">申请人</label>
                    </div>
                    <div class="l10 input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">电子邮件</label>
                    </div>
                    <div class="l10 input-field col s12">
                        <select>
                            <option value="1">补课</option>
                            <option value="2">活动</option>
                        </select>
                        <label>用途</label>
                    </div>
                    <div class="l10 input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea1">详细说明</label>
                    </div>
                    <div class="l10 input-field col s12">
                        <input id="time" type="text" class="validate" name="email">
                        <label for="time">时间</label>
                    </div>
                    <div class="l10 input-field col s12">
                        <input id="place" type="text" class="validate" name="email">
                        <label for="place">地点</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="col l4 hide-on-med-and-down">

        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>
</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
    $(".button-collapse").sideNav();

    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</html>