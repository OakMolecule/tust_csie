<?php
/**
 * Created by PhpStorm.
 * User: oak
 * Date: 17-8-24
 * Time: 下午3:24
 */
@session_start();
$dbms = 'mysql';     //数据库类型
$host = 'localhost'; //数据库主机名
$dbName = 'community_regist';    //使用的数据库
$user = 'root';      //数据库连接用户名
$pass = 'root';          //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    $dbh->exec("SET names utf8");
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}

?>