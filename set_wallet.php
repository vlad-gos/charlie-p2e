<?php
session_start();
  include "includes/init_db.php";
  $mysqli = new init_db;
  $selectz = $mysqli->update("users" , "wallet='1'","id='".$_SESSION['user']."'") or die('Error DB');
 
?>