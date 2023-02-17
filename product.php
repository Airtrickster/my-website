<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome-free-6.2.1-web/css/all.min.css">
    <title>On your feet | Product</title>
</head>
<body>
    
    <header class="header">

        <a href="index.html" class="logo">
            <img src="images/mini-logo.png" alt="Logo">
        </a>
    
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="product.php">product</a>
            <a href="contact.php">contact</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fa-solid fa-star"></div>
            <div class="fa-solid fa-user" id="user-btn" onclick='<?php if (isset($_SESSION["user_id"])) { echo 'window.location.href="logout.php"'; } else { echo 'window.location.href="tos.html"'; } ?>'>
                <?php
                    if (isset($_SESSION["user_id"])) {
                    echo $_SESSION["username"];
                    } else {
                        echo "login";
                    }
                ?>
            </div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    
        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/products/formal_shoes/men/20081949_20MILANOS_20-_20KIAN_20-_20BLACK_20_281_29_9388b81a-192f-4f69-8138-396b88b11f3f_350x500.webp" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">Php 799/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/products/formal_shoes/men/7342001750194-1_902f865c-fedc-45e9-9c36-8fba87368b2d_350x500.webp" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">Php 2,999.78/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/products/formal_shoes/women/7405129793714-1_350x500.webp" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">Php 399/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/products/formal_shoes/women/7405778567346-1_350x500.webp" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">Php 499/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>
    
    </header>

    <section class="product" id="product">

        <h1 class="heading"> our <span>product</span> </h1>
    
        <div class="content">
            <img src="images/product_ath.png" style="width:100%;">
            <button onclick='window.location.href="athletic_shoes_men.html"' class="btn2 buttoncurved">Men</button>
          <button onclick='window.location.href="athletic_shoes_women.html"' class="btn2 buttoncurved">Women</button>
          </div>

          <div class="content">
            <img src="images/product_for.png" style="width:100%;">
            <button onclick='window.location.href="formal_shoes_men.html"' class="btn2 buttoncurved">Men</button>
          <button onclick='window.location.href="formal_shoes_women.html"' class="btn2 buttoncurved">Women</button>
          </div>

          <div class="content">
            <img src="images/product_cas.png" style="width:100%;">
            <button onclick='window.location.href="casual_shoes_men.html"' class="btn2 buttoncurved">Men</button>
          <button onclick='window.location.href="casual_shoes_women.html"' class="btn2 buttoncurved">Women</button>
          </div>

    </section>

    <section class="BestSeller" id="BestSeller">

        <h1 class="heading"> Best <span>Seller</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/products/athletic_shoes/men/132caceb69553d285f143e5caceec85bf6.rsquare.w600.webp" alt="">
                </div>
                <div class="content">
                    <h3>Altra Outroad Trail Running Shoe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Php 7634.55 </div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/products/formal_shoes/men/7341857669298-2_082302a4-7c41-4c47-b02d-11c04a8e32b7_350x500.webp" alt="">
                </div>
                <div class="content">
                    <h3>East Rock Men's Hanston Loafers</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Php 1,700.00 <span> 2,899.00</span></div>
                </div>
            </div>
    
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/products/casual_shoes/women/casual_shoe_20.png" alt="">
                </div>
                <div class="content">
                    <h3>Adidas Stan Smith Sneaker</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">Php 4,899.00 <span>5,000.00</span> </div>
                </div>
            </div>
    
        </div>
    
    </section>

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Wow! I finally found the shoe that I was looking for and it fits with my size! This store is a lifesaver</p>
                <img src="images/hern.jpg" class="user" alt="">
                <h3>Person 1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>"I ordered the Axel Arigato Clean 90, it is indeed cleaaannnn!! sheeshhh..., I'll order again"</p>
                <img src="images/eme.jpg" class="user" alt="">
                <h3>Person 2</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>This website is amazing! The layout is very user-friendly, and the search engine optimization is top notch. I would definitely recommend this website to anyone looking for a great online shopping experience. The website was very easy to use and I enjoyed browsing through the different styles of shoes and it was helpful to be able to see how the shoes would look before making a purchase.  I enjoy shopping online and using this website for purchasing online was a smooth and easy process. I will definitely shop on this website again.</p>
                <img src="images/cal.jpg" class="user" alt="">
                <h3>Person 3</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
    
        </div>
    
    </section>

    <footer class="footer">

        <div class="credit">
            <div class="wrap">
                <p>Be the first to know about our special offers, upcoming sales, special events, new arrivals, and more.</p>
            </div>
    
            <div class="help">
                <a href="FAQ.html">faq's</a>
                <a href="privacy_policy.html">privacy policy</a>
                <a href="shipping_policy.html">shipping policy</a>
                <a href="refund_policy.html">refund policy</a>
            </div>
    
            <div class="share">
                <a href="https://www.facebook.com/VandKApparel" class="fab fa-xl fa-square-facebook"></a>
                <a href="https://www.twitter.com/" class="fab fa-xl fa-square-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-xl fa-square-instagram"></a>
            </div>
        </div>
    
    </footer>
    
    <footer class="sub-footer">
        <p> Copyright &copy; 2023. On your feet, inc. all rights reserved.</p>
    </footer>


    <script src="js/script.js"></script>

</body>
</html>