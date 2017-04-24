<?php
include('admin/config.php');
session_start();
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
if (isset($_POST['submit']))   
    {
      $username = mysqli_real_escape_string($link, $_POST['username']);
      $password = mysqli_real_escape_string($link, $_POST['password']);
      $sql = "SELECT usr,pswd FROM users WHERE usr = '".$username."' and pswd ='".$password."'";
      $result = mysqli_query($link, $sql);
      if (!$result)    
      {    
          $error = 'Error' . mysqli_error($link);    
          include 'error.html.php';    
          exit();
      }
      if(mysqli_num_rows($result)>0){
        $_SESSION['login'] = $username;
        header("Location:main.php");
      }
      else
        echo "Invalid Login";
    }
if (isset($_REQUEST['logout']))
{
  session_destroy();
  header("Location:index.php");
}
?>