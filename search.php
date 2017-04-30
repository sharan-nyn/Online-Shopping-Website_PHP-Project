<?php
    include('common.html.php');
    include('admin/config.php');
    $category = $_GET['c'];
    $i_name = $_GET['q'];
    $query = "SELECT id,name,img,price,info FROM products where name LIKE '%".$i_name."%' and category='".$category."'";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching items: ' . mysqli_error($link);    
        include 'admin/error.html.php';    
        exit();
    }
?>
<body>

    <?php include('nav.html.php'); ?>
            <div class="col-lg-9">
                <div class="row">
                 <?php while ($item = mysqli_fetch_array($result)): ?>
                    <?php $url = "details.php?pid=".$item['id']; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 text-center">
                            <a href="&id=1"><img class="card-img-top img-fluid" src="../shopping/img/<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" style="padding:5px; height: auto;width: auto; max-width: 220px; max-height: 220px;"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href=<?php echo $url;?>><?php echo $item['name']; ?></a></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
       </div>
    </div>
    <br><br>
    <?php include ('admin/footer.html.php');?>
</body>
</html>