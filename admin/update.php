<<<<<<< HEAD
<?php
include('config.php');
if (isset($_POST['submit']))   
    {
      $id = $_GET['pid'];
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'UPDATE products SET name ="' . $i_name .'", img ="'.$i_image.'", price ="'.$i_price.'", info ="'.$i_info.'" where id ="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }   
      
      include('update.html.php');  
    }
else if (isset($_POST['add']))   
    {   
      $category = $_GET['c'];  
      $subcategory = $_GET['sc'];
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'INSERT INTO products SET name="'.$i_name.'", price="'.$i_price.'", img="'.$i_image.'", info="'.$i_info.'", category="'.$category.'", subcategory="'.$subcategory.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
else if (isset($_POST['delete']))   
    {
      $id = $_GET['pid'];
      $sql = 'DELETE FROM products WHERE id="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
=======
<?php
include('config.php');
if (isset($_POST['submit']))   
    {
      $id = $_GET['pid'];
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'UPDATE products SET name ="' . $i_name .'", img ="'.$i_image.'", price ="'.$i_price.'", info ="'.$i_info.'" where id ="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }   
      
      include('update.html.php');  
    }
else if (isset($_POST['add']))   
    {   
      $category = $_GET['c'];  
      $subcategory = $_GET['sc'];
      $i_name = mysqli_real_escape_string($link, $_POST['name']);
      $i_price = mysqli_real_escape_string($link, $_POST['price']);
      $i_image = mysqli_real_escape_string($link, $_POST['image']);
      $i_info = mysqli_real_escape_string($link, $_POST['info']);
      $sql = 'INSERT INTO products SET name="'.$i_name.'", price="'.$i_price.'", img="'.$i_image.'", info="'.$i_info.'", category="'.$category.'", subcategory="'.$subcategory.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
else if (isset($_POST['delete']))   
    {
      $id = $_GET['pid'];
      $sql = 'DELETE FROM products WHERE id="'.$id.'"';
      if (!mysqli_query($link, $sql))   
      {   
        $error = 'Error updating: ' . mysqli_error($link);   
        include 'error.html.php';   
        exit();   
      }
      include('update.html.php');  
    }
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
?>