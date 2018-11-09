<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
$update = "UPDATE ap_bss SET subject = '$subject', content = '$content'
            WHERE doc_idx = $doc_idx";
$result = $mysqli -> query($update);

if($result == false){
  $_SESSION['modify_status'] = 'NO';
} else {
  $_SESSION['modify_status'] = 'YES';
}

$mysqli -> close();

header('Location: '.$url['root'].'/www/bss/modify_done.php');
exit();
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
