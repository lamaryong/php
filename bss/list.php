<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/www/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/www/header.php';
?>

<?php
$select = "SELECT * FROM ap_bss";
$result = $mysqli -> query($select);
$total_record = $result -> num_rows;
?>

목록<br>

<?php if($total_record == 0): ?>
  글이 없습니다
<?php else:?>
  <?php
  if(isset($page) && $page!='') {
    $now_page = $page;
  }
  else {
    $now_page = 1;
  }
  // 페이지당 글갯수 5개
  $record_per_page = 3;
  // 페이지 목록 갯수
  $page_per_block = 5;

  $start_record = $record_per_page*($now_page-1);
  $record_to_get = $record_per_page;
  $now_block = ceil($now_page / $page_per_block);

  if($start_record+$record_to_get > $total_record) {
    $record_to_get = $total_record - $start_record;
  }

  $q = "SELECT * FROM ap_bss WHERE 1 ORDER BY doc_idx DESC LIMIT $start_record, $record_to_get";
  $result = $mysqli->query($q);

  ?>

  <table class="table">
    <thead>
      <th>글번호</th>
      <th>제목</th>
      <th>작성자 인덱스</th>
      <th>등록일시</th>
    </thead>
    <?php while($data = $result -> fetch_array()): ?>
      <tr>
        <td><?php echo $data['doc_idx']?></td>
        <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/www/bss/view.php?doc_idx=<?php echo $data['doc_idx'];?>"><?php echo $data['subject']?></a></td>
        <td><?php echo $data['member_idx']?></td>
        <td><?php echo $data['reg_date']?></td>
      </tr>
    <?php endwhile ?>
  </table>

  <!-- 페이징 -->
  <div>
    <ul class="pagination">
      <?php
        $total_page = ceil($total_record / $record_per_page);
        $total_block = ceil($total_page / $page_per_block);
        if(1<$now_block ) {
          $pre_page = ($now_block-1) * $page_per_block;
          echo '<li><a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php?page='.$pre_page.'">이전</a></li>';
        }

        $start_page = ($now_block-1) * $page_per_block + 1;
        $end_page = $now_block * $page_per_block;
        if($end_page > $total_page) {
          $end_page = $total_page;
        }
      ?>

      <?php for($i=$start_page; $i<=$end_page; $i++) :?>
          <li><a href="/www/bss/list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php endfor?>

      <?php
        if($now_block < $total_block) {
          $post_page = ($now_block)*$page_per_block+1;
          echo '<li><a href="http://'.$_SERVER['HTTP_HOST'].'/www/bss/list.php?page='.$post_page.'">다음</a></li>';
        }
      ?>
    </ul>
  </div>
<?php endif ?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/www/footer.php';
?>
