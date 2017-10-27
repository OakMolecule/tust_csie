<?php
/**
 * Created by PhpStorm.
 * User: oak
 * Date: 17-10-27
 * Time: 下午4:24
 */
require_once('../include/db_info.inc.php');
session_start();

$id = $_POST['id'];
$sql = "UPDATE classroom_applications SET finish_time = NULL WHERE id = $id";
try {
//    $dbh->exec($sql);
    echo "ok";
} catch (PDOException $e) {
    error();
}