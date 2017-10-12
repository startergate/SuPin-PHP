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
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
        $mo = '1';
        $devn = '모바일';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Xbox') !== false) {
          $mo = '2';
          $devn = 'Xbox';
        } else {
          $mo = '0';
          $devn = '컴퓨터';
        }
      }
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        $brow = '0';
        $brown = 'Microsoft Internet Explorer';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false) {
          $brow = '0';
          $brown = 'Microsoft Internet Explorer';
        } else {
          if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== false) {
            $brow = '1';
            $brown = 'Microsoft Edge';
          } else {
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'OPR') !== false) {
              $brow = '2';
              $brown = 'Opera';
            } else {
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
                $brow = '3';
                $brown = 'Mozila Firefox';
              } else {
                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) {
                  $brow = '4';
                  $brown = 'Google Chrome';
                } else {
                  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== false) {
                    $brow = '5';
                    $brown = 'Apple Safari';
                  } else {
                    $brow = '6';
                    $brown = 'Unknown Web Browser';
                  }
                }
              }
            }
          }
        }
      }
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT 6.1') !== false) {
        $oper = '1';
        $operabil = '1';
        $opern = 'Windows 7';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT 6.2') !== false) {
          $oper = '2';
          $operabil = '1';
          $opern = 'Windows 8';
        } else {
          if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT 6.3') !== false) {
            $oper = '3';
            $operabil = '1';
            $opern = 'Windows 8.1';
          } else {
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT 10.0') !== false) {
              $oper = '4';
              $operabil = '1';
              $opern = 'Windows 10';
            } else {
              if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows Phone 10') !== false) {
                $oper = '5';
                $operabil = '1';
                $opern = 'Windows 10 Mobile';
              } else {
                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT') !== false) {
                  $oper = '0';
                  $operabil = '0';
                  $opern = 'Windows Vista 이하';
                } else {
                  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows Phone') !== false) {
                    $oper = '6';
                    $operabil = '0';
                    $opern = 'Windows Phone 8.1 이하';
                  } else {
                    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows Mobile') !== false) {
                      $oper = 'e';
                      $operabil = '0';
                      $opern = 'Windows Mobile 7.5 이하';
                    } else {
                      if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') !== false) {
                        $oper = '7';
                        $operabil = '0';
                        $opern = '기타 Windows';
                      } else {
                        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false) {
                          $oper = '8';
                          $operabil = '1';
                          $opern = 'Android';
                        } else {
                          if (strpos($_SERVER['HTTP_USER_AGENT'], 'Linux') !== false) {
                            $oper = '8';
                            $operabil = '1';
                            $opern = 'Linux';
                          } else {
                            if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone OS') !== false) {
                              $oper = '9';
                              $operabil = '1';
                              $opern = 'iOS';
                            } else {
                              if (strpos($_SERVER['HTTP_USER_AGENT'], 'CPU OS') !== false) {
                                $oper = 'a';
                                $operabil = '1';
                                $opern = 'iOS(iPad)';
                              } else {
                                if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS X') !== false) {
                                  $oper = 'b';
                                  $operabil = '1';
                                  $opern = 'macOS';
                                } else {
                                  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS') !== false) {
                                    $oper = 'c';
                                    $operabil = '0';
                                    $opern = 'Mac OS';
                                  } else {
                                    $oper = 'd';
                                    $operabil = '2';
                                    $opern = 'Unknown Operation System';
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'x64') !== false) {
        $bit = '1';
        $bitn = '64비트';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'WOW64') !== false) {
          $bit = '1';
          $bitn = '64비트';
        } else {
          $bit = '0';
          $bitn = '32비트';
        }
      }
      echo '<br />';
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
