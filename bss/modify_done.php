<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';

$modify_status = $_SESSION['modify_status'];
if($modify_status=='YES') {
    $message = '수정이 완료되었습니다.';
}
else {
    $message = '수정이 실패했습니다.';
}
?>

        modify_done.php - 게시판 글 수정 완료 페이지<br />
        <hr />

<?php
    echo $message.'<br>';
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php" class="btn" >목록보기</a>';
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
