<?php
    include('common.html.php');
<<<<<<< HEAD
?>
<body>
<?php
    session_start();
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
?>
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/shopping"><b>ShopShop</b></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cart.php">Cart(<?php echo count($_SESSION['cart']);?>)<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card col-lg-6 offset-md-3" style="padding: 10px">
        <form action="search.php" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search For Products" name="q">
              <label class="control-label" style="padding-left:10px;padding-top: 5px;padding-right: 10px">Category : </label>
                <select name="c" class="form-control">
                  <option>electronics</option>
                  <option>appliances</option>
                  <option>fashion</option>
                </select> 
                <div class="input-group-btn">
                    <button class="btn bg-inverse text-white" type="submit">Go</button>
                </div>
            </div>
        </form>
        </div>
        <br>
        <div class="row offset-md-2">
            <div class="col-lg-3">
               <h1 class="my-4">Electronics</h1>
                <div class="list-group">
                    <a href="products.php?c=electronics&amp;sc=mobile" class="list-group-item">Mobiles</a>
                    <a href="products.php?c=electronics&amp;sc=laptop" class="list-group-item">Laptops</a>
                    <a href="products.php?c=electronics&amp;sc=accessories" class="list-group-item">Accessories</a>
                </div>
            </div>
            <div class="col-lg-3">
                <h1 class="my-4">Appliances</h1>
                <div class="list-group">
                    <a href="products.php?c=appliances&amp;sc=tv" class="list-group-item">Televisions</a>
                    <a href="products.php?c=appliances&amp;sc=fridge" class="list-group-item">Refigirators</a>
                    <a href="products.php?c=appliances&amp;sc=smallhome" class="list-group-item">Small Home Appliances</a>
                </div>
            </div>
            <div class="col-lg-3">
                <h1 class="my-4">Fashion</h1>
                <div class="list-group">
                    <a href="products.php?c=fashion&amp;sc=men" class="list-group-item">Men</a>
                    <a href="products.php?c=fashion&amp;sc=women" class="list-group-item">Women</a>
                    <a href="products.php?c=appliances&amp;sc=children" class="list-group-item">Children</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php include ('admin/footer.html.php');?>
=======
    include('config.php');
    $result = mysqli_query($link, "SELECT id, name, img, price, info FROM products where category ='electronics' and subcategory = 'mobile'");    
    if (!$result)    
    {    
        $error = 'Error fetching electronics items: ' . mysqli_error($link);    
        include 'error.html.php';    
        exit();
    }
    while ($row = mysqli_fetch_array($result))    
    {    
        $items[] = array('id' => $row['id'], 'name' => $row['name'], 'img' => $row['img'], 'price' => $row['price'], 'info' => $row['info']);    
    }
?>
<body>
<?php include('nav.html.php');?>
    <div class="col-lg-9">
                <div class="row">
                <?php foreach ($items as $item): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px; height: auto;width: auto; max-width: 220px; max-height: 220px;>
                            <div class="card-block">
                                <h4 class="card-title"><?php echo $item['name']; ?></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <br><br>
    <!-- /.container -->
   <?php include ('footer.html.php');?>
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
</body>

</html>
