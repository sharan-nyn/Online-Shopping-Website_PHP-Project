<?php
include('config.php');
session_start();
if (isset($_POST['submit']))   
    {
      $username = mysqli_real_escape_string($link, $_POST['username']);
      $password = mysqli_real_escape_string($link, $_POST['password']);
      $sql = "SELECT usr,pswd FROM users WHERE usr = '".$username."' and pswd ='".$password."' and admin = 1";
      $result = mysqli_query($link, $sql);
      if (!$result)    
      {    
          $error = 'Error' . mysqli_error($link);    
          include 'error.html.php';    
          exit();
      }
      if(mysqli_num_rows($result)>0){
        $_SESSION['admin'] = $username;
        header("Location:main.php");
      }
      else
        echo "Invalid Login";
    }
if (isset($_REQUEST['logout']))
{
  unset($_SESSION['admin']);
  header("Location:../index.php");
}
?>