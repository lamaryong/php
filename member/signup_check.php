<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/www/preset.php');
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';

/*$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);

if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

extract($_POST);*/

echo $user_id.'<br>';
echo $user_pass.'<br>';
echo $user_pass2.'<br>';
echo $user_email.'<br>';

// md5(), sha1()
// 주어진 문자열의 해쉬값을 구해주는 함수들이 있습니다. 문자열을 암호화 하는데 이용될 수 있습니다.
// 하지만 이것도 충분히 해독이 가능함.
$encrypted_pass = sha1($user_pass);

$insert = "INSERT INTO ap_member(user_id, user_pass, user_email)
            VALUES ('$user_id', '$encrypted_pass', '$user_email')";

//$mysqli->query($insert);
if($mysqli->query($insert) === True){
    //header 이전엔 화면에 뭔가 출력하면 안된다. header은 HTTP raw header를 전송하는 함수.
    header("Location: http://localhost/www/member/signup_done.php");
    exit();
    echo "성공적으로 저장되었습니다.";
} else {
    echo "실패하였습니다.$insert.'<br>'.$mysqli->error";
}

$mysqli->close();
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>
