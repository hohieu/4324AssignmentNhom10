<?php
//Dữ liệu trả về dạng json
$jsonData = file_get_contents("http://localhost:8080/abc/admincp/web/web.php?format=json");
$jsonArray = json_decode($jsonData, true);
var_dump($jsonArray);
?>
