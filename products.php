<?php
<<<<<<< HEAD
    include('admin/config.php');
    include('common.html.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
=======
    $company = "ShopShop";
    include('common.html.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
    include('config.php');
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
    $query = "SELECT id, name, img, price, info FROM products where category ='".$category."' and subcategory = '".$subcategory."'";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching items: ' . mysqli_error($link);    
<<<<<<< HEAD
        include 'admin/error.html.php';    
=======
        include 'error.html.php';    
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
        exit();
    }
?>
<body>

    <?php include('nav.html.php'); ?>
            <div class="col-lg-9">
                <div class="row">
<<<<<<< HEAD
=======

>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
                <?php while ($item = mysqli_fetch_array($result)): ?>
                    <?php $url = "details.php?pid=".$item['id']; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="<?php echo $url; ?>" class="text-center"><img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px; height: auto;width: auto; max-width: 220px; max-height: 220px;"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="<?php echo $url;?>"><?php echo $item['name']; ?></a></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <br><br>
    <!-- /.container -->

<<<<<<< HEAD
    <?php include ('admin/footer.html.php');?>
=======
    <?php include ('footer.html.php');?>
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
   

</body>

</html>
