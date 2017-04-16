<?php
	  define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "password");
    define("DB_DATABASE", "shopping");
    $link =  mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD); 
    if (!$link) 
    { 
      $error = 'Unable to connect to the database server.'; 
      include 'admin/error.html.php'; 
      exit(); 
    } 
    if (!mysqli_set_charset($link, 'utf8')) 
    { 
      $error = 'Unable to set database connection encoding.'; 
      include 'admin/error.html.php'; 
      exit(); 
    } 
    if (!mysqli_select_db($link, DB_DATABASE)) 
    { 
      $error = 'Unable to locate the shopping database.'; 
      include 'admin/error.html.php'; 
      exit(); 
    }
    if (get_magic_quotes_gpc())   
  {   
    function stripslashes_deep($value)   
    {   
      $value = is_array($value) ?   
          array_map('stripslashes_deep', $value) :   
          stripslashes($value);   
     
      return $value;   
    }   
     
    $_POST = array_map('stripslashes_deep', $_POST);   
    $_GET = array_map('stripslashes_deep', $_GET);   
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);   
    $_REQUEST = array_map('stripslashes_deep', $_REQUEST);   
}
?>