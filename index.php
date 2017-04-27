<?php
    include('common.html.php');
    include('login.php');
    if(isset($_SESSION['login'])){
    header("location: main.php");
    }
?>
<body>
 <?php include('common.html.php') ?>
  <div class="col-lg-4 offset-md-4 card" style="padding:20px;">
    <form class="form" action = "login.php?&submit" method="post">       
      <h2 class="form-signin-heading text-center">Please Login</h2><hr>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><p></p>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><p></p>
      <button class="btn btn-primary btn-block" type="submit" name ="submit">Login</button>
    </form>
  </div>
</body>