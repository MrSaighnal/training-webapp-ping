<?php
session_start();
if(@$_POST['username']) == "admin" && @$_POST['password']) == "ILoveYou!")
{
  if(@$_POST['isAdmin']) == "false"))
  {
    
    $_SESSION['isAdmin'] = false;
    header('Location: ping.php');
  }elseif(@$_POST['isAdmin']) == "false"))
  {
    $_SESSION['isAdmin'] = true;
    header('Location: ping.php');
  }
}else
  header('Location: index.php?error=Incorrect%20Username%20or%20password');
?>
