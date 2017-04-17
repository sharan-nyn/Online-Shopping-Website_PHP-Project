<?php
    $company = "ShopShop";
    include('common.html.php');
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
                        <div class="card h-100">
                            <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px; height:200px">
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
</body>

</html>
