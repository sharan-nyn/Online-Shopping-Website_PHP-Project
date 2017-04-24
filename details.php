<?php  
<<<<<<< HEAD
    include('common.html.php');
    $id = $_GET['pid'];
    include('admin/config.php');
=======
    $company = "ShopShop";
    include('common.html.php');
    $id = $_GET['pid'];
    include('config.php');
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
    $query = "SELECT id, name, img, price, info FROM products where id ='".$id."'";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching electronics items: ' . mysqli_error($link);    
<<<<<<< HEAD
        include 'admin/error.html.php';    
=======
        include 'error.html.php';    
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
        exit();
    }
    $item = mysqli_fetch_array($result);
?>
<body>

       <?php include ('nav.html.php');?>

            <div class="col-lg-9">
               <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 text-center">
                        <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style=" max-height: 300px;">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="text-primary"><?php echo $item['name']; ?></h4>
                        <h5>Price : Rs.<?php echo $item['price']; ?></h5>
                        <hr>
<<<<<<< HEAD
                        <h6>Description</h6>
                        <p><?php echo htmlspecialchars($item['info'], ENT_QUOTES,'UTF-8'); ?></p>
                        <a href="cart.php?pid=<?php echo $id; ?>&addToCart" role="button" class= "btn btn-success">Add To Cart!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php include ('admin/footer.html.php');?>
=======
                        <h6 class="">Description</h6>
                        <p class=""><?php echo htmlspecialchars($item['info'], ENT_QUOTES,'UTF-8'); ?></p>
                        <a href="cart.php?pid=<?php echo $id; ?>&addToCart" role="button" class= "btn btn-success">Add To Cart!</a>
                    </div>
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
