<html>
  <head>
    <title>Internal Panel</title>
  </head>
  <body>
    <h1>Internal Panel</h1>
    <?php
session_start();
if(!isset($_SESSION['isAdmin']))
{
  echo "User not logged";
}elseif($_SESSION['isAdmin']==false)
{
  echo "User must have high privilege to use panel functionalities";
}elseif($_SESSION['isAdmin']==true)
{
  ?>
    <a href=logout.php>[Logout]</a><hr>
  Please use this panel to check the reachability for the desired system
  <form method=post action=ping.php>
    <input type=text name=address>
    <input type=submit value=send>
    </form>
   <?php
    if(isset($_POST['address']))
    {
      system("ping ".$_POST['address']);
    }
  
}
    

?>
    
  </body>
</html>
