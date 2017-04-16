<?php
    include('config.php');
    include('common.html.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
    $flag = 1;
    $url2 = "additem.php?c=".$category."&sc=".$subcategory;
    $query = "SELECT id, name, img, price, info FROM ".$category." where category ='".$subcategory."'";
    $result = mysqli_query($link, $query);
    if (!$result)    
    {    
        $error = 'Error fetching items: ' . mysqli_error($link);    
        include 'error.html.php';    
        exit();
    }
    while ($row = mysqli_fetch_array($result))    
    {    
        $items[] = array('id' => $row['id'], 'name' => $row['name'], 'img' => $row['img'], 'price' => $row['price'], 'info' => $row['info']);    
    }
    if (!$row['id'])    
    {    
        $flag = 0;
    }
?>
<body>
    <?php include ('list.html.php');?>
          <div class="col-lg-9">

                <div class="row">
                <?php foreach ($items as $item): ?>
                    <?php $url = "details.php?c=".$category."&sc=".$subcategory."&pid=".$item['id'];
                        ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="&id=1"><img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" alt="" style="padding:5px"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#"><?php echo $item['name']; ?></a></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                            </div>
                             <div class="card-footer">
                                <a href=<?php echo $url;?> role="button" class="btn btn-warning col-12">Edit Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                    <a href=<?php echo $url2;?> role="button" class="btn btn-success col-12"> + Add Item</a>
                    </div>
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
</body>

</html>
