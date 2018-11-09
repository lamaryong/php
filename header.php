<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href= 'http://<?php echo $_SERVER['HTTP_HOST'];?>/www/bootstrap/css/bootstrap.css' rel='stylesheet'>
    <link href= 'http://<?php echo $_SERVER['HTTP_HOST'];?>/www/main.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/www/bss/css/editor.css" type="text/css" charset="utf-8"/>
    <script src="/www/bss/js/editor_loader.js" type="text/javascript" charset="utf-8"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="header">
      <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/www/" class='btn'>홈</a>
      <a href="/www/member/signup.php" class='btn'>회원가입</a>

      <?php
      if($_SESSION['is_logged'] == 'YES'){
        echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/member/logout.php" class="btn">로그아웃</a>';
      } else {
        echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/www/member/login.php" class="btn">로그인</a>';
      }
      ?>

      <a href="/www/bss/write.php" class='btn'>게시글 작성</a>
      <a href="/www/bss/list.php" class='btn'>게시글 목록</a>
    </div>

    <div class="content">
