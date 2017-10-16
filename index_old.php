<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Support Pin Generater Ahlpa 0.6</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body id='target'>
    <div class="container">
			<header class="jumbotron text-center">
    <?php
      require("./core.php");
      if ($brow == '0') {
        echo '사용자의 웹브라우저는 더이상 지원되지 않습니다.';
      } else {
        echo '사용자의 웹브라우저는 지원 대상입니다.';
      }
      echo '<br />';
      if ($operabil == '0') {
        echo '사용자의 운영체제는 더이상 지원되지 않습니다.';
      } else {
        if ($operabil == '2') {
          echo '사용자의 운영체제를 알 수 없습니다.';
        } else {
          echo '사용자의 운영체제는 지원 대상입니다.';
        }
      }
      echo '<br />';
      echo '사용자의 디바이스는 '.$devn.'입니다.';
      echo '<br />';
      echo '사용자의 웹브라우저는 '.$brown.'입니다.';
      echo '<br />';
      echo '사용자의 운영체제는 '.$opern.'입니다.';
      echo '<br />';
      echo '사용자의 Bit는 '.$bitn.'입니다.';
      echo '<br />';
      echo $_SERVER['HTTP_USER_AGENT'];
      echo '<br />';
      echo 'your support code is ';
      echo $mo;
      echo $brow;
      echo $oper;
      echo $bit;
    ?>
  </body>
</html>
