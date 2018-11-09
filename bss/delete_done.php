<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';

$delete_status = $_SESSION['delete_status'];

if($delete_status == 'YES'){
  $message = '글이 삭제되었습니다';
} else {
  $message = '삭제에 실패했습니다';
}
?>

delete_done.php - 게시판 글 삭제 완료 페이지<hr>

<?php
echo $message.'<br>';
echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php" class="btn" >목록보기</a>';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
