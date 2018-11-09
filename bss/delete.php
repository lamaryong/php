<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
$delete = "DELETE FROM ap_bss WHERE doc_idx = $doc_idx";
$result = $mysqli -> query($delete);

if($result == false){
  $_SESSION['delete_status'] = 'NO';
} else {
  $_SESSION['delete_status'] = 'YES';
}

$mysqli -> close();

header('Location: '.$url['root'].'/www/bss/delete_done.php');
exit();
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
