<<<<<<< HEAD
<?php
    session_start();
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
?>
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/shopping"><b>ShopShop</b></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cart.php">Cart(<?php echo count($_SESSION['cart']);?>)<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="card col-lg-6 offset-md-3" style="padding: 10px">
        <form action="search.php" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search For Products" name="q">
                                  <label class="control-label" style="padding-left:10px;padding-top: 5px;padding-right: 10px">Category : </label>
                                    <select name="c" class="form-control">
                                      <option>electronics</option>
                                      <option>appliances</option>
                                      <option>fashion</option>
                                    </select> 
                                <div class="input-group-btn">
                                    <button class="btn bg-inverse text-white" type="submit">Go</button>
                                </div>
                            </div>
                        </form>
        </div>
        <br>
        <div class="row">

            <div class="col-lg-3">

                <h2 class="my-4">Electronics</h2>
                <div class="list-group">
                    <a href="products.php?c=electronics&amp;sc=mobile" class="list-group-item">Mobiles</a>
                    <a href="products.php?c=electronics&amp;sc=laptop" class="list-group-item">Laptops</a>
                    <a href="products.php?c=electronics&amp;sc=accessories" class="list-group-item">Accessories</a>
                </div>

                <h2 class="my-4">Appliances</h2>
                <div class="list-group">
                    <a href="products.php?c=appliances&amp;sc=tv" class="list-group-item">Televisions</a>
                    <a href="products.php?c=appliances&amp;sc=fridge" class="list-group-item">Refigirators</a>
                    <a href="products.php?c=appliances&amp;sc=smallhome" class="list-group-item">Small Home Appliances</a>
                </div>

                <h2 class="my-4">Fashion</h2>
                <div class="list-group">
                    <a href="products.php?c=fashion&amp;sc=men" class="list-group-item">Men</a>
                    <a href="products.php?c=fashion&amp;sc=women" class="list-group-item">Women</a>
                    <a href="products.php?c=appliances&amp;sc=children" class="list-group-item">Children</a>
                </div>

=======
<?php
    session_start();
        if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
?>
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/shopping"><b>ShopShop</b></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="cart.php">Cart(<?php echo count($_SESSION['cart']);?>)<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- Page Content -->
    <div class="container">
        <div class="card col-lg-6 offset-md-3" style="padding: 10px">
        <form action="search.php" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search For Products" name="q">
                                  <label class="control-label" style="padding-left:10px;padding-top: 5px;padding-right: 10px">Category : </label>
                                    <select name="c" class="form-control">
                                      <option>electronics</option>
                                      <option>appliances</option>
                                      <option>fashion</option>
                                    </select> 
                                <div class="input-group-btn">
                                    <button class="btn bg-inverse text-white" type="submit">Go</button>
                                </div>
                            </div>
                        </form>
        </div>
        <br>
        <div class="row">

            <div class="col-lg-3">

                <h2 class="my-4">Electronics</h2>
                <div class="list-group">
                    <a href="products.php?c=electronics&amp;sc=mobile" class="list-group-item">Mobiles</a>
                    <a href="products.php?c=electronics&amp;sc=laptop" class="list-group-item">Laptops</a>
                    <a href="products.php?c=electronics&amp;sc=accessories" class="list-group-item">Accessories</a>
                </div>

                <h2 class="my-4">Appliances</h2>
                <div class="list-group">
                    <a href="products.php?c=appliances&amp;sc=tv" class="list-group-item">Televisions</a>
                    <a href="products.php?c=appliances&amp;sc=fridge" class="list-group-item">Refigirators</a>
                    <a href="products.php?c=appliances&amp;sc=smallhome" class="list-group-item">Small Home Appliances</a>
                </div>

                <h2 class="my-4">Fashion</h2>
                <div class="list-group">
                    <a href="products.php?c=fashion&amp;sc=men" class="list-group-item">Men</a>
                    <a href="products.php?c=fashion&amp;sc=women" class="list-group-item">Women</a>
                    <a href="products.php?c=appliances&amp;sc=children" class="list-group-item">Children</a>
                </div>

>>>>>>> 0342aff341b9345020c70878a7a3d11b6f42c1cb
            </div>