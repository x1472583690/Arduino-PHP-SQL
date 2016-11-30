<?php
$db_server = "54.71.169.189:3306";//資料庫位置
$db_name = "sensorlogs";//資料庫名稱
$db_user = "root_sensorlogs";//資料庫管理者帳號
$db_passwd = "pass_sensorlogs";//資料庫管理者密碼
if (!@mysql_connect($db_server, $db_user, $db_passwd))//對資料庫連線
    die("無法對資料庫連線");
mysql_query("SET NAMES utf8");//資料庫連線採UTF8

if (!@mysql_select_db($db_name))//選擇資料庫
    die("無法使用資料庫");
?> 
