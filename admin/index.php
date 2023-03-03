<html>
  <head>
    <title>Admin Panel</title>
  </head>
  <body>
    <?php
    session_start();
    if(isset($_SESSION['isAdmin']))
      header('Location: ping.php');
    ?>
    <h1>Admin Panel - Restricted Area</h1>
    <form method=POST action=panel.php>
      Username:  <input type=text name=username>
      Password:  <input type=password name=password>
      <input type=hidden name=isAdmin value=false>
      <input type=submit value=send>
    </form>
    <?php echo "<font color=red>".@$_GET['error']."</font>"; ?>
  </body>
</html>
