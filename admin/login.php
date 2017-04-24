<?php
include('config.php');
if (isset($_POST['submit']))   
    {
      $username = mysqli_real_escape_string($link, $_POST['username']);
      $password = mysqli_real_escape_string($link, $_POST['password']);
      $sql = "SELECT username,password FROM users WHERE username = '".$username."'";
      echo $sql;
      $result = mysqli_query($link, $sql);
      if (!$result)    
      {    
          $error = 'Error fetching electronics items: ' . mysqli_error($link);    
          include 'error.html.php';    
          exit();
      }
      $row = mysql_fetch_array($result);
      echo $row['username'];
      echo $row['password'];
      if($row['username']==$username && $row['password']==$password)
          echo "You are a validated user.";
      else
          echo "Sorry, your credentials are not valid, Please try again.";
    }
?>