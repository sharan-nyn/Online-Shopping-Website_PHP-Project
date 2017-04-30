<?php  
    include('common.html.php');
    $id = $_GET['pid'];
    include('admin/config.php');
    $query = "SELECT id, name, img, price, info FROM products where id ='".$id."'";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching electronics items: ' . mysqli_error($link);    
        include 'admin/error.html.php';    
        exit();
    }
    $item = mysqli_fetch_array($result);
?>
<body>

       <?php include ('nav.html.php');?>

            <div class="col-lg-9">
               <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 text-center">
                        <img class="card-img-top img-fluid" src="../shopping/img/<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style=" max-height: 300px;">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="text-primary"><?php echo $item['name']; ?></h4>
                        <h5>Price : Rs.<?php echo $item['price']; ?></h5>
                        <hr>
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
</body>

</html>
