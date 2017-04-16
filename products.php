<?php
    $company = "ShopShop";
    include('common.html.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
    include('config.php');
    $query = "SELECT id, name, img, price, info FROM ".$category." where category ='".$subcategory."'";
    $result = mysqli_query($link, $query);    
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

    <?php include('nav.html.php'); ?>
            <div class="col-lg-9">
                <div class="row">

                <?php foreach ($items as $item): ?>
                    <?php $url = "details.php?c=".$category."&sc=".$subcategory."&pid=".$item['id']; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="&id=1"><img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href=<?php echo $url;?>><?php echo $item['name']; ?></a></h4>
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
