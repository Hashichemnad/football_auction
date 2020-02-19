  <html>
  <head>
  <?php
  session_start();
  session_unset();
  session_destroy();
  $_SESSION['logged_i'] = 0;
  echo '<script>alert("logout successfully")</script>';
  header("location:index.php");
  ?>
  </head></html>