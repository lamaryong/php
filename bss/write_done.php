<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/www/preset.php');
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';

$writing_status = $_SESSION['writing_status'];
if($writing_status == 'YES'){
  $message = '글이 저장되었습니다';
} else {
  $message = '저장에 실패했습니다';
}
?>

write_done.php - 게시판 글 저장 완료페이지<hr>

<?php
echo $message;
?>

<a href="/www/bss/list.php" class='btn'>글 목록보기</a>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
