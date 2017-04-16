<?php
include('config.php');
$category = $_GET['c'];  
$subcategory = $_GET['sc'];
if (isset($_POST['submit']))   
    {
      $id = $_GET['pid'];
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'UPDATE '.$category.' SET name ="' . $i_name .'", img ="'.$i_image.'", price ="'.$i_price.'", info ="'.$i_info.'" where category ="'.$subcategory.'" and id ="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }   
      
      include('update.html.php');  
    }
if (isset($_POST['add']))   
    {   
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'INSERT INTO '.$category.' SET name="'.$i_name.'", price='.$i_price.', img="'.$i_image.'", info="'.$i_info.'", category="'.$subcategory.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
if (isset($_POST['delete']))   
    {
      $id = $_GET['pid'];
      $sql = 'DELETE FROM '.$category.' WHERE id="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
?>