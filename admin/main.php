<?php
    include('common.html.php');
    include('config.php');
?>
<body>

    <?php include ('nav.html.php');?>
    <div class="container">
    <div class ="text-inverse"><h3>Select from following to view and edit:</h3></div>
        <div class="row">
            <div class="col-lg-3">
               <h1 class="my-4">Electronics</h1>
                <div class="list-group">
                    <a href="products.php?c=electronics&amp;sc=mobile" class="list-group-item">Mobiles</a>
                    <a href="products.php?c=electronics&amp;sc=laptop" class="list-group-item">Laptops</a>
                    <a href="products.php?c=electronics&amp;sc=accessories" class="list-group-item">Accessories</a>
                </div>
            </div>
            <div class="col-lg-3">
                <h1 class="my-4">Appliances</h1>
                <div class="list-group">
                    <a href="products.php?c=appliances&amp;sc=tv" class="list-group-item">Televisions</a>
                    <a href="products.php?c=appliances&amp;sc=fridge" class="list-group-item">Refigirators</a>
                    <a href="products.php?c=appliances&amp;sc=smallhome" class="list-group-item">Small Home Appliances</a>
                </div>
            </div>
            <div class="col-lg-3">
                <h1 class="my-4">Fashion</h1>
                <div class="list-group">
                    <a href="products.php?c=fashion&amp;sc=men" class="list-group-item">Men</a>
                    <a href="products.php?c=fashion&amp;sc=women" class="list-group-item">Women</a>
                    <a href="products.php?c=appliances&amp;sc=children" class="list-group-item">Children</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
<?php include ('footer.html.php');?>

</body>

</html>
