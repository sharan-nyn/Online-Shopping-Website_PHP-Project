<?php
    include('config.php');
    include('common.html.php');
    $id = $_GET['pid'];
    $formlink = "update.php?pid=".$id."&submit";
    $deletelink = "update.php?pid=".$id."&delete";
    $query = "SELECT id, name, img, price, info FROM products where id ='".$id."'";
    $result = mysqli_query($link, $query);    
    if (!$result)    
    {    
        $error = 'Error fetching electronics items: ' . mysqli_error($link);    
        include 'error.html.php';    
        exit();
    }
    $item = mysqli_fetch_array($result);
?>

<body>

   <?php include ('list.html.php');?>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        
                            <a href="#"><img class="card-img-top img-fluid" src="../img/<?php echo htmlspecialchars($item['img'], ENT_QUOTES,'UTF-8'); ?>" style="padding:5px"></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#"><?php echo $item['name']; ?></a></h4>
                                <h5>Rs.<?php echo $item['price']; ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($item['info'], ENT_QUOTES,'UTF-8'); ?></p>
                            </div>
                    </div>
                <div class="col-lg-8 col-md-6 mb-4">
                        <div class="card h-100 w-200" style="padding:10px">
                            <h4 class="card-img-top text-success">Edit Details</h4>
                            <form action="<?php echo $formlink?>" method="post">
                                  <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="text" class="form-control" name="image" value="<?php echo $item['img']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $item['name']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" class="form-control" name="price" value="<?php echo $item['price']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="info">Info:</label>
                                    <textarea class="form-control" rows="5" name="info" value=""><?php echo htmlspecialchars($item['info'], ENT_QUOTES,'UTF-8'); ?></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                  <a href="javascript:history.go(-1)" role="button" class="btn btn-warning">Cancel</a>
                                  </form>
                                <p></p>
                                <form action="<?php echo $deletelink?>" method="post">
                                  <button type="submit" class="btn btn-danger" name="delete">Delete Item (Warning, Once Done No Undo)</button>
                                </form>

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
