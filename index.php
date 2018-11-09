<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

        첫 페이지
        <hr>
        <a href="./member/signup.php" class='btn'>회원가입</a>
        <hr>
        <a href="./member/login.php" class='btn'>로그인</a>
        <hr>
        <a href="./bss/write.php" class='btn'>게시글 작성</a>

<?php
    include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
