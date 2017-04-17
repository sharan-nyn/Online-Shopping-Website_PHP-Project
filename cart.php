 <?php include ('common.html.php');
 $id = $_GET['pid'];
 ?>
<body>

    <?php include ('nav.html.php');
      if(isset($_REQUEST['addToCart']))
            {
                array_push($cart,$id);
            }
    ?>
    <div class="col-lg-9">
        <div class="row">
            <h1>Cart</h1>
        </div>
        <div class="row">
            <?php echo '<pre>'; print_r($cart); echo '</pre>';?>
        </div>
        <div class="row">
            <a href="/shopping" role="button" class="btn btn-success">Go Back</a>
        </div>
    </div>
    </div>
    </div>
    <br><br>
 <?php include ('footer.html.php');?>

</body>

</html>