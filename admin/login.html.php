  <?php include('common.html.php') ?>
  <div class="col-lg-4 offset-md-4 card" style="padding:20px;">
    <form class="form" action = "login.php?&submit" method="post">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><p></p>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><p></p>
      <button class="btn btn-primary btn-block" type="submit" name ="submit">Login</button>
    </form>
  </div>