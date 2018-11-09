<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/www/preset.php');
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>
    login.php - 로그인 페이지<hr>

    <form name="login_form" action="login_check.php" method="post">
      아이디 : <input type="text" name="user_id">
      비밀번호 : <input type="password" name="user_pass"><br><br>
      <input type="submit" class="btn" value="로그인">
    </form>

    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
    ?>
