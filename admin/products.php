<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel | Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>
    <?php
    include('config.php');
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

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-danger">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/shopping/admin"><b>ShopShop</b> Admin Panel</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/shopping">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <br><br>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Electronics</h1>
                <div class="list-group">
                    <a href="products.php?c=electronics&amp;sc=mobile" class="list-group-item">Mobiles</a>
                    <a href="products.php?c=electronics&amp;sc=laptop" class="list-group-item">Laptops</a>
                    <a href="products.php?c=electronics&amp;sc=accessories" class="list-group-item">Accessories</a>
                </div>

                <h1 class="my-4">Appliances</h1>
                <div class="list-group">
                    <a href="products.php?c=appliances&amp;sc=tv" class="list-group-item">Televisions</a>
                    <a href="products.php?c=appliances&amp;sc=fridge" class="list-group-item">Refigirators</a>
                    <a href="products.php?c=appliances&amp;sc=smallhome" class="list-group-item">Small Home Appliances</a>
                </div>

                <h1 class="my-4">Fashion</h1>
                <div class="list-group">
                    <a href="products.php?c=fashion&amp;sc=men" class="list-group-item">Men</a>
                    <a href="products.php?c=fashion&amp;sc=women" class="list-group-item">Women</a>
                    <a href="products.php?c=appliances&amp;sc=children" class="list-group-item">Children</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

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

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
