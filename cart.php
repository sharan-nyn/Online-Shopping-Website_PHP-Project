 <?php include ('common.html.php');
    include('config.php');
    $total = 0;
 ?>
<body>
    <?php function ShowCart() {?>
        <div class="col-lg-9">
        <h1>Added To Cart</h1><hr>
        <a href="cart.php" role ="button" class="btn btn-success">Open Cart</a>
        </div>
    <?php }?>
    <?php function EmptyCart() {?>
        <div class="col-lg-9">
        <h1>Cart Empty!</h1><hr>
        <a href="index.php" role ="button" class="btn btn-success">Go Back</a>
        </div>
    <?php }?>
    <?php include ('nav.html.php');
      if(isset($_REQUEST['addToCart']))
        {
        $id = $_GET['pid'];
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id] += 1;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
        ShowCart();
        exit();
        }
      if(isset($_REQUEST['remove']))
      {
        unset($_SESSION['cart']);
        EmptyCart();
        exit();
      }
      if(count($_SESSION['cart']) == 0)
      {
        EmptyCart();
        exit();
      }
     $query = "SELECT id, name, img, price, info FROM products WHERE id IN (".implode(",", array_keys($_SESSION['cart'])).")";
     $result = mysqli_query($link, $query);    
     if (!$result)    
     {    
        $error = 'Error fetching items: ' . mysqli_error($link);
        include 'error.html.php';    
        exit();
     }
    ?>
    <div class="col-lg-9">
            <br><br>
            <h1>Your Shopping Cart</h1>
        <hr>
        <div class="row">
            <?php while ($item = mysqli_fetch_array($result)): ?>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class ="col-4 text-center" >
                               <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px; max-height: 150px">
                            </div>
                            <div class = "col-8">
                                <h4 class="text-primary"><?php echo $item['name']; ?></h4>
                                <h5>Quantity: <?php echo $_SESSION['cart'][$item['id']]; ?></h5>
                                <h5>Rs.<?php echo $item['price']; $total += (str_replace(",","",$item['price']) * $_SESSION['cart'][$item['id']]); ?></h5>
                            </div>
                        </div>
                        <p></p>
                    </div>
               <?php endwhile; ?>
        </div>
        <hr>
        <div class="row">
             <div class ="col-4">
            <button class="btn btn-warning">Total = Rs.<?php echo $total;?> </button>
            </div>
            <div class ="col-4">
            <a href="/shopping" role="button" class="btn btn-success">Go Back</a>
            </div>
            <div class ="col-4">
            <a href="cart.php?&remove" role="button" class="btn btn-danger">Empty Cart</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br><br>
 <?php include ('footer.html.php');?>

</body>

</html>