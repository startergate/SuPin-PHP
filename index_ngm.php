<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Support Pin Generater Next Generation</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body id='target'>
    <?php
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
        $mo = '1';
        $devn = 'Mobile';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Xbox') !== false) {
          $mo = '2';
          $devn = 'Xbox';
        } else {
          $mo = '0';
          $devn = 'Computer';
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
        $bitn = '64bit';
      } else {
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'WOW64') !== false) {
          $bit = '1';
          $bitn = '64bit';
        } else {
          $bit = '0';
          $bitn = '32bit';
        }
      }
      ?>
      <div class="container">
        <header class="jumbotron text-center">
          <h1>S<strong>ID</strong>™</h1>
          <h4>Your Support Code</h4>
          <?php
            echo "<h1>";
            echo $mo;
            echo $brow;
            echo $oper;
            echo $bit;
            echo "</h1>";
          ?>
        </header>
      </div>
      <div class="container">
  			<header class="jumbotron text-left">
          <?php
          if ($brow == '0') {
            echo "<h5>Web Browser | No Support</h5>";
          } else {
            if ($brow == '6') {
              echo "<h5>Web Browser | Unknown</h5>";
            } else {
              echo "<h5>Web Browser | Support</h5>";
            }
          }
          echo '<br />';
          if ($operabil == '0') {
            echo "<h5>Operation System | No Support</h5>";
          } else {
            if ($operabil == '2') {
              echo "<h5>Operation System | Unknown</h5>";
            } else {
              echo "<h5>Operation System | Support</h5>";
            }
          }
          echo '<br />';
          echo "<h5>Kind of Client Device | ".$devn.'</h5>';
          echo '<br />';
          echo "<h5>Client Web Browser | ".$brown.'</h5>';
          echo '<br />';
          echo "<h5>Client Operation System | ".$opern.'</h5>';
          echo '<br />';
          echo "<h5>Client Bit | ".$bitn.'<h5>';
          echo '<br />';
          echo $_SERVER['HTTP_USER_AGENT'];
        ?>
      </header>
    </div>
    <div class="container">
      <header class="jumbotron text-center">
        <h5>Copyright by STARTERGATE</h5>
      </header>
    </div>
  </body>
</html>
