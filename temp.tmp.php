        if(isset($_REQUEST['addToCart']))
        {
            array_push($cart,$id);
            echo "addedtocart id = ";
            echo $cart[0];
        }

        session_start();
            if(isset($SESSION['cart'])){
                $cart = $SESSION['cart'];
            }else{
                $cart = array();
                $SESSION['cart'] = $cart;
            }