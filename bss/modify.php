<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
if(isset($doc_idx) == false){
  echo '글번호가 지정되지 않았습니다.';
  exit();
}

$select = "SELECT * FROM ap_bss WHERE doc_idx = $doc_idx";
$result = $mysqli -> query($select);
$data = $result -> fetch_array();
?>

글 수정하기<hr>
<form name="modify_form" action="./modify_check.php" method="post">
<input type="hidden" name="doc_idx" value="<?php echo $doc_idx ?>">
  <table>
    <tr>
      <td>제목</td>
      <td>
        <input type ="text" name = "subject" size ="90" value="<?php echo $data['subject'];?>">
      </td>
    </tr>
    <tr>
      <td>
        내용
      </td>
      <td>
        <textarea name="content" cols="100" rows="10" ><?php echo $data['content'];?></textarea>
      </td>
    </tr>
  </table>

  <div>
    <input type = "submit" value = "저장">
  </div>
</form>

<div>
  <?php
  echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php" class="btn" >돌아가기</a>';
  ?>
</div>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
