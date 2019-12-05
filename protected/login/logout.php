<?php
   session_start();

   if(session_destroy()) {
      header("Location: login.php");
   }
   if( (!isset($_SESSION["id"]) and !isset($_POST["admin"])) or $_POST["admin"] == "Logout")
{
	session_destroy();
       header("Location: adminlogin.php");
       exit;
}
?>
