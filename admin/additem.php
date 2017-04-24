<?php 
    include('config.php');
    include('common.html.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
    ?>
<body>

   <?php include ('nav.html.php');?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-8 offset-md-2">
                        <div class="card h-100" style="padding: 20px">
                            <h2 class="card-img-top text-primary">Adding a new <b><?php echo $subcategory?></b> to <b><?php echo $category?></b> category </h2>
                            <?php
                                $alink = "update.php?c=".$category."&sc=".$subcategory."&add";
                            ?>
                            <form action="<?php echo $alink?>" method="post">
                                  <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="text" class="form-control" name="image">
                                  </div>
                                  <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" class="form-control" name="price">
                                  </div>
                                  <div class="form-group">
                                    <label for="info">Info:</label>
                                    <textarea class="form-control" rows="5" name="info" value=""></textarea>
                                  </div>
                                  <button type="add" class="btn btn-success" name="add">Add</button>
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
