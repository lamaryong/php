<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/www/preset.php');
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>
    signup.php - 회원가입 페이지<hr>

    <form name="singup_form" method="post" action="signup_check.php">
      아이디 : <input type="text" name="user_id"><br>
      비밀번호 : <input type="password" name="user_pass"><br>
      비밀번호 확인 : <input type="password" name="user_pass2"><br>
      이메일 : <input type="text" name="user_email"><br>
      <input type="submit" name="" value="회원가입">
    </form>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
