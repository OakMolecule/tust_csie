<?php
/**
 * Created by PhpStorm.
 * User: oak
 * Date: 17-9-17
 * Time: 下午4:24
 */
require_once("../include/db_info.inc.php");
//session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['student_id'])) {
        echo "<script language='javascript'>\n";
        echo "alert('请输入用户名!');\n";
        echo "history.go(-1);\n";
        echo "</script>";
        exit(0);
    }

    $student_id = $_POST['student_id'];
    $passwd = $_POST['password'];
    $login = check_login($student_id, $passwd);
    if ($login != false) {
        $_SESSION['student_id'] = $login[0];
        $_SESSION['communtiy_id'] = $login[1];
        echo "<script language=\"javascript\"> self.location='index.php';</script>";
    } else {
        echo "<script language='javascript'>\n";
        echo "alert('UserName or Password Wrong!');\n";
        echo "history.go(-1);\n";
        echo "</script>";
    }
}

function check_login($student_id, $passwd)
{
    $dbh = $GLOBALS['dbh'];
    $sql = "SELECT * FROM users WHERE student_id = '" . $student_id . "' LIMIT 1";
    foreach ($dbh->query($sql) as $row) {
        if ($row['password'] == $passwd) {
            return array($row['student_id'], $row['community_id']);
        }
    }
    return false;
}