<?php
<<<<<<< HEAD
    include('common.html.php');
    include('admin/config.php');
    $category = $_GET['c'];
    $i_name = $_GET['q'];
    $query = "SELECT id,name,img,price,info,category FROM products where name LIKE '%".$i_name."%'";
=======
    $company = "ShopShop";
    include('common.html.php');
    include('config.php');
    $category = $_GET['c'];
    $i_name = $_GET['q'];
    $query = "SELECT id,name,img,price,info,category FROM ".$category." where name LIKE '%".$i_name."%'";
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching items: ' . mysqli_error($link);    
        include 'admin/error.html.php';    
        exit();
    }
<<<<<<< HEAD
=======
    while ($row = mysqli_fetch_array($result))    
    {    
        $items[] = array('id' => $row['id'],'name' => $row['name'], 'img' => $row['img'], 'price' => $row['price'], 'info' => $row['info'],'category' => $row['category']);    
    }
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
?>
<body>

    <?php include('nav.html.php'); ?>
            <div class="col-lg-9">
                <div class="row">
<<<<<<< HEAD
                 <?php while ($item = mysqli_fetch_array($result)): ?>
                    <?php $url = "details.php?c=".$category."&sc=".$item['category']."&pid=".$item['id']; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="&id=1"><img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" style="padding:5px; height: auto;width: auto; max-width: 220px; max-height: 220px;"></a>
=======

                <?php foreach ($items as $item): ?>
                    <?php $url = "details.php?c=".$category."&sc=".$item['category']."&pid=".$item['id']; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="&id=1"><img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px"></a>
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
                            <div class="card-block">
                                <h4 class="card-title"><a href=<?php echo $url;?>><?php echo $item['name']; ?></a></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                <?php endwhile; ?>
=======
                <?php endforeach; ?>
>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
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
