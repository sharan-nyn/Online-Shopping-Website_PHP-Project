<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Item</title>

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
    }
    </style>

</head>
    <?php 
    include('config.php');
    $category = $_GET['c'];  
    $subcategory = $_GET['sc'];
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
