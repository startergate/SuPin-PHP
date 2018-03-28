<?php
  require("./core.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="/static/img/favicon/donote/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/img/favicon/donote/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/img/favicon/donote/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/img/favicon/donote/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/img/favicon/donote/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/img/favicon/donote/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/img/favicon/donote/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/img/favicon/donote/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/donote/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/static/img/favicon/donote/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/donote/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon/donote/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/donote/favicon-16x16.png">
    <link rel="manifest" href="/donote/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/static/img/favicon/donote/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Support Pin Generater PHP</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="./style.css?ver=5">
  </head>
  <body id='target'>
    <div class="container">
      <header class="jumbotron text-center">
        <h2><strong>Do</strong>Products™</h2>
        <h3>Your Support Code</h3>
        <?php
          echo "<h1>".$mo.$brow.$oper.$bit."</h1>";
        ?>
      </header>
    </div>
    <div class="container">
  	  <header class="jumbotron text-left margin-erase">
        <?php
          echo "Web Browser | ";
          switch ($brow) {
            case 0:
              echo "No Support";
              break;

            case 6:
              echo "Unknown";
              break;

            default:
              echo "Support";
              break;
          }
          echo '<br />';
          echo "Operation System | ";
          switch ($operabil) {
            case 0:
              echo "No Support";
              break;

            case 2:
              echo "Unknown";
              break;

            default:
              echo "Support";
              break;
          }
          echo "<br />Kind of Client Device | ".$devn."<br />Client Web Browser | ".$brown."<br />Client Operation System | ".$opern."<br />Client Bit | ".$bitn."<br /><hr />".$_SERVER['HTTP_USER_AGENT'];
        ?>
      </header>
    </div>
    <div class="container">
      <header class="resize jumbotron text-center margin-erase">
        <h5 class="headerminus">Copyright by STARTERGATE</h5>
      </header>
    </div>
  </body>
</html>
