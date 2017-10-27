<?php
/**
 * Created by PhpStorm.
 * User: oak
 * Date: 17-10-26
 * Time: 下午5:13
 */
require_once('../include/db_info.inc.php');
session_start();

$id = $_POST['id'];
$sql = "UPDATE classroom_applications SET finish_time = now() WHERE id = $id";
try {
//    $dbh->exec($sql);
    echo "ok";
} catch (PDOException $e) {
    error();
}