 <?php include ('common.html.php');
    include('config.php');
    $total = 0;
    $query = "SELECT id, name, img, price, info FROM products";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching items: ' . mysqli_error($link);    
        include 'error.html.php';    
        exit();
    }
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
        array_push($_SESSION['cart'], $id);
        ShowCart();
        exit();
        }
      if(isset($_REQUEST['remove']))
      {
        unset($_SESSION['cart']);
        EmptyCart();
        exit();
      }
        while ($row = mysqli_fetch_array($result))    
        {   foreach ($_SESSION['cart'] as $cid) {
            if(in_array($row['id'], $_SESSION['cart']) && $row['id'] == $cid)
            $items[] = array('id' => $row['id'], 'name' => $row['name'], 'img' => $row['img'], 'price' => $row['price'], 'info' => $row['info']);
        } 
    }
    ?>
    <div class="col-lg-9">
            <br><br>
            <h1>Your Shopping Cart</h1>
        <hr>
        <div class="row">
            <?php foreach ($items as $item): ?>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class ="col-4 text-center" >
                               <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px; max-height: 150px">
                            </div>
                            <div class = "col-8">
                                <h4 class="text-primary"><?php echo $item['name']; ?></h4>
                                <h5>Rs.<?php echo $item['price']; $total += $item['price']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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