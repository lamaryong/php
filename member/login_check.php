<?php
//var_dump($_SERVER);
//D:/php/
require_once($_SERVER['DOCUMENT_ROOT'].'/www/preset.php');
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
//$mysqli = new mysqli($DB['host'],$DB['id'],$DB['pw'],$DB['db']);

//extract($_POST);

// 세션사용
//session_start();

$select = "SELECT * FROM ap_member WHERE user_id='$user_id'";
$result = $mysqli->query($select);

if($result->num_rows == 1) {
    //해당 ID 의 회원이 존재할 경우
    // 암호가 맞는지를 확인

    $encryped_pass = sha1($user_pass);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if($row['user_pass'] == $encryped_pass) {
      //세션에 저장하고자 하는 변수
      $_SESSION['is_logged'] = 'YES';
      $_SESSION['user_id'] = $user_id;
      $_SESSION['member_idx'] = $row['member_idx'];

      //성공시 다음 경로
      header('Location: '.$url['root'].'/www/member/login_done.php');
      exit();
    } else {
      $_SESSION['is_logged'] = 'NO';
      $_SESSION['user_id'] = '';
      // 암호가 틀렸음
      echo "아이디 및 비밀번호를 다시 확인해주십시오.";
      //header("Location: http://localhost/www/member/login_done.php");
      exit();
    }

} elseif($result->num_rows==0 || $user_pass == false) {
    // 없거나, 비정상
    echo "아이디 및 비밀번호를 다시 확인해주십시오.";
}

$result->free();

$mysqli->close();
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
