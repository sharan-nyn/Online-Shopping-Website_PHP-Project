 <?php include ('common.html.php');?>
<body>

    <!-- Navigation -->
    <?php include ('nav.html.php');?>
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
 <?php include ('footer.html.php');?>

</body>

</html>