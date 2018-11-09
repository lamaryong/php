<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
//UNIX Timestamp 를 구해주는 함수
$reg_date = time();
$member_idx = $_SESSION['member_idx'];

$insert = "INSERT INTO ap_bss(member_idx, subject, content, reg_date)
            VALUES('$member_idx', '$subject', '$content', '$reg_date')";

$result = $mysqli->query($insert);

if($result == false){
  $_SESSION['writing_status'] = 'NO';
}else{
  $_SESSION['writing_status'] = 'YES';
}

$mysqli->close();

header('Location: '.$url['root'].'/www/bss/write_done.php');
exit();
?>
