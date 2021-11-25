<?php
if(isset($_GET['Path'])){
if($_GET['Path']!=''){
$path = $_GET['Path'];

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename='.$path);
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

readfile($path);
}
}
?>