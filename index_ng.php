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
      require("./core.php");
    ?>
    <div class="container">
      <header class="jumbotron text-center">
        <h2>STARTERGATE<strong>IDENTITY</strong>™</h2>
        <h3>Your Support Code</h3>
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
            echo "Web Browser | No Support";
          } else {
            if ($brow == '6') {
              echo "Web Browser | Unknown";
            } else {
              echo "Web Browser | Support";
            }
          }
          echo '<br />';
          if ($operabil == '0') {
            echo "Operation System | No Support";
          } else {
            if ($operabil == '2') {
              echo "Operation System | Unknown";
            } else {
              echo "Operation System | Support";
            }
          }
          echo '<br />';
          echo "Kind of Client Device | ".$devn;
          echo '<br />';
          echo "Client Web Browser | ".$brown;
          echo '<br />';
          echo "Client Operation System | ".$opern;
          echo '<br />';
          echo "Client Bit | ".$bitn;
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
