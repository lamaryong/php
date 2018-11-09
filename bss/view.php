<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';

//쿼리날릴 때 ''은 안 먹힌다. ""로 해야한다.
$select = "SELECT * FROM ap_bss WHERE doc_idx = $doc_idx";
$result = $mysqli -> query($select);
$data = $result -> fetch_array();
?>

<table class="table">
  <tr>
    <th>제목</th>
    <td><?php echo $data['subject']; ?></td>
  </tr>
  <tr>
    <th>작성자</th>
    <td><?php echo $data['member_idx']; ?></td>
  </tr>
  <tr>
    <th>내용</th>
    <td><?php echo $data['content']; ?></td>
  </tr>
</table>

<?php echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php" class="btn">돌아가기</a>';

  if($_SESSION['member_idx'] == $data['member_idx']){
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/modify.php?doc_idx='.$doc_idx.'" class="btn">수정</a>';

    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/delete.php?doc_idx='.$doc_idx.'" class="btn">삭제</a>';
  }
?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
