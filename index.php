<?php
    session_start();

    $products = array();

    $temp = array();
    $temp['name'] = 'Roller Scale';
    $temp['image'] = 'image/SCALE.jpg';
    $temp['price'] = 50;
    $products[] = (object)$temp;

    $temp = array();
    $temp['name'] = 'Engineering Mathematics';
    $temp['image'] = 'image/m1.jpg';
    $temp['price'] = 300;
    $products[] = (object)$temp;

    $temp = array();
    $temp['name'] = 'Sheet Holder';
    $temp['image'] = 'image/HOLDER.jpg';
    $temp['price'] = 100;
    $products[] = (object)$temp;

    $temp = array();
    $temp['name'] = 'Basic Electrical';
    $temp['image'] = 'image/BEE.jpg';
    $temp['price'] = 250;
    $products[] = (object)$temp;

    if(isset($_GET['action']) && $_GET['action']=='add'){
        $_SESSION["cart"][$_GET['id']] = $_GET['id'];
    }else if(isset($_GET['action']) && $_GET['action']=='remove'){
        if(isset($_SESSION["cart"][$_GET['id']])){
            unset($_SESSION["cart"][$_GET['id']]);
        }
    }else if(isset($_GET['action']) && $_GET['action']=='delete'){
        session_unset();
        session_destroy();
    }
    $cart = isset($_SESSION['cart']) && !empty($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> EDUSWAP </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
           <!-- <a href="#" class="fas fa-heart"></a>-->
            <span id="shopping_cart_option"><a href="#" class="fas fa-shopping-cart"></a></span>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
           <!-- <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>-->
        </nav>
    </div>

</header>

<div class="add-to-cart-sec">
    <span class="btn-close"><i class="fas fa-plus"></i></span>
    <h6 class="cart-heading">Shopping Cart</h6>
    <?php if(!empty($cart)){ ?>
        <ul>
            <?php $total = 0; foreach($cart as $key=>$value){ $total += $products[$value]->price ?>
                <li class="cart-item">
                    <img src="<?php echo $products[$value]->image ?>" alt="img">
                    <p><?php echo $products[$value]->name ?></p>
                    <p>Rs.<?php echo $products[$value]->price ?></p>
                    <p><a href="index.php?action=remove&id=<?php echo $value ?>"><i class="fas fa-trash"></i></a></p>
                </li>
            <?php } ?>
        </ul>
        <h6 class="cart-total">Sub-Total Rs.<?php echo $total ?></h6>
        <div class="cart-buttons">
            <a class="btn" href="javascript:void(0)" id="myBtn">Checkout</a>
        </div>
    <?php }else{ ?>
        <h6 class="cart-total">Your Cart is Empty</h6>
    <?php } ?>
</div>


<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
   <!-- <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>-->
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>ONLINE RESOURCE SHARING</h3>
            <p>New or second hand books and other items </p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/CALC.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/HOLDER.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/BEE.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/AOA.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/cg.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/MP.jpg" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <!--<div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p></p>
        </div>
    </div>-->

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p></p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p></p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p></p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured products</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
            <?php foreach($products as $key => $value){ ?>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $value->image ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $value->name ?></h3>
                        <div class="price">Rs.<?php echo $value->price ?></div>
                        <?php if(isset($cart[$key])){ ?>
                            <a href="index.php?action=remove&id=<?php echo $key ?>" class="btn">remove from cart</a>
                        <?php }else{ ?>
                            <a href="index.php?action=add&id=<?php echo $key ?>" class="btn">add to cart</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/HOLDER.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.100 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/SCALE.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.50<span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/MP.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.250<span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/m1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.300 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/BEE.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.250<span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/AOA.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.200 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/cg.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.200 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/DBMS.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.350 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/EM.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.200 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/MP.jpg" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <div class="price">Rs.250 <span></span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>For Engineering students</h3>
        <h1>Resource Sharing</h1>
        <a href="#" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

 <!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
          
        </div>

        <div class="box">
            <h3>extra links</h3>
            <!--<a href="#"> <i class="fas fa-arrow-right"></i> account info </a>-->
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
           <!-- <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>-->
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> eduswap@gmail.com</a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span> EDUSWAP TEAM </span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Your Order is successfully Placed...</p>
    <a href="index.php?action=delete" class="btn">click here to start fresh order</a>
  </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
    $('#shopping_cart_option').click(function(){
        $('body').addClass('open-cart-sec');
          });
    $('.btn-close').click(function(){
         $('body').removeClass('open-cart-sec');
    });
</script>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>

</body>
</html>