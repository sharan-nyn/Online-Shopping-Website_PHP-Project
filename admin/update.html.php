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
<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-danger">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#"><b>ShopShop</b> Admin Panel</a>
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
                    <div class="col-lg-12">
                        <div class="card h-100" style="padding: 20px">
                            <h1 class="card-img-top text-success">Updated Database!</h1>
                            <div class="card-block">
                                <div><p><b>Ran the query:</b></p><p><?php echo $sql; ?></p></div>
                                <a href="/shopping/admin">Press Here To Go Back! </a> 
                            </div>
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