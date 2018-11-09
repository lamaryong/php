<?php
// 공통적으로 사용되는 코드들

session_start();

//절대경로지정.
$path['root'] = $_SERVER['DOCUMENT_ROOT'].'/www/';
$url = array();
//$_SERVER['HTTP_HOST'] 는 호스트명을 얻을 수 있는 변수
$url['root'] = 'http://'.$_SERVER['HTTP_HOST'].'/';

require_once($path['root'].'config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);
extract($_GET);

?>
