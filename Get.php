<?php
header('Content-type: application/json;charset="utf-8"');
header("Access-Control-Allow-Origin: *");

include_once 'Connection/config.php';//連接資料庫
//只要此頁面上有用到連接MySQL就要include它

$sql = "select * from sensorlogs";//搜尋資料庫資料
//執行sql語法
$query_result = mysql_query($sql);

while ($rows = mysql_fetch_array($query_result)) {

    //負責取sql執行後的資料集
    $sensorlogs = array(
        "Id" => $rows["Id"],
        "Co" => $rows["Co"],
        "Temperature" => $rows["Temperature"],
        "Voltage" => $rows["Voltage"],
        "CreateDate" => $rows["CreateDate"]);
}
echo json_encode($sensorlogs);
?>
